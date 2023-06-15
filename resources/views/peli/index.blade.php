@extends('layouts.plantillabase')

@section('css')
<link href ="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection


@section('contenido')
<h2>Lista de Peliculas</h2>
<div class="text-end">
<a href="peliculas/create" class="btn btn-primary mb-3"> Nueva Pelicula</a> 
</div>
<table id="peliculas" class="table table-striped table-bordered swadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">F. Publicación</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
        </tr>
</thead>
<tbody>
    @foreach ($peliculas as $pelicula)
<tr>
        <td>{{$pelicula->id}}</td>
        <td>{{$pelicula->nombre}}</td>
        <td>{{$pelicula->publicacion}}</td>
        <td>{{$pelicula->estado}}</td>
    <td>
        <form action="{{route ('peliculas.destroy',$pelicula->id)}}" method="POST">
        <a href="/peliculas/{{$pelicula->id}}/edit" class="btn btn-info">Editar</a>
       
        <a href="/turnos/{{$pelicula->id}}/edit" class="btn btn-warning">Turnos</a>
        @csrf
        @method("DELETE")
        <button type="submit" class="btn btn-danger">Borrar</button>
        </form>
    </td>
</tr>

    @endforeach

</tbody>

</table>
@section('js')
<script src ="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src ="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src ="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<script> 
$(document).ready(function () {
    $('#peliculas').DataTable({
        "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]]
    });
});
   </script>
@endsection
<div class="text-end">
<a href="/turnos" class="btn btn-primary mt-3">pestaña Turnos</a> 
</div>
@endsection