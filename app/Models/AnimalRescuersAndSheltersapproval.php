<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalRescuersAndSheltersapproval extends Model
{
    use HasFactory;

    protected $table='animalrescuersandsheltersapproval';

    protected $fillable=[
        'admin_id',
        'animalrescuersandshelters_id',
        'approval',
        'confirm',
    ];
}
