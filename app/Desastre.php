<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desastre extends Model
{
    protected $fillable = [
        'id',
        'latitude',
        'longitude'
    ];

    protected $table = 'desastres';
}
