@section('content_header')
<h4> Modulos </h4>
@stop
@extends('layouts.app')

@section('contenido')
<div class="row">
    <div class="col-md-12 mt-3">
        <div class="card">
            @include('role_user.custom.message')
            <div class="card-header">
                <h2 class="text-center">
                    Lista de modulos
                </h2>
                <div>
                    @can('haveaccess','category.create')
                    <a href="{{route('category.create')}}" class="btn btn-primary">Crear</a>
                    @endcan
                </div>
            </div>
            <div class="card-body">
                <table id="datablegeneral" class="table table-bordered table-striped dt-responsive">
                    <thead>
                        <tr class="text-center">
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            @can('haveaccess','category.show')
                            <th>Ver</th>
                            @endcan
                            @can('haveaccess','category.edit')
                            <th>Editar</th>
                            @endcan
                            @can('haveaccess','category.destroy')
                            <th>Eliminar</th>
                            @endcan

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr class="text-center">
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->description}}
                                @can('haveaccess','category.show')
                            </td>
                            <td>
                                <a href="{{route('category.show',$category->id)}}" class="btn btn-primary btn-sm">
                                    <i class="ti-eye"></i>
                                </a>
                            </td>
                            @endcan

                            @can('haveaccess','category.edit')
                            <td>
                                <a href="{{route('category.edit',$category->id)}}" class="btn btn-success btn-sm">
                                    <i class="ti-pencil"></i>
                                </a>
                            </td>
                            @endcan
                            @can('haveaccess','category.destroy')
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{ $category->id }}">
                                    <i class="ti-close"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{ $category->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">{{ $category->name }}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Eliminar {{$category->name}} y permisos
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <form action="{{route('category.destroy',$category)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                        Eliminar
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            @endcan
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        @endsection
    </div>
</div>