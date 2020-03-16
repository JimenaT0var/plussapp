<?php

use App\Medicamento;
use App\Horario;
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
        
        Medicamento::truncate();
        Horario::truncate();

      

        Medicamento::flushEventListeners();
        Horario::flushEventListeners();

        $cantidadMedicamentos = 10;
        $cantidadHorarios = 10;


        factory(Medicamento::class, $cantidadMedicamentos)->create();   

        factory(Horario::class, $cantidadHorarios)->create();
    
        
    }
}
