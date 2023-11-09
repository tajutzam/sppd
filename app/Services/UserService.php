<?php


namespace App\Services;

use App\Exceptions\WebException;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserService implements Service
{

    private User $user;


    public function __construct()
    {
        $this->user = new User();
    }

    public function updatePassword($oldPassword, $newPassword, $confirmPassword, $id)
    {
        $user = $this->findById($id);
        if (!isset($user)) {
            throw new WebException("User Tidak Ditemukan");
        }

        if ($newPassword != $confirmPassword) {
            throw new WebException('Ops , Password Dan Konfirmasi Password Tidak Sesuai');
        }

        if (Hash::check($oldPassword, $user->password)) {
            $updated = $user->update([
                'password' => Hash::make($newPassword)
            ]);

            if ($updated) {
                return true;
            }
            throw new WebException('Ops, Gagal Mengupdate Password Terjadi Kesalahan');
        }
        throw new WebException('Ops , Password Lama Tidak Sesuai');
    }

    public function create(array $data)
    {

    }

    public function update($id, $request)
    {

    }

    public function delete($id)
    {

    }

    public function findAll()
    {
        return $this->user->all();
    }

    public function findById($id)
    {
        return $this->user->find($id);
    }

}