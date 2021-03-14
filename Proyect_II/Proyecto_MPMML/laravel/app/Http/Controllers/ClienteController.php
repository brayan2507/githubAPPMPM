<?php

namespace App\Http\Controllers;

use App\Models\Administrador\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista_clientes = Cliente::all();
        $data = array("lista_clientes" => $lista_clientes);
        return response()->view("Administrador/Cliente/index",$data,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=array();
        return response()->view("Administrador/Cliente/create", $data,200);
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
        $Apellido_Paterno=$request->input('Apellido_Paterno');
        $Apellido_Materno=$request->input('Apellido_Materno');
        $Tipo_Documento=$request->input('Tipo_Documento');
        $Numero_Documento=$request->input('Numero_Documento');
        $cliente = new Cliente;
        $cliente->Nombre=$Nombre;
        $cliente->Apellido_Paterno=$Apellido_Paterno;
        $cliente->Apellido_Materno=$Apellido_Materno;
        $cliente->Tipo_Documento=$Tipo_Documento;
        $cliente->Numero_Documento=$Numero_Documento;
        $cliente->save();
        return redirect('/Cliente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administrador\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrador\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('Administrador/Cliente.edit')->with('cliente',$cliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administrador\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $cliente = Cliente::find($id);
        $cliente->Nombre=$request->get('Nombre');
        $cliente->Apellido_Paterno=$request->get('Apellido_Paterno');
        $cliente->Apellido_Materno=$request->get('Apellido_Materno');
        $cliente->Tipo_Documento=$request->get('Tipo_Documento');
        $cliente->Numero_Documento=$request->get('Numero_Documento');
        $cliente->save();
        return redirect('/Cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrador\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect('/Cliente');
    }
}
