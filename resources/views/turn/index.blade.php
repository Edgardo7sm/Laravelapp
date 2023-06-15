@extends('layouts.plantillabase')

@section('css')
<link href ="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection


@section('contenido')
<h2>Lista de turnos</h2>

<div class="text-end">
<a href="turnos/create" class="btn btn-primary mb-3"> Nuevo Turno</a> 
</div>
<table id="turnos" class="table table-striped table-bordered swadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">codigo</th>
            <th scope="col">Hora</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
        </tr>
</thead>
<tbody>
    @foreach ($turnos as $turno)
    
<tr>
        
        <td>{{$turno->id}}</td>
        <td>{{$turno->codigo}}</td>
        <td>{{$turno->hora}}</td>
        <td>{{$turno->estado}}</td>
    <td>
        <form action="{{route ('turnos.destroy',$turno->id)}}" method="POST">
        <a href="/turnos/{{$turno->id}}/edit" class="btn btn-info">Editar</a>
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
<a href="/peliculas" class="btn btn-primary mt-3">vista Pelicula</a> 
</div>
@endsection