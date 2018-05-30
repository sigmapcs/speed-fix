@extends('layouts.sped-fix')

@section('content')
    <div class="col-md-10">
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
            @foreach($productos as $producto)
                <tr>
                    <td>{{$producto->id_Categoria_Producto}}</td>
                    <td>{{$producto->Alta_Categoria_Producto}}</td>
                    <td>{{$producto->Nombre_Categoria_Producto}}</td>
                    <td>{{$producto->Descripcion_Categoria_Producto}}</td>
                    <td><a href="/producto/edit/{{$producto->id_Categoria_Producto}}" class="btn btn-info">Editar</a></td>
                    <td><a href="/producto/delete/{{$producto->id_Categoria_Producto}}" class="btn btn-danger">Borrar</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection