@extends('layouts.plantillabase')

@section('contenido')
<h2>CREAR REGISTROS </h2>
<form action="/Venta" method="POST">
@csrf
  <<div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="Nombre" name="Nombre" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tipo</label>
    <input id="Tipo" name="Tipo" type="text" step="any" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="Cantidad" name="Cantidad" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Valor</label>
    <input id="Valor" name="Valor" type="text" class="form-control" tabindex="4">
  </div>
  <a href="/Venta" class="btn btn-secondary" tabindex="6">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="5">Guardar</button>
</form>

@endsection