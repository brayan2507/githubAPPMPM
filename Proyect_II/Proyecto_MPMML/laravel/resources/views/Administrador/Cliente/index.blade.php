@extends('layouts.plantillabase')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="Cliente/create" class="btn btn-primary">CREAR</a>


<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido_Paterno</th>
      <th scope="col">Apellido_Materno</th>
      <th scope="col">Tipo_Documento</th>
      <th scope="col">Numero_Documento</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($lista_clientes as $lista_cliente)
    <tr>
        <td>{{$lista_cliente->id}}</td>
        <td>{{$lista_cliente->Nombre}}</td>
        <td>{{$lista_cliente->Apellido_Paterno}}</td>
        <td>{{$lista_cliente->Apellido_Materno}}</td>
        <td>{{$lista_cliente->Tipo_Documento}}</td>   
        <td>{{$lista_cliente->Numero_Documento}}</td>      
        <td>
        <form action="{{ route('Cliente.destroy',$lista_cliente->id) }}" method="POST">
            <a href="/Cliente/{{$lista_cliente->id}}/edit" class="btn btn-info">Editar</a>
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