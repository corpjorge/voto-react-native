<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">   
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <title>Oficina</title>     
    </head>
    <body>     
        <div class="list-group">         
            <a type="button" href="{{ url('pqrs')}}" class="list-group-item list-group-item-action">Pqrs</a>
            <a type="button" href="{{ url('eventos')}}" class="list-group-item list-group-item-action">Inscripción a eventos</a>
            <a type="button" href="{{ url('clasificados')}}" class="list-group-item list-group-item-action">Clasificados</a>
            <a type="button" href="{{ url('clasificado')}}" class="list-group-item list-group-item-action">Lista de clasificados</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
</html>