<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class horario extends Model
{
    use SoftDeletes;
    protected $table = 'horarios';

    protected $fillable = [
        'id',
        'hora_h',
        'color',

    ];

  
}
