@extends('layouts.plantillabase')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="Venta/create" class="btn btn-primary">CREAR</a>


<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Tipo</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Valor</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($lista_ventas as $lista_venta)
    <tr>
        <td>{{$lista_venta->id}}</td>
        <td>{{$lista_venta->Nombre}}</td>
        <td>{{$lista_venta->Tipo}}</td>
        <td>{{$lista_venta->Cantidad}}</td>
        <td>{{$lista_venta->Valor}}</td>    
        <td>
        <form action="{{ route('Venta.destroy',$lista_venta->id) }}" method="POST">
            <a href="/Venta/{{$lista_venta->id}}/edit" class="btn btn-info">Editar</a>
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