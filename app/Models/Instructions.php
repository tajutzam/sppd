<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructions extends Model
{
    use HasFactory, Uuids;





    protected $table = 'instructions';

    public function employees()
    {
        return $this->hasMany(InstructionsEmployees::class);
    }

}
