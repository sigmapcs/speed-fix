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
            @foreach($servicios as $servicio)
                <tr>
                    <td>{{$servicio->id_Categoria_Servicio}}</td>
                    <td>{{$servicio->Alta_Categoria_Servicio}}</td>
                    <td>{{$servicio->Nombre_Categoria_Servicio}}</td>
                    <td>{{$servicio->Descripcion_Categoria_Servicio}}</td>
                    <td><a href="/servicio/edit/{{$servicio->id_Categoria_Servicio}}" class="btn btn-info">Editar</a></td>
                    <td><a href="/servicio/delete/{{$servicio->id_Categoria_Servicio}}" class="btn btn-danger">Borrar</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection