@extends('layouts.sped-fix')

@section('btn-container')
    
@endsection
@section('content')
    
    <div class="col-md-12">
        <div class=" d-flex justify-content-end">
            <a href="/add/categoriacliente" class="btn-add-new btn btn-info">Agregar Nuevo</a>
        </div>
        <h1 class="display-4 text-center">Categoria {{$category}}</h1>  
        <table class="table table-hover nowrap margin-bottom-0 border">
            <tr>
                <th>ID</th>
                <th>Alta</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{$cliente->id_Categoria_Cliente}}</td>
                    <td>{{$cliente->Alta_Categoria_Cliente}}</td>
                    <td>{{$cliente->Nombre_Categoria_Cliente}}</td>
                    <td>{{$cliente->Descripcion_Categoria_Cliente}}</td>
                    <td><a href="/cliente/edit/{{$cliente->id_Categoria_Cliente}}" class="btn btn-info">Editar</a></td>
                    <td><a href="/cliente/delete/{{$cliente->id_Categoria_Cliente}}" class="btn btn-danger">Borrar</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection