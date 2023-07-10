@extends('layouts.sliderbar')
@section('content')
    <section class="container">
        <h2>Control Estadístico</h2>
        <hr>
        @can('estadisticas-meses')
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Control Estadístico - Mes de nacimiento
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <div class="row">
                      <div style="text-align: justify;">
                          <p>
                              El Control Estadístico - Mes de nacimiento supervisa los registros, para proporcionar la cantidad de los datos 
                              a partir de la lectura de cada mes de nacimiento registrado por el colaborador.
                          </p>
                          <div class="d-grid gap-2">
                              <a class="btn btn-info" type="button" href="{{route('Control-Estadistico.meses')}}">Visualizar gráfica</a>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
        @endcan
        @can('estadisticas-seccion')
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Control Estadístico - Sección
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="row">
                <div style="text-align: justify;">
                    <p>
                      El Control Estadístico - Sección supervisa los registros, para proporcionar la cantidad de los datos 
                      a partir de la lectura de cada seccion registrado por el colaborador.
                    </p>
                    <div class="d-grid gap-2">
                      <a class="btn btn-info" type="button" href="{{route('Control-Estadistico.seccion')}}">Visualizar gráfica</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endcan
        @can('estadisticas-colonia')
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Control Estadístico - Colonia
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div style="text-align: justify;">
                <p>
                  El Control Estadístico - Colonia supervisa los registros, para proporcionar la cantidad de los datos 
                  a partir de la lectura de cada colonia registrado por el colaborador.
                </p>
                <div class="d-grid gap-2">
                  <a class="btn btn-info" type="button" href="{{route('Control-Estadistico.colonia')}}">Visualizar gráfica</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endcan
        @can('estadisticas-sexo')
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Control Estadístico - Sexo
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div style="text-align: justify;">
                <p>
                  El Control Estadístico - Sexo supervisa los registros, para proporcionar la cantidad de los datos 
                  a partir de la lectura de cada sexo registrado por el colaborador.
                </p>
                <div class="d-grid gap-2">
                  <a class="btn btn-info" type="button" href="{{route('Control-Estadistico.sexo')}}">Visualizar gráfica</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endcan
        @can('estadisticas-genero')
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              Control Estadístico - Género
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div style="text-align: justify;">
                <p>
                  El Control Estadístico - Genero supervisa los registros, para proporcionar la cantidad de los datos 
                  a partir de la lectura de cada genero registrado por el colaborador.
                </p>
                <div class="d-grid gap-2">
                  <a class="btn btn-info" type="button" href="{{route('Control-Estadistico.genero')}}">Visualizar gráfica</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endcan
        @can('estadisticas-estatus')
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                Control Estadístico - Estatus
              </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div style="text-align: justify;">
                  <p>
                    El Control Estadístico - Estatus supervisa los registros, para proporcionar la cantidad de los datos 
                    a partir de la lectura de cada estatus registrado por el colaborador.
                  </p>
                  <div class="d-grid gap-2">
                    <a class="btn btn-info" type="button" href="{{route('Control-Estadistico.estatus')}}">Visualizar gráfica</a>
                  </div>
                </div>
              </div>
          </div>
        </div>
        @endcan
        @can('estadisticas-tipo')
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingSeven">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
              Control Estadístico - Tipo
          </button>
          </h2>
          <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <div style="text-align: justify;">
                      <p>
                      El Control Estadístico - Tipo supervisa los registros, para proporcionar la cantidad de los datos 
                      a partir de la lectura de cada tipo registrado por el colaborador.
                      </p>
                      <div class="d-grid gap-2">
                      <a class="btn btn-info" type="button" href="{{route('Control-Estadistico.tipo')}}">Visualizar gráfica</a>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        @endcan
        @can('estadisticas-estructuras')
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOctavo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOctavo" aria-expanded="false" aria-controls="collapseOctavo">
                  Control Estadístico - Estructura
              </button>
          </h2>
          <div id="collapseOctavo" class="accordion-collapse collapse" aria-labelledby="headingOctavo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <div style="text-align: justify;">
                  <p>
                      El Control Estadístico - Estructura supervisa los registros, para proporcionar la cantidad de los datos 
                      a partir de la lectura de cada estructura registrado por el colaborador.
                  </p>
                  <div class="d-grid gap-2">
                      <a class="btn btn-info" type="button" href="{{route('Control-Estadistico.estructura')}}">Visualizar gráfica</a>
                  </div>
                  </div>
              </div>
          </div>
        </div>
        @endcan
    </section>
@endsection