<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class usuario extends Model
{
    use SoftDeletes;

    protected $table = 'usuarios';
    protected $dates = ['fn_u'];

    protected $fillable = [
        'id_u',
        'nom_u',
        'app_u',
        'apm_u',
        'fn_u',
        'genero_u',
        'col_u',
        'typeuser',
        'calle_u',
        'mum_u',
        'correo',
        'vercorreo',
        'password',
        'verpassword',
    ];

    protected $casts = [
        'fn_u' => 'datetime:Y-m-d',
    ];
}
