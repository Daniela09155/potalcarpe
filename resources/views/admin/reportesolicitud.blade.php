@extends('layouts.app')
@section('content_header')
   <h4> Reporte de Solicitudes </h4> 
@stop
@section('contenido')

@if(Session::has('mensaje'))
<div class="alert alert-success">{{Session::get('mensaje')}}</div>
@endif


<!-- Tabla de reporte horarios fijos-->
<table class="table table-striped table-responsive-xl" style="text-align:center;">
    <thead>
        <tr>
          <th scope="col" style="text-align: center"> # </th>
            <th scope="col" style="text-align: center">Nombre del Colaborador</th>
            <th scope="col" style="text-align: center">Tipo de solicitud</th>
            <th scope="col" style="text-align: center">Fecha de inicio </th>
            <th scope="col" style="text-align: center">Fecha de termino </th>
            <th scope="col" style="text-align: center">Descripción</th>
            <th scope="col" style="text-align: center">Operaciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($sol as $soll)
        <tr>
          <td style="text-align: center">{{$soll-> id }}</td>
            <td style="text-align: center">{{$soll-> nombre_colaborador }}</td>
            <td style="text-align: center">{{$soll-> tipo_sol}}</td>
            <td style="text-align: center">{{$soll-> fecha_inicio}}</td>
            <td style="text-align: center">{{$soll-> fecha_final}}</td>
            <td style="text-align: center">{{$soll-> Descripcion}}</td>
            <td style="text-align: center">    
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                
                  <a href="">  
                   <button  type="button" class="btn btn-outline-primary ti-pencil" style="margin-right 10px"></button>   
                    </a>
                
                  
                    <a href="">
                    <button class="btn btn-outline-info me-md-4 ti-unlock"  type="button" style="margin-right 10px">
                 
                    </button>
                    </a>
                    <a href="">
                    <button class="btn btn-outline-danger me-md-4 ti-close" type="button"></button>
                    </a>
                  
                    <a href="">
                    <button class="btn btn-outline-warning me-md-4 ti-lock" type="button" style="margin-right 10px"></button>
                    </a>
                
                </div> 
            </td>
        </tr>
    @endforeach
    </tbody>
    </thead>
  </table>

@stop