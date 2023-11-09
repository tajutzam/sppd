<?php


namespace App\Services;

use App\Exceptions\WebException;
use App\Models\Cost;

class CostService implements Service
{

    private Cost $cost;


    public function __construct()
    {
        $this->cost = new Cost();
    }

    public function update($request, $id)
    {
        $cost = $this->findById($id);
        if (!isset($cost)) {
            throw new WebException("Ops , Id Cost Tidak Ditemukan");
        }
        $updated = $cost->update(
            $request
        );
        if ($updated) {
            return;
        }
        throw new WebException('Ops , Gagal Memperbarui Cost Terjadi Kesalahan');
    }


    public function delete($id)
    {
        $cost = $this->findById($id);
        try {
            //code...
            $cost->delete();
        } catch (\Throwable $th) {
            //throw $th;
            throw new WebException($th->getMessage());
        }
    }

    public function findAll()
    {
        return $this->cost->all();
    }


    public function findById($id)
    {
        $cost = $this->cost->where('id', $id)->first();


        if (!isset($cost)) {
            throw new WebException('Cost Tidak Ditemukan');
        }
        return $cost;
    }

    public function create($request)
    {
        $created = $this->cost->create($request);
        return $created;
    }





}