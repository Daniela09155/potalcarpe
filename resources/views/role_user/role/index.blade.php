@section('content_header')
<h4> Roles </h4>
@stop
@extends('layouts.app')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">
                        Lista de Roles
                    </h2>
                    <div>
                        @can('haveaccess','role.create')
                        <a href="{{route('role.create')}}" class="btn btn-primary">Crear</a>
                        @endcan
                    </div>
                </div>

                <div class="card-body">
                    @include('role_user.custom.message')


                    <table id="datablegeneral" class="table table-bordered table-striped dt-responsive">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Identificador</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Acceso total</th>
                                @can('haveaccess','role.show')
                                <th>Ver</th>
                                @endcan
                                @can('haveaccess','role.edit')
                                <th>Editar</th>
                                @endcan
                                @can('haveaccess','role.destroy')
                                <th>Eliminar</th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                            <tr>
                                <th scope="row">{{$role->id}}</th>
                                <td>{{$role->name}}</td>
                                <td>{{$role->slug}}</td>
                                <td>{{$role->description}}</td>
                                <td>{{$role['full_access']}}</td>
                                <td>
                                    @can('haveaccess','role.show')
                                    <a href="{{route('role.show',$role->id)}}" class="btn btn-primary btn-sm">
                                        <i class="ti-eye"></i>
                                    </a>
                                    @endcan
                                </td>
                                <td>
                                    @can('haveaccess','role.edit')
                                    <a href="{{route('role.edit',$role->id)}}" class="btn btn-success btn-sm">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    @endcan
                                </td>
                                @can('haveaccess','role.destroy')
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{ $role->id }}">
                                        <i class="ti-close"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{ $role->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Esta seguro de eliminar {{ $role->name }} ?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Eliminar {{$role->name}} y permisos
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                    <form action="{{route('role.destroy',$role)}}" method="post">
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
            </div>
        </div>
    </div>
</div>
@endsection