@extends('layouts.app')
@section('content_header')
   <h4> Informes de asistencias</h4> 
@stop

@section('contenido')


<div class="col-md-6 col-lg-6 col-xl-12">
    <div class="card border-primary m-b-30">
        <div class="card-body text-primary">
            <h5 class="card-title text-primary">Generar informe recientes</h5>
            <div class="form-group">
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Tipo de informe:</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option selected>Selecciona una opción...</option>
                  <option value="1">Completo</option>
                  <option value="2">Por Área</option>
                  <option value="3">Por colaborador</option>
                </select>
            </div>
            <div class="form-group">
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Empleado:</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option selected>Selecciona una opción...</option>
                  <option value="1">Alex Palma</option>
                  <option value="2">Manuel Martínez</option>
                  <option value="3">Daniela Adrian</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Fecha De Inicio</label>
                <input type="date" class="form-control" name="fecha_inicio" id="date" aria-describedby="datehelp">
              </div>   
              <div class="form-group">
                <label for="">Fecha De Finalización</label>
                <input type="date" class="form-control" name="fecha_final" id="date" aria-describedby="datehelp">
              </div>
              <button type="submit" class="btn btn-success">Calcular</button>
        </div>
    </div>  
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <br>
            <br>
            <h4 class="text-left"> Asistencias </h4>
            <table class="table table-striped">
                <thead>
                  <tr align="center">
                    <th scope="col">Fecha</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Puntualidad</th>
                    <th scope="col">Tiempo trabajado</th>
                    <th scope="col">Tiempo esperando</th>
                  </tr>
                </thead>
                <tbody>
                  <tr align="center">
                    <th scope="row">24/02/2021</th>
                    <td>Alex Palma</td>
                    <td>09:00</td>
                    <td>Activo</td>
                    <td>17/20</td>
                    <td>10/20</td>
                    <td>15/20</td>
                  </tr>
                  <tr align="center">
                    <th scope="row">24/02/2021</th>
                    <td>Javier Martinez</td>
                    <td>09:00</td>
                    <td>Activo</td>
                    <td>17/20</td>
                    <td>10/20</td>
                    <td>15/20</td>
                  </tr>
                  <tr align="center">
                    <th scope="row">24/02/2021</th>
                    <td>Manuel Martinez</td>
                    <td>09:00</td>
                    <td>Activo</td>
                    <td>17/20</td>
                    <td>10/20</td>
                    <td>15/20</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <br>
            <br>
            <h4 class="text-left"> Ausencias y Excepciones </h4>
            <table class="table table-striped">
                <thead>
                  <tr align="center">
                    <th scope="col">Fecha</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Puntualidad</th>
                    <th scope="col">Tiempo trabajado</th>
                    <th scope="col">Tiempo esperando</th>
                  </tr>
                </thead>
                <tbody>
                  <tr align="center">
                    <th scope="row">21/02/2021</th>
                    <td>Alex Palma</td>
                    <td>10:50</td>
                    <td>Activo</td>
                    <td>15/20</td>
                    <td>10/20</td>
                    <td>20/20</td>
                  </tr>
                  <tr align="center">
                    <th scope="row">21/02/2021</th>
                    <td>Javier Martinez</td>
                    <td>10:50</td>
                    <td>Activo</td>
                    <td>15/20</td>
                    <td>10/20</td>
                    <td>20/20</td>
                  </tr>
                  <tr align="center">
                    <th scope="row">21/02/2021</th>
                    <td>Manuel Martinez</td>
                    <td>10:50</td>
                    <td>Activo</td>
                    <td>15/20</td>
                    <td>10/20</td>
                    <td>20/20</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
</div>

@stop