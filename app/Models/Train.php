<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    protected $casts = [
        'departure_time' => 'datetime',
        'arrival_time' => 'datetime',
    ];
}