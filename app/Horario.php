<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Transformers\HorarioTransformer;
use Illuminate\Database\Eloquent\SoftDeletes;


class Horario extends Model

{
    use SoftDeletes;
    public $transformer = HorarioTransformer::class;
    protected $table = 'Horarios';
    protected $dates = ['deleted_at'];
  
      /**
       * The attributes that are mass assignable.
       *
       * @var array
       */
      protected $fillable = [
        'hora_m',
        'color'
      ];
      public function horario()
    {
        return $this->belongsToMany(Horario::class);
    }
}
