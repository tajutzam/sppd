<?php


namespace App\Services;

use App\Models\Law;

class LawService
{



    private Law $law;

    public function __construct()
    {
        $this->law = new Law();
    }



    public function findAll()
    {
        return $this->law->all()->toArray();
    }


    public function store()
    {

    }



}