@extends('layouts.plantillabase')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="Almacen/create" class="btn btn-primary">CREAR</a>


<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Fecha</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Tamaño</th>
      <th scope="col">Tipo</th>
      <th scope="col">Otros</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($lista_almacens as $lista_almacen)
    <tr>
        <td>{{$lista_almacen->id}}</td>
        <td>{{$lista_almacen->Fecha}}</td>
        <td>{{$lista_almacen->Cantidad}}</td>
        <td>{{$lista_almacen->Tamano}}</td>
        <td>{{$lista_almacen->Tipo}}</td>
        <td>{{$lista_almacen->Otros}}</td>     
        <td>
        <form action="{{ route('Almacen.destroy',$lista_almacen->id) }}" method="POST">
            <a href="/Almacen/{{$lista_almacen->id}}/edit" class="btn btn-info">Editar</a>
            @csrf
              @method('DELETE')
            <button class="btn btn-danger">Borrar</button>
            </form>    
        </td> 
    </tr>
    @endforeach
  </tbody>
</table>

@endsection