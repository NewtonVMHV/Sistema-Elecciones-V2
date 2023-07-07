@extends('layouts.sliderbar')
@section('content')
<section class="container">
    <h2><a href="{{ route('Control-Estadistico.index') }}"><i class='bx bx-chevrons-left'></i></a>  Control Estadístico - Tipos</h2>
    <hr>
    <div class="container col-5 center">
        <canvas id="GraficaTipos"></canvas>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript">
    var labels =  {{ Js::from($labels) }};
    var data =  {{ Js::from($data) }};
    const ctx = document.getElementById('GraficaTipos');

    new Chart(ctx, {
    type: 'bar',
    data: {
      labels: labels,
      datasets: [{
        label: 'Control Estadístico - Tipos',
        data: data,
        backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 205, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(201, 203, 207, 0.2)'
        ],
        borderColor: [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)',
            'rgb(255, 205, 86)',
            'rgb(75, 192, 192)',
            'rgb(54, 162, 235)',
            'rgb(153, 102, 255)',
            'rgb(201, 203, 207)'
        ],
            borderWidth: 1
        }]
        },
        options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
        }
    });
</script>
@endsection