<?php


namespace App\Http\Controllers;

use App\Horario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Transformers\MedicamentosTransformers;
use App\Http\Controllers\ApiController;

class MedicamentosController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicamento = Medicamento::all();
    
        return $this->showAll($medicamento);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reglas = [

        'nombre_m' => 'required',
        'descripcion_m' => 'required',
        'solucion_m' => 'required',
        'porcion_m' => 'required',
        'existencia' => 'required',
        'caducidad'=> 'required'
      
        ];

        
        $this->validate($request, $reglas);

/*
        
*/
       $medicamento = Medicamento::create($medicamento);

        return $this->showOne($medicamento, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicamento = Medicamento::findOrfail($id);
        
        return $this->showOne($medicamento);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $medicamento = Medicamento::findOrfail($id);
        $reglas = [        
            
        ];

  $this->validate($request, $reglas);

            if ($request->has('nombre_m')){
                $medicamento->nombre_m =$request->nombre_m;
            }
            if ($request->has('descripcion_m')){
                $medicamento->descripcion_m =$request->descripcion_m;
            }
            if ($request->has('solucion_m')){
                $medicamento->solucion_m=$request->solucion_m;
            }
            if ($request->has('porcion_m')){
                $medicamento->porcion_m =$request->porcion_m;
            }

             if ($request->has('existencia')){
                $medicamento->existencia =$request->existencia;
            }
             if ($request->has('caducidad')){
                $medicamento->caducidad =$request->caducidad;
            }
            
        
        if (!$medicamento->isDirty()){
            return response()->json(['error'=>'Se debe especificar al menos un valor diferente para actualizar','code' => 422],422); }

        $medicamento->save();
        return response()->json(['data'=> $medicamento,200]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medicamento = Medicamento::findOrfail($id);
        $medicamento->delete();
        
        return $this->showOne($medicamento);
    }
}
