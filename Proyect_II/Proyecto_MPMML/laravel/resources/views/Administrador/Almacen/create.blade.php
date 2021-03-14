@extends('layouts.plantillabase')

@section('contenido')
<h2>CREAR REGISTROS DE MARCAS</h2>
<form action="/Almacen" method="POST">
@csrf
<div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input id="Fecha" name="Fecha" type="date" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="Cantidad" name="Cantidad" type="number" step="any" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tamaño</label>
    <input id="Tamano" name="Tamano" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tipo</label>
    <input id="Tipo" name="Tipo" type="text" class="form-control" tabindex="4">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Otros</label>
    <input id="Otros" name="Otros" type="text" class="form-control" tabindex="5">
  </div>
  <a href="/Almacen" class="btn btn-secondary" tabindex="7">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
</form>

@endsection