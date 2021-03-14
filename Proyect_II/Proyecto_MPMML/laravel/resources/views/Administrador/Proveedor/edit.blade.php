@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR REGISTROS DE MARCAS</h2>

<form action="/Proveedor/{{$proveedor->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="Nombre" name="Nombre" type="text" class="form-control" value="{{$proveedor->Nombre}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Producto</label>
    <input id="Producto" name="Producto" type="text" step="any" class="form-control" value="{{$proveedor->Producto}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="Cantidad" name="Cantidad" type="text" class="form-control" value="{{$proveedor->Cantidad}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tipo</label>
    <input id="Tipo" name="Tipo" type="text" class="form-control" value="{{$proveedor->Tipo}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Valor</label>
    <input id="Valor" name="Valor" type="text" class="form-control" value="{{$proveedor->Valor}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Adicional</label>
    <input id="Adicional" name="Adicional" type="text" class="form-control" value="{{$proveedor->Adicional}}">
  </div>
  <a href="/Proveedor" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>

</form>

@endsection