@extends('layouts.sliderbar')
@section('content')
    <section class="container">
        <h2><a href="{{ route('Control-Estadistico.index') }}"><i class='bx bx-chevrons-left'></i></a>  Control Estadístico - Sección</h2>
        <hr>
        <div class="container center">
            <div class="row">
              <div class="col-5">
                <canvas id="GraficaSeccionMujer"></canvas>
              </div>
              <div class="col-5">
                <canvas id="GraficaSeccionHombre"></canvas>
              </div>
            </div>
        </div>
    </section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript">
    var labelsMujer =  {{ Js::from($labelsMujer) }};
    var dataMujer =  {{ Js::from($dataMujer) }};
    const ctx = document.getElementById('GraficaSeccionMujer');

    var labelsHombre =  {{ Js::from($labelsHombre) }};
    var dataHombre =  {{ Js::from($dataHombre) }};
    const GraficaSeccionHombre = document.getElementById('GraficaSeccionHombre');

    new Chart(ctx, {
    type: 'pie',
    data: {
      labels: labelsMujer,
      datasets: [{
        label: 'Sección - Mujer ',
        data: dataMujer,
        borderWidth: 1
      }]
    },
    options: {
        responsive: true,
        plugins: {
        legend: {
            position: 'top',
        },
        title: {
            display: true,
            text: 'Sección - Mujer'
        }
        }
    }
  });

  new Chart(GraficaSeccionHombre, {
    type: 'pie',
    data: {
      labels: labelsHombre,
      datasets: [{
        label: 'Sección - Hombre ',
        data: dataHombre,
        borderWidth: 1
      }]
    },
    options: {
        responsive: true,
        plugins: {
        legend: {
            position: 'top',
        },
        title: {
            display: true,
            text: 'Sección - Hombre'
        }
        }
    }
  });
</script>
@endsection