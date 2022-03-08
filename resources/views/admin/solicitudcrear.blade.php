@extends('layouts.app')
@section('content_header')
   <h4> Agregar Solicitud</h4> 
@stop


@section('contenido')


<div class="form-group">
    <div class="col-md-12"> 
        <form method="POST" action="{{  route('savesolicitud') }}" class="form-horizontal m-t-30" enctype="multipart/form-data">
            @csrf
			<div class="form-group">
				<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Nombre Colaborador:</label>
				<select name="nombre_colaborador" class="form-control" id="useridf">
				  @foreach($so as $soo)
				  <option value="{{$soo->id}}" >{{$soo->name}}</option>
				  @endforeach
				</select>
			  </div>
          
			  <div class="form-group">
				<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Tipo de sollicitud:</label>
				<select name="nombre_colaborador" class="form-control" id="useridf">
				  @foreach($tp as $tpp)
				  <option value="{{$tpp->id}}" >{{$tpp->Nombre}}</option>
				  @endforeach
				</select>
			  </div>

			<div class="form-group">
				<label for="">Fecha de Inicio</label>
				<input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" aria-describedby="datehelp">
			  </div>   
			  <div class="form-group">
				<label for="">Fecha de Finalización</label>
				<input type="date" class="form-control" name="fecha_final" id="fecha_final" aria-describedby="datehelp">
			  </div>

			  <div class="form-group">
				<label for="">Descripción de la solicitud</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
			  </div>
              <button class="btn btn-outline-danger me-md-4" type="">Cancelar</button>
              <button type="submit" class="btn btn-success">Guardar</button>
        
             </div>
           </form>
		</div>
</div>









@stop