@extends('layouts.plantillabase')

@section('contenido')

<h2>CREAR REGISTROS</h2>

<form action="/peliculas" method="POST">
    @csrf
    <div class ="mb-3">
        <label for="" class="form-label">Codigo</label>
        <input id="id" name="id" type="text" class="form-control" tabindex="1">
    </div>
    <div class ="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2">
    </div>
    <div class ="mb-3">
        <label for="" class="form-label">F.Publicación</label>
        <input id="publicacion" name="publicacion" type="date" class="form-control" tabindex="3">
    </div>

    <div class ="mb-3">
        <label for="" class="form-label">Estado</label>
    <select name="estado"  id="estado" class="form-control" tabindex="4">
             <option value="activo">Activo</option>
             <option value="inactivo">Inactivo</option>
             id="estado"
    </select>
        
    </div>


    
    <div id="dropzone" class="dropzone">
  Arrastra y suelta una imagen aquí
</div>
<style>
  .dropzone {
    width: 300px;
    height: 200px;
    border: 2px dashed #ccc;
    text-align: center;
    padding: 10px;
  }
</style>
<script>
  const dropzone = document.getElementById('dropzone');

  dropzone.addEventListener('dragenter', handleDragEnter);
  dropzone.addEventListener('dragover', handleDragOver);
  dropzone.addEventListener('dragleave', handleDragLeave);
  dropzone.addEventListener('drop', handleDrop);

  dropzone.addEventListener('dragenter', preventDefault);
  dropzone.addEventListener('dragover', preventDefault);
  dropzone.addEventListener('dragleave', preventDefault);
  dropzone.addEventListener('drop', preventDefault);

  function handleDragEnter(event) {
    dropzone.classList.add('highlight');
  }

  function handleDragOver(event) {
    event.preventDefault();
  }

  function handleDragLeave(event) {
    dropzone.classList.remove('highlight');
  }

  function handleDrop(event) {
    event.preventDefault();

    const files = event.dataTransfer.files;
    if (files.length > 0) {
      const file = files[0];
      if (file.type.startsWith('image/')) {
        const formData = new FormData();
        formData.append('image', file);

        axios.post('/upload', formData)
          .then(response => {
            // Procesar la respuesta si es necesario
          })
          .catch(error => {
            // Manejar errores si es necesario
          });
      }
    }

    dropzone.classList.remove('highlight');
  }

  function preventDefault(event) {
    event.preventDefault();
  }
</script>




    <a href ="/peliculas" class="btn btn-secondary mt-3" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary mt-3" tabindex="4">Guardar</button>

</form>



@endsection