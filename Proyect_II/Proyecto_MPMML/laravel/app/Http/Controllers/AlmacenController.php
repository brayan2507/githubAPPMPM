<?php

namespace App\Http\Controllers;

use App\Models\Administrador\Almacen;
use Illuminate\Http\Request;

class AlmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista_almacens = Almacen::all();
        $data = array("lista_almacens" => $lista_almacens);
        return response()->view("/Administrador/Almacen/index",$data,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=array();
        return response()->view("/Administrador/Almacen/create", $data,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Fecha=$request->input('Fecha');
        $Cantidad=$request->input('Cantidad');
        $Tamano=$request->input('Tamano');
        $Tipo=$request->input('Tipo');
        $Otros=$request->input('Otros');
        $almacen = new Almacen;
        $almacen->Fecha=$Fecha;
        $almacen->Cantidad=$Cantidad;
        $almacen->Tamano=$Tamano;
        $almacen->Tipo=$Tipo;
        $almacen->Otros=$Otros;
        $almacen->save();
        return redirect('/Almacen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administrador\Almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function show(Almacen $almacen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrador\Almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $almacen = Almacen::find($id);
        return view('Administrador/Almacen.edit')->with('almacen',$almacen);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administrador\Almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $almacen = Almacen::find($id);
        $almacen->Fecha=$request->get('Fecha');
        $almacen->Cantidad=$request->get('Cantidad');
        $almacen->Tamano=$request->get('Tamano');
        $almacen->Tipo=$request->get('Tipo');
        $almacen->Otros=$request->get('Otros');
        $almacen->save();
        return redirect('/Almacen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrador\Almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $almacen = Almacen::find($id);
        $almacen->delete();
        return redirect('/Almacen');
    }
}
