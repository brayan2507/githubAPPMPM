@extends('layouts.plantillabase')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="Proveedor/create" class="btn btn-primary">CREAR</a>


<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Producto</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Tipo</th>
      <th scope="col">Valor</th>
      <th scope="col">Adicional</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($lista_proveedors as $lista_proveedor)
    <tr>
        <td>{{$lista_proveedor->id}}</td>
        <td>{{$lista_proveedor->Nombre}}</td>
        <td>{{$lista_proveedor->Producto}}</td>
        <td>{{$lista_proveedor->Cantidad}}</td>
        <td>{{$lista_proveedor->Tipo}}</td>  
        <td>{{$lista_proveedor->Valor}}</td>  
        <td>{{$lista_proveedor->Adicional}}</td>     
        <td>
        <form action="{{ route('Proveedor.destroy',$lista_proveedor->id) }}" method="POST">
            <a href="/Proveedor/{{$lista_proveedor->id}}/edit" class="btn btn-info">Editar</a>
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