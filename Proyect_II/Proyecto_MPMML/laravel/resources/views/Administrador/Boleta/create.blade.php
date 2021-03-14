@extends('layouts.plantillabase')

@section('contenido')
<h2>CREAR REGISTROS </h2>
<form action="/Boleta" method="POST">
@csrf
<div class="mb-3">
    <label for="" class="form-label">N_Boleta</label>
    <input id="N_Boleta" name="N_Boleta" type="text" step="any" class="form-control" tabindex="1">
  </div>
<div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="Nombre" name="Nombre" type="text" class="form-control" tabindex="2">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Producto</label>
    <input id="Producto" name="Producto" type="text" step="any" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="Cantidad" name="Cantidad" type="text" step="any" class="form-control" tabindex="4">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Valor</label>
    <input id="Valor" name="Valor" type="text" step="any" class="form-control" tabindex="5">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Especificaciones</label>
    <input id="Especificaciones" name="Especificaciones" type="text" step="any" class="form-control" tabindex="6">
  </div>
  <a href="/Boleta" class="btn btn-secondary" tabindex="8">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>
</form>

@endsection