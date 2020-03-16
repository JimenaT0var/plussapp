<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Transformers\MedicamentoTransformer;
use Illuminate\Database\Eloquent\SoftDeletes;


class Medicamento extends Model

{
    use SoftDeletes;
    public $transformer = MedicamentoTransformer::class;
    protected $table = 'Medicamentos';
    protected $dates = ['deleted_at'];
  
      /**
       * The attributes that are mass assignable.
       *
       * @var array
       */
      protected $fillable = [
        'nombre_m',
        'descripcion_m',
        'solucion_m',
        'porcion_m',
        'existencia',
        'caducidad'
      ];
      public function medicamento()
    {
        return $this->belongsToMany(Medicamento::class);
    }
}
