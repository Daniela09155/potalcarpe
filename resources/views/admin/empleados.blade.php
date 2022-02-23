@extends('layouts.app')

@section('content_header')
   <h4> Reporte de empleados  </h4> 
@stop

@section('contenido')

<div class="container">
      <div class="card">
         <div class="card-body">
            <div class="form-group">
               <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Filtro:</label>
               <select class="form-control" class="col-md-6" id="exampleFormControlSelect1">
                 <option selected>Selecciona una opción...</option>
                 <option value="1">Todos</option>
                 <option value="2">Por área</option>
                 <option value="3">Por colaborador</option>
               </select>
           </div>
           <button class="btn btn-info">Exportar</button>
         </div>
      </div>
   </div>

   <div class="container">
      <div class="row">
          <div class="col-12">
              <br>
              <br>
              <table class="table table-striped">
                  <thead>
                    <tr align="center">
                      <th scope="col">Empleado</th>
                      <th scope="col">Estado</th>
                      <th scope="col">Horario</th>
                      <th scope="col">Horas Hoy</th>
                      <th scope="col">Completado</th>
                      <th scope="col">Departamento</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr align="center">
                      <th scope="row" >Alex Palma</th>
                      <td>Activo</td>
                      <td>Horario Fijo</td>
                      <td>10/20</td>
                      <td>20/20</td>
                      <td>Departamento De TI</td>
                    </tr>
                    <tr align="center">
                     <th scope="row" >Javier Martínez</th>
                     <td>Activo</td>
                     <td>Horario Fijo</td>
                     <td>10/20</td>
                     <td>20/20</td>
                     <td>Departamento De TI</td>
                   </tr>
                   <tr align="center">
                     <th scope="row" >Manuel Martinez</th>
                     <td>Activo</td>
                     <td>Horario Fijo</td>
                     <td>10/20</td>
                     <td>20/20</td>
                     <td>Departamento De TI</td>
                   </tr>
                  </tbody>
                </table>
          </div>
      </div>
  </div>
</div>

  
@stop