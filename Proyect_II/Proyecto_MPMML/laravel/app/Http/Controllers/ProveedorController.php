<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista_proveedors = Proveedor::all();
        $data = array("lista_proveedors" => $lista_proveedors);
        return response()->view("Administrador/Proveedor/index",$data,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=array();
        return response()->view("Administrador/Proveedor/create", $data,200);
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
        $Producto=$request->input('Producto');
        $Cantidad=$request->input('Cantidad');
        $Tipo=$request->input('Tipo');
        $Valor=$request->input('Valor');
        $Adicional=$request->input('Adicional');
        $proveedor = new Proveedor;
        $proveedor->Nombre=$Nombre;
        $proveedor->Producto=$Producto;
        $proveedor->Cantidad=$Cantidad;
        $proveedor->Tipo=$Tipo;
        $proveedor->Valor=$Valor;
        $proveedor->Adicional=$Adicional;
        $proveedor->save();
        return redirect('/Proveedor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show(Proveedor $proveedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedor = Proveedor::find($id);
        return view('Administrador/Proveedor.edit')->with('proveedor',$proveedor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $proveedor = Proveedor::find($id);
        $proveedor->Nombre=$request->get('Nombre');
        $proveedor->Producto=$request->get('Producto');
        $proveedor->Cantidad=$request->get('Cantidad');
        $proveedor->Tipo=$request->get('Tipo');
        $proveedor->Valor=$request->get('Valor');
        $proveedor->Adicional=$request->get('Adicional');
        $proveedor->save();
        return redirect('/Proveedor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedor = Proveedor::find($id);
        $proveedor->delete();
        return redirect('/Proveedor');
    }
}
