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
            @foreach($personal as $persona)
                <tr>
                    <td>{{$persona->id_Categoria_Personal}}</td>
                    <td>{{$persona->Alta_Categoria_Personal}}</td>
                    <td>{{$persona->Nombre_Categoria_Personal}}</td>
                    <td>{{$persona->Descripcion_Categoria_Personal}}</td>
                    <td><a href="/persona/edit/{{$persona->id_Categoria_Personal}}" class="btn btn-info">Editar</a></td>
                    <td><a href="/persona/delete/{{$persona->id_Categoria_Personal}}" class="btn btn-danger">Borrar</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection