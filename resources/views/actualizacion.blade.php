<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">     
    <link href="{{ asset('/css/navbar-top-fixed.css') }}" rel="stylesheet">
    <title>Oficina</title>    
  </head>
  <body>    
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #0066b8;">
      <div class="container-fluid">
        <a class="navbar-brand" style="color: #e4dede">{{ auth()->user()->name }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">                    
          <form class="d-flex" method="POST" action="{{ route('logout') }}">   
            @csrf         
            <button type="submit" class="btn btn-outline-info" type="submit">Salir</button>
          </form>        
        </div>
      </div>
    </nav>
    <main class="container">
        <div id="actualizacion"></div> 
    </main> 
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> 
   <script type="text/javascript" src="https://oss.sheetjs.com/sheetjs/xlsx.full.min.js"></script>
   <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
   <script src="/js/actualizacion/main.js"></script> 
</body>
</html>
