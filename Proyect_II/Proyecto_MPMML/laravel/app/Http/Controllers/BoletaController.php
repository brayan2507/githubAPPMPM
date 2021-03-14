<?php

namespace App\Http\Controllers;

use App\Models\Administrador\Boleta;
use Illuminate\Http\Request;

class BoletaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista_boletas = Boleta::all();
        $data = array("lista_boletas" => $lista_boletas);
        return response()->view("Administrador/Boleta/index",$data,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=array();
        return response()->view("Administrador/Boleta/create", $data,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $N_Boleta=$request->input('N_Boleta');
        $Nombre=$request->input('Nombre');
        $Producto=$request->input('Producto');
        $Cantidad=$request->input('Cantidad');
        $Valor=$request->input('Valor');
        $Especificaciones=$request->input('Especificaciones');
        $boleta = new Boleta;
        $boleta->N_Boleta=$N_Boleta;
        $boleta->Nombre=$Nombre;
        $boleta->Producto=$Producto;
        $boleta->Cantidad=$Cantidad;
        $boleta->Valor=$Valor;
        $boleta->Especificaciones=$Especificaciones;
        $boleta->save();
        return redirect('/Boleta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administrador\Boleta  $boleta
     * @return \Illuminate\Http\Response
     */
    public function show(Boleta $boleta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrador\Boleta  $boleta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $boleta = Boleta::find($id);
        return view('Administrador/Boleta.edit')->with('boleta',$boleta);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administrador\Boleta  $boleta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $boleta = Boleta::find($id);
        $boleta->N_Boleta=$request->get('N_Boleta');
        $boleta->Nombre=$request->get('Nombre');
        $boleta->Producto=$request->get('Producto');
        $boleta->Cantidad=$request->get('Cantidad');
        $boleta->Valor=$request->get('Valor');
        $boleta->Especificaciones=$request->get('Especificaciones');
        $boleta->save();
        return redirect('/Boleta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrador\Boleta  $boleta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $boleta = Boleta::find($id);
        $boleta->delete();
        return redirect('/Boleta');
    }
}
