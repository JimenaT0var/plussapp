<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class medicamento extends Model
{
    use SoftDeletes;

    protected $table = 'medicamentos';

    protected $fillable = [
        'id_m',
        'nom_m',
        'desc_m',
        'solucion_m',
        'porcion_m',
        'existencia',
        'caducidad',

    ];
}
