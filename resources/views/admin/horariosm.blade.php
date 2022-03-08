@extends('layouts.app')
@section('content_header')
   <h4> Reporte de horarios </h4> 
@stop
@section('contenido')

@if(Session::has('mensaje'))
<div class="alert alert-success">{{Session::get('mensaje')}}</div>
@endif



<div class="form-group">
    <div class="col-md-12"> 
<form method="POST" action="{{  route('guardarcambioh') }}" class="form-horizontal m-t-30" enctype="multipart/form-data">
    @csrf
    
   
    <div class="form-group">
      <label for="a">Nombre Horario</label>
      <input type="text" class="form-control"  name="nombre_horario" value="{{ $consulta->nombre_horario }}">
      <small id="" class="form-text text-muted">Ingresa el nombre del horario.</small>
    </div>
   
    <br>
    <div class="row">
     <div class="col">
        <label class="control-label"> Ingresar hora de entrada</label>
       <input type="time" class="form-control" name="hora_entrada" value="{{ $consulta->hora_entrada }}" placeholder="9:00 AM">
     </div>
     <P> - </P>
     <div class="col">
        <label class="control-label"> Ingresar hora de salida</label>
       <input type="time" class="form-control"  name="hora_salida" value="{{ $consulta->hora_salida }}" placeholder="17:00 PM">
     </div>
    </div>
   <br>
   <div class="form-group">
     <label for="">Fecha De Inicio</label>
     <input type="date" class="form-control" name="fecha_inicio" id="date" value="{{ $consulta->fecha_inicio }}" aria-describedby="datehelp">
   </div>   
   <div class="form-group">
     <label for="">Fecha De Finalización</label>
     <input type="date" class="form-control" name="fecha_final" id="date" value="{{ $consulta->fecha_final }}"aria-describedby="datehelp">
   </div>
   
   <div class="form-group">
    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Colaborador:</label>
    <select name="userid" class="form-control" id="exampleFormControlSelect1">
        @foreach($ac as $us)
        <option value="{{$us->id}}" >{{$us->name}}</option>
        @endforeach
      </select>
  </div>
  
    <div class="">
      <button class="btn btn-outline-danger me-md-4" type="">Cancelar</button>
      <button type="submit" class="btn btn-success">Guardar</button>
    </div>
   
  </form>
 
</div>

</div>
@stop