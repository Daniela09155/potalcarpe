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
        <form method="POST" action="{{  route('guardarcambiohrflex') }}" class="form-horizontal m-t-30" enctype="multipart/form-data">
            @csrf
 
             <div class="form-group">
               <label for="a">Nombre Horario</label>
               <input type="text" class="form-control"  name="nombre_horario" value="{{ $consulta-> nombre_horario }}" placeholder="Ejemplo: Matutino">
               <small id="" class="form-text text-muted">Ingresa el nombre del horario.</small>
             </div>
 
             <div class="form-group">
                 <div class="form-checkbox">
                   <input type="checkbox" class="form-checkbox-input"  name="d1" value="Lunes">
                 <label class="form-checkbox-label" for="">Lunes</label>
                  
                 <div class="row">
                   <div class="col">
                    
                     <input type="checkbox" class="form-checkbox-input"  name="d2"value="Martes">
                     <label class="form-checkbox-label" for="">Martes</label>
                   </div>
                   <div class="col">
                   
                     <input type="checkbox" class="form-checkbox-input"  name="d3"value="Miercoles">
                     <label class="form-checkbox-label" for="">Miercoles</label>
                   </div>
                   <div class="col">
                    
                     <input type="checkbox" class="form-checkbox-input"  name="d4" value="Jueves">
                     <label class="form-checkbox-label" for="">Jueves</label>
                   </div>
                   <div class="col">
                    
                     <input type="checkbox" class="form-checkbox-input"  name="d5" value="Viernes">
                     <label class="form-checkbox-label" for="">Viernes</label>
                   </div>
                 </div>
                 </div>
           
           
             <div class="form-group">
               <label for="">Rango de horas</label>
               <input type="text" class="form-control"  name="rango_horas" value="{{ $consulta->rango_horas }}">
               <small id="" class="form-text text-muted">Ingresa la cantidad de horas .</small>
             </div>
             
             <div class="form-group">
               <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Colaborador:</label>
               <select name="useridf" class="form-control" id="useridf">
                 @foreach($ds as $dss)
                 <option value="{{$dss->id}}" >{{$dss->name}}</option>
                 @endforeach
               </select>
             </div>
           
      
 
             <div class="">
              <button class="btn btn-outline-danger me-md-4" type="">Cancelar</button>
              <button type="submit" class="btn btn-success">Guardar</button>
            </div>
             </div>
           </form>
 
</div>

</div>
@stop