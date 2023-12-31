<!doctype html>
<html lang="en">
  <head>
  <div class="container">
  <div class="row">
    <div class="col text-center bg-light py-4">
      <h1 class="mb-3">Almacenes Santa Clara</h1>
      <p>Evaluación Tecnica</p>
    </div>
  </div>
</div>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>CRUD</title>
   
    <style>
      body {
        margin: 100px;
      }
    </style>
    
  </head>
  <body>
  
    
    <div class="'container'">
        @yield('contenido')
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    @yield('js')
  </body>
</html>