<?php


use App\horario;
use App\medicamento;
use App\dia;
use App\usuario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); 
        
        
        horario::truncate();
        medicamento::truncate();
        dia::truncate();
        usuario::truncate();


      
        horario::flushEventListeners();
        medicamento::flushEventListeners();
        dia::flushEventListeners();
        usuario::flushEventListeners();


        $cantidadhorarios = 10;
        $cantidadmedicamentos = 10;
        $cantidaddia = 10;
        $cantidadusuario = 10;


        factory(horario::class, $cantidadhorarios)->create();
        factory(medicamento::class, $cantidadmedicamentos)->create();
        factory(dia::class, $cantidaddia)->create();  
        factory(usuario::class, $cantidadusuario)->create(); 

    }
}
