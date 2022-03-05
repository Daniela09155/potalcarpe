@extends('layouts.app')

@section('content_header')
   <h4> Asistencias  </h4> 
@stop

@section('contenido')
@if(Session::has('mensaje'))
<div class="alert alert-success">{{Session::get('mensaje')}}</div>
@endif
    
        <!-- Page Content -->
        <div class="content container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card punch-status">
                        <div class="card-body">
                            <h5 class="card-title">Marcar <small class="text-muted" id="date"></small></h5>
                            <div class="punch-det">
                                @forelse ($aractual as $aar2) 
                                @foreach($aractual as $aar2)
                                <h6>{{$aar2-> tipo }}</h6>
                                
                                <p>{{$d}}, {{$aar2-> fecha }} {{$aar2-> hora }}</p>
                            
                                @endforeach
                                
                                @empty
                                <h6>Sin</h6>
                                <p>Registros</p> 
                               
                                
                                @endforelse
                            </div>
                            <div class="punch-info">
                                <div class="punch-hours">
                                    
                                    <span id="hora"></span>
                                    
                                </div>
                            </div>
                            <div class="punch-btn-section">
                                @forelse ($aractual as $aar2) 
                                @if($aar2->tipo=="Salida")
                                <a >
                                Jornada terminada!!
                                </a>
                                @endif
                                @if($aar2->tipo=="Entrada")
                                <div class="row">
                                <div class="col-md-6 col-6 text-center">
                                    <div class="punch-btn-section">
                                        <a href="{{route('marcarD')}}">
                                            <button type="button" class="btn btn-primary punch-btn" style="padding: 10px 20px;">Descanso</button>
                                            </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-6 text-center">
                                    <div class="punch-btn-section">
                                        <a href="{{route('marcarS')}}">
                                            <button type="button" class="btn btn-primary punch-btn" style="padding: 10px 20px;">Salida</button>
                                            </a>
                                    </div>
                                </div>
                                </div>
                                
                                
                                @endif
                                @if($aar2->tipo=="Descanso")
                                <a href="{{route('marcarR')}}">
                                <button type="button" class="btn btn-primary punch-btn">Regreso</button>
                                </a>
                                @endif
                                @if($aar2->tipo=="Regreso")
                                <a href="{{route('marcarS')}}">
                                <button type="button" class="btn btn-primary punch-btn">Salida</button>
                                </a>
                                @endif
                                @empty
                                <a href="{{route('marcarE')}}">
                                    <button type="button" class="btn btn-primary punch-btn">Entrada</button>
                                    </a>
                                @endforelse
                            </div>
                            <div class="statistics">
                                <div class="row">
                                    <div class="col-md-6 col-6 text-center">
                                        <div class="stats-box">
                                            <p>Descanso</p>
                                            <h6>1.00 hrs</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-6 text-center">
                                        <div class="stats-box">
                                            <p>Trabajado</p>
                                            <h6>3 hrs</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card att-statistics">
                        <div class="card-body">
                            <h5 class="card-title">Horario</h5>
                            <div class="stats-list">
                                
            
                                @if($d=="Lunes")
                                <div class="stats-info" style="background-color: #17a2b8;padding: 20px;color: white;"">
                                    <p>Lunes<strong>8:00 - 15:00</strong></p>
                                </div>
                                @else
                                <div class="stats-info">
                                    <p>Lunes<strong>8:00 - 15:00</strong></p>
                                </div>
                                @endif
                                @if($d=="Martes")
                                <div class="stats-info" style="background-color: #17a2b8;padding: 20px;color: white;"">
                                    <p>Martes<strong>8:00 - 15:00</strong></p>
                                </div>
                                @else
                                <div class="stats-info">
                                    <p>Martes<strong>8:00 - 15:00</strong></p>
                                </div>
                                @endif
                                @if($d=="Miercoles")
                                <div class="stats-info" style="background-color: #17a2b8;padding: 20px;color: white;"">
                                    <p>Miercoles<strong>8:00 - 15:00</strong></p>
                                </div>
                                @else
                                <div class="stats-info">
                                    <p>Miercoles<strong>8:00 - 15:00</strong></p>
                                </div>
                                @endif
                                @if($d=="Jueves")
                                <div class="stats-info" style="background-color: #17a2b8;padding: 20px;color: white;"">
                                    <p>Jueves<strong>8:00 - 15:00</strong></p>
                                </div>
                                @else
                                <div class="stats-info">
                                    <p>Jueves<strong>8:00 - 15:00</strong></p>
                                </div>
                                @endif
                                @if($d=="Viernes")
                                <div class="stats-info" style="background-color: #17a2b8;padding: 20px;color: white;"">
                                    <p>Viernes<strong>8:00 - 15:00</strong></p>
                                </div>
                                @else
                                <div class="stats-info">
                                    <p>Viernes<strong>8:00 - 15:00</strong></p>
                                </div>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card recent-activity">
                        <div class="card-body">
                            <h5 class="card-title">Actividad de hoy</h5>
                            <ul class="res-activity-list">
                                @foreach($ar as $aar)
                                <li>
                                    <p class="mb-0">{{$aar-> tipo_registro }}</p>
                                    <p class="res-activity-time">
                                        <i class="fa fa-clock-o"></i>
                                        {{$aar-> hora }}
                                    </p>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /Page Content -->

        </div>
        <!-- /Page Content -->
  
            @stop

            @section('scripts')
    
    <script type="text/javascript">

    function date_time(timetoday) {
            date = new Date();
            h = date.getHours();
            hours = ((h + 11) % 12 + 1);
            var ampm = h >= 12 ? 'PM' : 'AM';
            if(hours<10) { hours = "0"+hours; }
            m = date.getMinutes();
            if(m<10) { m = "0"+m; }
            s = date.getSeconds();
            if(s<10) { s = "0"+s; }
            timecurrent = hours+':'+m+':'+s+' '+ampm;
            document.getElementById(timetoday).innerHTML = timecurrent;
            setTimeout('date_time("'+timetoday+'");','1000');
            return true;
    }

    
    window.onload = date_time('hora');

    function date_today(datetoday) {
            date = new Date;
            year = date.getFullYear();
            month = date.getMonth();
            months = new Array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
            d = date.getDate();
            day = date.getDay();
            days = new Array('Domingo,', 'Lunes,', 'Martes,', 'Miercoles,', 'Jueves,', 'Viernes,', 'Sabado,');
            datecurrent = months[month]+' '+d+', '+year;
            document.getElementById(datetoday).innerHTML = datecurrent;
            return true;
    }

    window.onload = date_today('date');

    </script> 

    @stop