@extends('layouts.app')
@section('content_header')
   <h4> Calendario</h4> 
@stop

<link rel="stylesheet" href="{{ asset('/assets/css/calendar.css') }}">
@section('contenido')



    <div class="card-body">
        <div class="root card-body">
              
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="calendar" id="calendar">
                        </div>
                        <br>
                        <div class="calendar" id="calendar2">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card border-primary m-b-30">
                        <div class="card-body text-primary">
                            <h5 class="card-title font-18">Tipo Ausencia</h5>
                            <div class="container"> 
                                <div class="form-group">
                                    <label for="">Día</label>
                                    <input type="date" class="form-control" name="fecha_inicio" id="date" aria-describedby="datehelp">
                                </div> 
                                <br>
                                <div class="form-group">
                                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Tipo:</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                      <option selected>Selecciona una opción...</option>
                                      <option value="1"></option>
                                      <option value="2"></option>
                                      <option value="3"></option>
                                    </select>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Motivo:</label>
                                    <input type="text" class="form-control" name="motivo">
                                </div>
                                <button class="btn btn-success">Asignar</button>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>   
            </div> 
        </div>
    </div>


    <div class="card-body">
        <div class="root card-body">
                <div class="calendar" id="calendar3">
                </div>
            <div class="container" style="text-align:center;">
                <div class="row">
                    <div class="col-md">
                        <div class="calendar" id="calendar4">
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

    let calendar3 = new Calendar('calendar3');
    calendar3.getElement().addEventListener('change', e => {
        console.log(calendar3.value().format('LLL'));
    });

    let calendar4 = new Calendar('calendar4');
    calendar4.getElement().addEventListener('change', e => {
        console.log(calendar4.value().format('LLL'));
    });
</script>
@stop