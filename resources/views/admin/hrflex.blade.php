@extends('index')
@section('content_header')
   <h4> Reporte de horarios Flexibles </h4> 
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
            Crear horario flexible
            </button>
          </div>
        </div>
      </div>
     
  <br>
  <div class="container">
   
    <table class="table table-hover table-responsive-xl">
      <thead>
          <tr>
            <th scope="col" style="text-align: center">#</th>
              <th scope="col" style="text-align: center">Nombre del horario</th>
              <th scope="col" style="text-align: center">Dias del horario</th>
              <th scope="col" style="text-align: center">Colaborador</th>
              <th scope="col" style="text-align: center">Horas asignadas</th>
              <th scope="col" style="text-align: center">Operaciones</th>
          </tr>
      </thead>
      <tbody>
      @foreach($ab as $abb)
          <tr>
            <td style="text-align: center">{{$abb-> id_horariof }}</td>
              <td style="text-align: center">{{$abb-> nombre_horario}}</td>
              <td style="text-align: center">{{$abb-> d1. ' '. $abb-> d2. ' '. $abb-> d3. ' '. $abb-> d4. '  '. $abb-> d5}}</td>
              <td style="text-align: center">{{$abb-> name }}</td>
              <td style="text-align: center">{{$abb-> rango_horas}}</td>
            
           
              <td style="text-align: center">    
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{route('modificarhrflex',['id_horariof' => $abb->id_horariof])}}">  
                      <button  type="button" class="btn btn-outline-primary ti-pencil" style="margin-right 10px"></button>   
                       </a>
                    @if($abb->deleted_at)  
                      <a href="{{route('activarhrflex',['id_horariof' => $abb->id_horariof])}}">
                        <button class="btn btn-outline-info me-md-4 ti-unlock"  type="button" style="margin-right 10px">
                        </button>
                      </a>
                      <a href="{{route('eliminarhrflex',['id_horariof' => $abb->id_horariof])}}">
                        <button class="btn btn-outline-danger me-md-4 ti-close" type="button"></button>
                      </a>
                      @else 
                      <a href="{{route('desactivarhrflex',['id_horariof' => $abb->id_horariof])}}">
                        <button class="btn btn-outline-warning me-md-4 ti-lock" type="button" style="margin-right 10px"></button>
                      </a>
                      @endif
                  </div> 
              </td>
          </tr>
      @endforeach
      </tbody>
      </thead>
  </table>
  </div>
</div>
  
  <!-- Modal Crear Horario-->
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
          <form method="POST" action="{{  route('guardarhrflex') }}" class="form-horizontal m-t-30" enctype="multipart/form-data">
           @csrf

            

            <div class="form-group">
              <label for="a">Nombre Horario</label>
              <input type="text" class="form-control"  name="nombre_horario" placeholder="Ejemplo: Matutino">
              <small id="" class="form-text text-muted">Ingresa el nombre del horario.</small>
            </div>

            <div class="form-group">
  

                <div class="form-checkbox">
                
                   
                
                  <input type="checkbox" class="form-checkbox-input custom-control-inline"  name="d1" value="Lunes">
                <label class="form-checkbox-label" for="">Lunes</label>
                 
                <div class="row">
                  <div class="col">
                   
                    <input type="checkbox" class="form-checkbox-input"  name="d2" value="Martes">
                    <label class="form-checkbox-label" for="">Martes</label>
                  </div>
                  <div class="col">
                  
                    <input type="checkbox" class="form-checkbox-input"  name="d3" value="Miercoles">
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
              <input type="text" class="form-control"  name="rango_horas" placeholder="Ejemplo: 40">
              <small id="" class="form-text text-muted">Ingresa la cantidad de horas .</small>
            </div>
            
            <div class="form-group">
              <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Colaborador:</label>
              <select name="useridf" class="form-control" id="useridf">
                <option  value=""> Selecciona un colaborador.</option>
                @foreach($ds as $dss)
                <option value="{{$dss->id}}" >{{$dss->name}}</option>
                @endforeach
              </select>
            </div>
          
     


            <input type="text" name="diass" style="display:none"  id="diass" value=""> <!-- input para obtener la longitud de los checks--->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="button" id="enviar" class="btn btn-success">Guardar</button> 
              <button type="submit" style="display:none" id="send" class="btn btn-success">Guardar</button> <!-- boton js--->
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div> <!-- FIN DE Modal para horarios flexibles-->
</div>
 
  
   
  
  <script>
    document.getElementById('enviar').onclick = function(){
      var dias = $('input:checkbox:checked').length 
      var gg = document.getElementById('diass');
      gg.value = dias
      document.getElementById('send').click()
      if(gg > 0 ){
      }console.log(gg);
    }
  </script>
  
  

  @stop