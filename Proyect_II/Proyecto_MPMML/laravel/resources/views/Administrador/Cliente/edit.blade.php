@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR REGISTROS </h2>

<form action="/Cliente/{{$cliente->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="Nombre" name="Nombre" type="text" class="form-control" value="{{$cliente->Nombre}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido Paterno</label>
    <input id="Apellido_Paterno" name="Apellido_Paterno" type="text" step="any" class="form-control" value="{{$cliente->Apellido_Paterno}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido Materno</label>
    <input id="Apellido_Materno" name="Apellido_Materno" type="text" step="any" class="form-control" value="{{$cliente->Apellido_Materno}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tipo De Documento</label>
    <input id="Tipo_Documento" name="Tipo_Documento" type="text" step="any" class="form-control" value="{{$cliente->Tipo_Documento}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Numero De Documento</label>
    <input id="Numero_Documento" name="Numero_Documento" type="text" step="any" class="form-control" value="{{$cliente->Numero_Documento}}">
  </div>
  <a href="/Cliente" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>

</form>

@endsection