<?php

namespace App\Http\Controllers;

use App\Models\Administrador\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista_ventas = Venta::all();
        $data = array("lista_ventas" => $lista_ventas);
        return response()->view("Administrador/Venta/index",$data,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=array();
        return response()->view("Administrador/Venta/create", $data,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Nombre=$request->input('Nombre');
        $Tipo=$request->input('Tipo');
        $Cantidad=$request->input('Cantidad');
        $Valor=$request->input('Valor');
        $venta = new Venta;
        $venta->Nombre=$Nombre;
        $venta->Tipo=$Tipo;
        $venta->Cantidad=$Cantidad;
        $venta->Valor=$Valor;
        $venta->save();
        return redirect('/Venta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administrador\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show(Venta $venta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrador\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $venta = Venta::find($id);
        return view('Administrador/Venta.edit')->with('venta',$venta);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administrador\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $venta = Venta::find($id);
        $venta->Nombre=$request->get('Nombre');
        $venta->Tipo=$request->get('Tipo');
        $venta->Cantidad=$request->get('Cantidad');
        $venta->Valor=$request->get('Valor');
        $venta->save();
        return redirect('/Venta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrador\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $venta = Venta::find($id);
        $venta->delete();
        return redirect('/Venta');
    }
}
