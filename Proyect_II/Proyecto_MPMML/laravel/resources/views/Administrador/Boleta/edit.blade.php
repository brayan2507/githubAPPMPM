@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR REGISTROS </h2>

<form action="/Boleta/{{$boleta->id}}" method="POST">
    @csrf    
    @method('PUT')
    <div class="mb-3">
    <label for="" class="form-label">N_Boleta</label>
    <input id="N_Boleta" name="N_Boleta" type="text" step="any" class="form-control" value="{{$boleta->N_Boleta}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="Nombre" name="Nombre" type="text" class="form-control" value="{{$boleta->Nombre}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Producto</label>
    <input id="Producto" name="Producto" type="text" step="any" class="form-control" value="{{$boleta->Producto}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="Cantidad" name="Cantidad" type="Number" step="any" class="form-control" value="{{$boleta->Cantidad}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Valor</label>
    <input id="Valor" name="Valor" type="Number" step="any" class="form-control" value="{{$boleta->Valor}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Especificaciones</label>
    <input id="Especificaciones" name="Especificaciones" type="text" step="any" class="form-control" value="{{$boleta->Especificaciones}}">
  </div>
  <a href="/Boleta" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>

</form>

@endsection