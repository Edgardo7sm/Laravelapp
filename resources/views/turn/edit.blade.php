@extends('layouts.plantillabase')

@section('contenido')

<h2>Editar Turnos</h2>

<form action="/turnos{{$turno->id}}" method="POST" >
    @csrf
    @method('PUT')

    <div class ="mb-3">
        <label for="" class="form-label">ID</label>
        <input id="codigo" name="codigo" type="text" class="form-control" value="{{$turno->codigo}}">
    </div>
    <div class ="mb-3">
        <label for="" class="form-label">Turno</label>
        <input id="hora" name="hora" type="time" class="form-control"  value="{{$turno->hora}}">
    </div>     
    <div class ="mb-3">
        <label for="" class="form-label">Estado</label>
    <select name="estado"  id="estado" class="form-control"  value="{{$turno->estado}}">
             <option value="activo">Activo</option>
             <option value="inactivo">Inactivo</option>
            
    </select>
        
    </div>


    <a href ="/turnos" class="btn btn-secondary mt-3" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary mt-3" tabindex="4">Guardar</button>

</form>


@endsection