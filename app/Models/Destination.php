<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory, Uuids;


    protected $fillable = [
        'type_destination_id',
        'places_id',
        'type'
    ];

    protected $table = 'destination';
}
