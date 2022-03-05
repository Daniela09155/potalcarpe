@extends('layouts.app')

@section('content_header')
   <h4> Estadisticas  </h4> 
@stop

@section('contenido')

    
        <!-- Page Content -->
        <div class="content container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card att-statistics">
                        <div class="card-body">
                            <h5 class="card-title">Horas trabajadas</h5>
                            <div class="stats-list">
                                <div class="stats-info">
                                    <p>Hoy <strong>3.00 <small>/ 8 hrs</small></strong></p>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 31%" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="stats-info">
                                    <p>Esta semana <strong>28 <small>/ 40 hrs</small></strong></p>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 31%" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="stats-info">
                                    <p>Este mes <strong>90 <small>/ 160 hrs</small></strong></p>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="stats-info">
                                    <p>Restante <strong>90 <small>/ 160 hrs</small></strong></p>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="stats-info">
                                    <p>Diferencia <strong>+4 min</strong></p>
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card att-statistics">
                        <div class="card-body">
                            <h5 class="card-title">Dias trabajados</h5>
                            <div class="stats-list">
                                <div class="stats-info">
                                    <p>Trabajados <strong>30 <small>/ 30 dias</small></strong></p>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 31%" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="stats-info">
                                    <p>Ausencias <strong>2</strong></p>
                                    
                                </div>
                                <div class="stats-info">
                                    <p>Vacaciones <strong>2 <small>/ 4 disponibles</small></strong></p>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card att-statistics">
                        <div class="card-body">
                            <h5 class="card-title">Descansos</h5>
                            <div class="stats-list">
                                <div class="stats-info">
                                    <p>Hoy <strong>0 <small>/ 1</small></strong></p>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 31%" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="stats-info">
                                    <p>Esta semana <strong>20 <small>/ 20</small></strong></p>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 31%" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="stats-info">
                                    <p>Este mes <strong>20 <small>/ 20</small></strong></p>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="stats-info">
                                    <p>Duracion promedio <strong>30 <small>min</small></strong></p>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Search Filter -->
            <div class="row filter-row">
                <div class="col-sm-3">  
                    <div class="form-group form-focus">
                        <div class="cal-icon">
                            <input type="text" class="form-control floating datetimepicker">
                        </div>
                        <label class="focus-label">Fecha</label>
                    </div>
                </div>
                <div class="col-sm-3"> 
                    <div class="form-group form-focus select-focus">
                        <select class="form-control select floating"> 
                            <option>-</option>
                            <option>Ene</option>
                            <option>Feb</option>
                            <option>Mar</option>
                            <option>Abr</option>
                            <option>May</option>
                            <option>Jun</option>
                            <option>Jul</option>
                            <option>Ago</option>
                            <option>Sep</option>
                            <option>Oct</option>
                            <option>Nov</option>
                            <option>Dic</option>
                        </select>
                        <label class="focus-label">Seleccionar mes</label>
                    </div>
                </div>
                <div class="col-sm-3"> 
                    <div class="form-group form-focus select-focus">
                        <select class="form-control select floating"> 
                            <option>-</option>
                            <option>2022</option>
                        </select>
                        <label class="focus-label">Seleccionar año</label>
                    </div>
                </div>
                <div class="col-sm-3">  
                    <a href="#" class="btn btn-success btn-block"> Buscar </a>  
                </div>     
            </div>
            <!-- /Search Filter -->
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Fecha </th>
                                    <th>Entrada</th>
                                    <th>Salida</th>
                                    <th>Trabajadas</th>
                                    <th>Descanso</th>
                                    <th>Retrasos</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td id="hola"></td>
                                    <td>19 Feb 2022</td>
                                    <td>10 AM</td>
                                    <td>7 PM</td>
                                    <td>9 hrs</td>
                                    <td>1 hrs</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>20 Feb 2022</td>
                                    <td>10 AM</td>
                                    <td>7 PM</td>
                                    <td>9 hrs</td>
                                    <td>1 hrs</td>
                                    <td>0</td>
                                </tr>
                            </tbody>
                        </table>
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
    
        function date_today(datetoday) {
                date = new Date;
                year = date.getFullYear();
                month = date.getMonth();
                months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
                d = date.getDate();
                day = date.getDay();
                days = new Array('Sunday,', 'Monday,', 'Tuesday,', 'Wednesday,', 'Thursday,', 'Friday,', 'Saturday,');
                datecurrent = months[month]+' '+d+', '+year;
                document.getElementById(datetoday).innerHTML = datecurrent;
                return true;
        }
    
        function day_today(daytoday) {
                date = new Date;
                year = date.getFullYear();
                month = date.getMonth();
                months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
                d = date.getDate();
                day = date.getDay();
                days = new Array('Sunday,', 'Monday', 'Tuesday', 'Wednesday', 'Thursday,', 'Friday', 'Saturday');
                daycurrent = days[day];
                document.getElementById(daytoday).innerHTML = daycurrent;
                return true;
        }
    
        window.onload = day_today('daytoday');
        window.onload = date_time('timetoday');
        window.onload = date_today('datetoday');

        document.getElementById('hola').innerHTML = "77";
        
        <script>
            @stop