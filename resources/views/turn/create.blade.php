@extends('layouts.plantillabase')

@section('contenido')

<h2>Crear Turnos</h2>

<form action="/turnos" method="POST">
    @csrf
    <div class ="mb-3">
        <label for="" class="form-label">id</label>
        <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">
    </div>
    <div class ="mb-3">
        <label for="" class="form-label">Hora</label>
        <input id="hora" name="hora" type="time" class="form-control" tabindex="2">
    </div>     
    <div class ="mb-3">
        <label for="" class="form-label">Estado</label>
    <select name="estado"  id="estado" class="form-control" tabindex="3">
             <option value="activo">Activo</option>
             <option value="inactivo">Inactivo</option>
             id="estado"
    </select>
        
    </div>


    <a href ="/turnos" class="btn btn-secondary mt-3" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary mt-3" tabindex="4">Guardar</button>

</form>


@endsection