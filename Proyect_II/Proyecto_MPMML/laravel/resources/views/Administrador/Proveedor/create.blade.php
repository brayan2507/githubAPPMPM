@extends('layouts.plantillabase')

@section('contenido')
<h2>CREAR REGISTROS </h2>
<form action="/Proveedor" method="POST">
@csrf
<div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="Nombre" name="Nombre" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Producto</label>
    <input id="Producto" name="Producto" type="text" step="any" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="Cantidad" name="Cantidad" type="number" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tipo</label>
    <input id="Tipo" name="Tipo" type="text" class="form-control">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Valor</label>
    <input id="Valor" name="Valor" type="text" class="form-control" tabindex="4">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Adicional</label>
    <input id="Adicional" name="Adicional" type="text" class="form-control" tabindex="5">
  </div>
  <a href="/Proveedor" class="btn btn-secondary" tabindex="7">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
</form>

@endsection