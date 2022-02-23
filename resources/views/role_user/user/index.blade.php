@section('content_header')
<h4> Usuarios </h4>
@stop
@extends('layouts.app')
@section('contenido')
<div class="row">
    <div class="col-md-12 mt-3">
        <div class="card">
        @include('role_user.custom.message')
            <div class="card-header">
                <h2 class="text-center">
                    Lista de usuarios
                </h2> 
            </div>
            <div class="card-body">
                <table id="datablegeneral" class="table table-bordered table-striped dt-responsive">
                    <thead>
                        <tr class="text-center">
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Rol</th>
                            @can('haveaccess', 'user.show')
                            <th>Ver</th>
                            @endcan
                            @can('haveaccess', 'user.edit')
                            <th>Editar</th>
                            @endcan
                            @can('haveaccess','user.destroy')
                            <th>Eliminar</th>
                            @endcan

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr class="text-center">
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}
                            </td>
                            <td>{{count($user->roles)>=1 ? $user->roles[0]->name : '---'}}</td>
                            @can('haveaccess', 'user.show')
                            <td>
                                <a href="{{route('user.show',$user->id)}}" class="btn btn-primary btn-sm">
                                    <i class="ti-eye"></i>
                                </a>
                            </td>
                            @endcan
                            @can('haveaccess', 'user.edit')
                            <td>
                                <a href="{{route('user.edit',$user->id)}}" class="btn btn-success btn-sm">
                                    <i class="ti-pencil"></i>
                                </a>
                            </td>
                            @endcan
                            @can('haveaccess','user.destroy')
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{ $user->id }}">
                                    <i class="ti-close"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Esta seguro de eliminar {{ $user->name }} ?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Eliminar {{$user->name}} y permisos
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <form action="{{route('user.destroy',$user)}}" method="post">
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