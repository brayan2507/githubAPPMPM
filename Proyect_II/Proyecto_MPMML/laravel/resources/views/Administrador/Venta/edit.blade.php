@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR REGISTROS DE MARCAS</h2>

<form action="/Venta/{{$venta->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="Nombre" name="Nombre" type="text" class="form-control" value="{{$venta->Nombre}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tipo</label>
    <input id="Tipo" name="Tipo" type="text" step="any" class="form-control" value="{{$venta->Tipo}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="Cantidad" name="Cantidad" type="text" class="form-control" value="{{$venta->Cantidad}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Valor</label>
    <input id="Valor" name="Valor" type="text" class="form-control" value="{{$venta->Valor}}">
  </div>

  <a href="/Venta" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>

</form>

@endsection