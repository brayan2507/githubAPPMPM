@extends('layouts.plantillabase')

@section('contenido')
<h2>CREAR REGISTROS </h2>
<form action="/Cliente" method="POST">
@csrf
<div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="Nombre" name="Nombre" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido Paterno</label>
    <input id="Apellido_Paterno" name="Apellido_Paterno" type="text" step="any" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido Materno</label>
    <input id="Apellido_Materno" name="Apellido_Materno" type="text" step="any" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tipo De Documento</label>
    <input id="Tipo_Documento" name="Tipo_Documento" type="text" step="any" class="form-control" tabindex="4">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Numero De Documento</label>
    <input id="Numero_Documento" name="Numero_Documento" type="text" step="any" class="form-control" tabindex="5">
  </div>
  <a href="/Cliente" class="btn btn-secondary" tabindex="7">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
</form>

@endsection