<?php

namespace App\Http\Controllers;

use App\usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ApiController;

class UsuariosController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = usuario::all();
        return $this->showAll($usuarios);
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

            'nom_u' => 'required',
            'app_u' => 'required',
            'apm_u' => 'required',
            'fn_u' => 'required',
            'genero_u' => 'required',
            'col_u' => 'required',
            'typeuser' => 'required',
            'calle_u' => 'required',
            'mum_u' => 'required',
            'correo' => 'required',
            'vercorreo' => 'required',
            'password' => 'required',
            'verpassword' => 'required',
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
        $usuarios = usuario::findOrfail($id);
        
        return $this->showOne($usuarios);
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
        $usuarios = usuario::findOrfail($id);
        $reglas = [
            

            
        ];

  $this->validate($request, $reglas);

            if ($request->has('nom_u')){
                $usuarios->nom_u =$request->nom_u;
            }

            if ($request->has('app_u') && $usuarios->app_u != $request->app_u){
                $usuarios->app_u = $request->app_u;
            }
            if ($request->has('apm_u') && $usuarios->apm_u != $request->apm_u){
                $usuarios->apm_u = $request->apm_u;
            }
            if ($request->has('fn_u') && $usuarios->fn_u != $request->fn_u){
                $usuarios->fn_u = $request->fn_u;
            }
            if ($request->has('genero_u') && $usuarios->genero_u != $request->genero_u){
                $usuarios->genero_u = $request->genero_u;
            }
            if ($request->has('col_u') && $usuarios->col_u != $request->col_u){
                $usuarios->col_u = $request->col_u;
            }
            if ($request->has('typeuser') && $usuarios->typeuser != $request->typeuser){
                $usuarios->typeuser = $request->typeuser;
            }
            if ($request->has('calle_u') && $usuarios->calle_u != $request->calle_u){
                $usuarios->calle_u = $request->calle_u;
            }
            if ($request->has('mum_u') && $usuarios->mum_u != $request->mum_u){
                $usuarios->mum_u = $request->mum_u;
            }
            if ($request->has('correo') && $usuarios->correo != $request->correo){
                $usuarios->correo = $request->correo;
            }
            if ($request->has('vercorreo') && $usuarios->vercorreo != $request->vercorreo){
                $usuarios->vercorreo = $request->vercorreo;
            }
            if ($request->has('password') && $usuarios->password != $request->password){
                $usuarios->password = $request->password;
            }
            if ($request->has('verpassword') && $usuarios->verpassword != $request->verpassword){
                $usuarios->verpassword = $request->verpassword;
            }


        
        if (!$usuarios->isDirty()){
            return response()->json(['error'=>'Se debe especificar al menos un valor diferente para actualizar','code' => 422],422);
            
        }

        $usuarios->save();
        return response()->json(['data'=> $usuarios,200]);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarios = usuario::findOrfail($id);
        $usuarios->delete();
        
        return $this->showOne($usuarios);
    }
}
