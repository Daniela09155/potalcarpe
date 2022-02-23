@extends('layouts.app')
@section('content_header')
   <h4> Agregar Solicitud</h4> 
@stop

<link rel="stylesheet" href="{{ asset('/assets/css/calendar.css') }}">
@section('contenido')

<div class="container">
    <div class="row">
        <div class="col-12">
            <br>
            <br>
            
            <table class="table table-striped">
                <thead>
                  <tr align="center">
                    <th scope="col">Dias Disponibles</th>
                    <th scope="col">Confirmados</th>
                    <th scope="col">Por confirmar</th>
                    <th scope="col">Asignados</th>
                  </tr>
                </thead>
                <tbody>
                  <tr align="center">
                    <th scope="row" >10/20</th>
                    <td >10/20</td>
                    <td>10/20</td>
                    <td>10/20</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
</div>

<div class="card-body">
    <div class="root">
            <div class="calendar" id="calendar">
            </div>
        <div class="container" style="text-align:center;">
            <div class="row">
                <div class="col-md">
                    <div class="calendar" id="calendar2">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card border-primary m-b-30">
                    <div class="card-body text-primary">
                        <h5 class="card-title font-18">Tipo Ausencia</h5>
                        <div class="container"> 
                        <ul class="card-text" style="text-align: left;">
                            <li>Descripción</li>
                            <li>Descripción</li>
                            <li>Descripción</li>
                            <li>Descripción</li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
            </div>   
        </div> 
    </div>

    <div class="col-md-6 col-lg-6 col-xl-12">
        <div class="card border-primary m-b-30">
           
            <div class="card-body text-primary">
                <h5 class="card-title text-primary">Solicitudes recientes</h5>
                <p class="card-text">El colaborador...</p>
            </div>
        </div>  
    </div>
</div>






<script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/es.js"></script>
<script  type="text/javascript" src="{{ asset('/assets/js/calendar.js') }}"></script>
<script type="text/javascript">
    let calendar = new Calendar('calendar');
    calendar.getElement().addEventListener('change', e => {
        console.log(calendar.value().format('LLL'));
    });

    let calendar2 = new Calendar('calendar2');
    calendar2.getElement().addEventListener('change', e => {
        console.log(calendar2.value().format('LLL'));
    });
</script>
@stop