@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR REGISTROS DE MARCAS</h2>

<form action="/Almacen/{{$almacen->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input id="Fecha" name="Fecha" type="date" class="form-control" value="{{$almacen->Fecha}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="Cantidad" name="Cantidad" type="number" step="any" class="form-control" value="{{$almacen->Cantidad}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tamaño</label>
    <input id="Tamano" name="Tamano" type="text" class="form-control" value="{{$almacen->Tamano}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tipo</label>
    <input id="Tipo" name="Tipo" type="text" class="form-control" value="{{$almacen->Tipo}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Otros</label>
    <input id="Otros" name="Otros" type="text" class="form-control" value="{{$almacen->Otros}}">
  </div>
  <a href="/Almacen" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>

</form>

@endsection