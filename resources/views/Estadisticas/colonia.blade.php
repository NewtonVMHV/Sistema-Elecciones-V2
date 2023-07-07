@extends('layouts.sliderbar')
@section('content')
<section class="container">
    <h2><a href="{{ route('Control-Estadistico.index') }}"><i class='bx bx-chevrons-left'></i></a>  Control Estadístico - Colonia</h2>
    <hr>
    <div class="container col-5 center">
        <canvas id="GraficaColonia"></canvas>
    </div>
</section>   
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript">
    var labels =  {{ Js::from($labels) }};
    var data =  {{ Js::from($data) }};
    const ctx = document.getElementById('GraficaColonia');

    new Chart(ctx, {
    type: 'pie',
    data: {
      labels: labels,
      datasets: [{
        label: 'Control Estadístico - Colonia',
        data: data,
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
            text: 'Control Estadístico - Colonia'
        }
        }
    }
  });
</script> 
@endsection