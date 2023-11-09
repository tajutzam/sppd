<?php

namespace App\Services;

use App\Exceptions\WebException;
use App\Models\Account;

class AccountService implements Service
{


    private Account $account;


    public function __construct()
    {
        $this->account = new Account();
    }

    public function create($request)
    {
        $created = $this->account->create($request);
        return $created;
    }

    public function update($request, $id)
    {
        $account = $this->findById($id);
        if (!isset($account)) {
            throw new WebException("Ops , Id Account Tidak Ditemukan");
        }
        $updated = $account->update(
            $request
        );
        if ($updated) {
            return;
        }
        throw new WebException('Ops , Gagal Memperbarui Account Terjadi Kesalahan');
    }


    public function delete($id)
    {
        $account = $this->findById($id);
        try {
            //code...
            $account->delete();
        } catch (\Throwable $th) {
            //throw $th;
            throw new WebException($th->getMessage());
        }
    }

    public function findAll()
    {
        return $this->account->all();
    }


    public function findById($id)
    {
        $account = $this->account->where('id', $id)->first();

        if (!isset($account)) {
            throw new WebException('Account Tidak Ditemukan');
        }
        return $account;
    }


}