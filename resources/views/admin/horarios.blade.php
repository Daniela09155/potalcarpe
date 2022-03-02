@extends('layouts.app')
@section('content_header')
   <h4> Reporte de horarios </h4> 
@stop
@section('contenido')
@if(Session::has('mensaje'))
<div class="alert alert-success">{{Session::get('mensaje')}}</div>
@endif


<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="form-group row float-right">
            <div class="col-md-auto"> 
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Crear Horario Fijo
        </button>
          </div>
        <div class="col-md-auto"> 
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
          Asignar Horario
          </button>
        </div>
      </div>
    </div>
    <!-- Tabla de reporte horarios fijos-->
    <table class="table table-striped table-responsive-xl" style="text-align:center;">
      <thead>
          <tr>
            <th scope="col" style="text-align: center"> # </th>
              <th scope="col" style="text-align: center">Nombre del horario</th>
              <th scope="col" style="text-align: center">Fecha de Inicio</th>
              <th scope="col" style="text-align: center">Fecha de Termino</th>
              <th scope="col" style="text-align: center">Hora entrada</th>
              <th scope="col" style="text-align: center">Hora salida</th>
              <th scope="col" style="text-align: center">Operaciones</th>
          </tr>
      </thead>
      <tbody>
      @foreach($ar as $aar)
          <tr>
            <td style="text-align: center">{{$aar-> id_horario }}</td>
              <td style="text-align: center">{{$aar-> nombre_horario }}</td>
              <td style="text-align: center">{{$aar-> fecha_inicio}}</td>
              <td style="text-align: center">{{$aar-> hora_entrada}}</td>
              <td style="text-align: center">{{$aar-> fecha_final}}</td>
              <td style="text-align: center">{{$aar-> hora_salida}}</td>
              <td style="text-align: center">    
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{route('modificarh',['id_horario' => $aar->id_horario])}}">
                      <button class="btn btn-outline-primary btn-sm " type="button" style="margin-right 10px">Editar</button>
                      </a>
                      @if($aar->deleted_at)  
                      <a href="{{route('activarhorario',['id_horario' => $aar->id_horario])}}">
                      <button class="btn btn-outline-info btn-sm" type="button" style="margin-right 10px">
                      Activar
                      </button>
                      </a>
                      <a href="{{route('eliminarhorario',['id_horario'=>$aar->id_horario])}}">
                      <button class="btn btn-outline-danger btn-sm" type="button">Eliminar</button>
                      </a>
                      @else 
                      <a href="{{route('desactivarhorario',['id_horario'=>$aar->id_horario])}}">
                      <button class="btn btn-outline-warning btn-sm" type="button" style="margin-right 10px">Desactivar</button>
                      </a>
                      @endif
                  </div> 
              </td>
          </tr>
      @endforeach
      </tbody>
      </thead>
    </table>
    <!-- Fin de tabla-->
      </div>
    </div>
  <!-- Modal Crear Horario fijo-->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Crear Horario</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <form method="POST" action="{{  route('guardarhorario') }}" class="form-horizontal m-t-30" enctype="multipart/form-data">
           {{ csrf_field() }} 
           <div class="form-group">
             <label for="a">Nombre Horario</label>
             <input type="text" class="form-control"  name="nombre_horario" placeholder="Ejemplo: Matutino">
             <small id="" class="form-text text-muted">Ingresa el nombre del horario.</small>
           </div>
           <br>
           <div class="row">
            <div class="col">
               <label class="control-label"> Ingresar hora de entrada</label>
              <input type="time" class="form-control" name="hora_entrada"  placeholder="9:00 AM">
            </div>
            <P> - </P>
            <div class="col">
               <label class="control-label"> Ingresar hora de salida</label>
              <input type="time" class="form-control"  name="hora_salida" placeholder="17:00 PM">
            </div>
          </div>
          <br>
          <div class="form-group">
            <label for="">Fecha De Inicio</label>
            <input type="date" class="form-control" name="fecha_inicio" id="date" aria-describedby="datehelp">
          </div>   
          <div class="form-group">
            <label for="">Fecha De Finalización</label>
            <input type="date" class="form-control" name="fecha_final" id="date" aria-describedby="datehelp">
          </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
             <button type="submit" class="btn btn-success">Guardar</button>
           </div>
         </form>
       </div>
     </div>
   </div>
 </div>
  

  <!-- Modal Asignaciones -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">Asignación de horario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
          <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Colaborador:</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option selected>Selecciona una opción...</option>
            <option value="1">Alex Palma</option>
            <option value="2">Manuel Martínez</option>
            <option value="3">Daniela Adrian</option>
          </select>
        </div>
        
        <div class="form-group">
          <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Horario:</label>
          <select class="form-control" id="exampleFormControlSelect2">
            <option selected>Selecciona una opción...</option>
            <option value="1">Matutino</option>
            <option value="2">Vespertino</option>
            <option value="3">Mixto</option>
          </select> 
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>
</div>
@stop
