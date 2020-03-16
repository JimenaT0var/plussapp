<?php

namespace App\Http\Controllers;

use App\dia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ApiController;

class DiasController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dias = dia::all();
        return $this->showAll($dias);
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

            'dia' => 'required',
            'fecha' => 'required',
        ];
        $this->validate($request, $reglas);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dias = dia::findOrfail($id);
        
        return $this->showOne($dias);
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
        $dias = dia::findOrfail($id);
        $reglas = [
            

            
        ];

  $this->validate($request, $reglas);

            if ($request->has('dia')){
                $$dias->dia =$request->dia;
            }

            if ($request->has('fecha') && $dias->fecha != $request->fecha){
                $dias->fecha = $request->fecha;
            }

        
        if (!$dias->isDirty()){
            return response()->json(['error'=>'Se debe especificar al menos un valor diferente para actualizar','code' => 422],422);
            
        }

        $dias->save();
        return response()->json(['data'=> $dias,200]);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dias = dia::findOrfail($id);
        $dias->delete();
        
        return $this->showOne($dias);
    }
}
