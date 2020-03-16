<?php


namespace App\Http\Controllers;

use App\medicamento;
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
        $medicamentos = medicamento::all();
    
        return $this->showAll($medicamentos);
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

        'nom_m' => 'required',
        'desc_m' => 'required',
        'solucion_m' => 'required',
        'porcion_m' => 'required',
        'existencia' => 'required',
        'caducidad'=> 'required'
      
        ];

        
        $this->validate($request, $reglas);

/*
        
*/
       $medicamentos = medicamento::create($medicamentos);

        return $this->showOne($medicamentos, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicamentos = medicamento::findOrfail($id);
        
        return $this->showOne($medicamentos);
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
        $medicamentos = medicamento::findOrfail($id);
        $reglas = [        
            
        ];

  $this->validate($request, $reglas);

            if ($request->has('nombre_m')){
                $medicamentos->nom_m =$request->nom_m;
            }
            if ($request->has('descripcion_m')){
                $medicamentos->desc_m =$request->desc_m;
            }
            if ($request->has('solucion_m')){
                $medicamentos->solucion_m=$request->solucion_m;
            }
            if ($request->has('porcion_m')){
                $medicamentos->porcion_m =$request->porcion_m;
            }

             if ($request->has('existencia')){
                $medicamentos->existencia =$request->existencia;
            }
             if ($request->has('caducidad')){
                $medicamentos->caducidad =$request->caducidad;
            }
            
        
        if (!$medicamentos->isDirty()){
            return response()->json(['error'=>'Se debe especificar al menos un valor diferente para actualizar','code' => 422],422); }

        $medicamentos->save();
        return response()->json(['data'=> $medicamentos,200]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medicamentos = Medicamento::findOrfail($id);
        $medicamentos->delete();
        
        return $this->showOne($medicamentos);
    }
}
