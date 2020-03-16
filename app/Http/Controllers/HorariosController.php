<?php


namespace App\Http\Controllers;

use App\Horario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Transformers\HorarioTransformers;
use App\Http\Controllers\ApiController;

class HorariosController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horario = Horario::all();
    
        return $this->showAll($horario);
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
            'hora_m' => 'required',
            'color' => 'required'
        ];

        
        $this->validate($request, $reglas);

/*
        
*/
       $horario = Horario::create($horario);

        return $this->showOne($horario, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $horario = Horario::findOrfail($id);
        
        return $this->showOne($horario);
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
        $horario = Horario::findOrfail($id);
        $reglas = [        
            
        ];

  $this->validate($request, $reglas);

            if ($request->has('hora_m')){
                $horario->hora_m =$request->hora_m;
            }
 
            if ($request->has('color')){
                $horario->color =$request->color;
            }
            
        
        if (!$horario->isDirty()){
            return response()->json(['error'=>'Se debe especificar al menos un valor diferente para actualizar','code' => 422],422); }

        $horario->save();
        return response()->json(['data'=> $horario,200]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $horario = Horario::findOrfail($id);
        $horario->delete();
        
        return $this->showOne($horario);
    }
}

