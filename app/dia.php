<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class dia extends Model
{
    use SoftDeletes;
    protected $table = 'dias';
    protected $dates = ['fecha'];

    protected $fillable = [
        'id_d',
        'dia',
        'fecha',

    ];

    protected $casts = [
        'fecha' => 'datetime:Y-m-d',
    ];
}
