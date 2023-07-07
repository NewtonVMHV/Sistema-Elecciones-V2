<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>{{ $gestiones->nombre }}</title>
  </head>
  <body>
    <form action="{{route('Gestiones.export',$gestiones)}}" class="container justify-content-center">
        <div class="row">
            <div class="col text-end">
                <p>Fecha: {{ $gestiones->fechasol }}</p>
                <p>Asunto: Solicitud</p>
            </div>
            <div class="col text-start">
                <p><strong>PARA:</strong></p>
                <p><strong>A QUIEN CORRESPONDA:</strong></p>
                <p><strong>PRESENTE</strong></p>
            </div>
        </div>
        <div class="text-start">
            <br>
            <br>
            <P>{{ $gestiones->solicitud }}</P>
            <p>{{ $gestiones->respuesta }}</p>
            <p>{{ $gestiones->observaciones }}</p>
            <p>Extiendo la presente, a solucitud y para los fines a que haya lugar.</p>
            <p>Saludos cordiales.</p>
            <br>
            <br>
        </div>
        <div class="text-center">
            <p>{{ $gestiones->nombre }} {{ $gestiones->a_paterno }} {{ $gestiones->a_materno }}</p>
            <p>Atentamente</p>
        </div>
    </form>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>