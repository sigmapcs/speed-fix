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
            @foreach($proveedores as $proveedor)
                <tr>
                    <td>{{$proveedor->id_Categoria_Proveedor}}</td>
                    <td>{{$proveedor->Alta_Categoria_Proveedor}}</td>
                    <td>{{$proveedor->Nombre_Categoria_Proveedor}}</td>
                    <td>{{$proveedor->Descripcion_Categoria_Proveedor}}</td>
                    <td><a href="/proveedor/edit/{{$proveedor->id_Categoria_Proveedor}}" class="btn btn-info">Editar</a></td>
                    <td><a href="/proveedor/delete/{{$proveedor->id_Categoria_Proveedor}}" class="btn btn-danger">Borrar</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection