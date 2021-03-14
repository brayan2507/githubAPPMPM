@extends('layouts.plantillabase')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="Boleta/create" class="btn btn-primary">CREAR</a>


<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">N_Boleta</th>
      <th scope="col">Nombre</th>
      <th scope="col">Producto</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Valor</th>
      <th scope="col">Especificaciones</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($lista_boletas as $lista_boleta)
    <tr>
        <td>{{$lista_boleta->id}}</td>
        <td>{{$lista_boleta->N_Boleta}}</td>
        <td>{{$lista_boleta->Nombre}}</td>
        <td>{{$lista_boleta->Producto}}</td>
        <td>{{$lista_boleta->Cantidad}}</td>   
        <td>{{$lista_boleta->Valor}}</td>
        <td>{{$lista_boleta->Especificaciones}}</td>      
        <td>
        <form action="{{ route('Boleta.destroy',$lista_boleta->id) }}" method="POST">
            <a href="/Boleta/{{$lista_boleta->id}}/edit" class="btn btn-info">Editar</a>
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