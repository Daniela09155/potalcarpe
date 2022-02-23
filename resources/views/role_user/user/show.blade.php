@section('content_header')
<h4> {{$user->name}} </h4>
@stop
@extends('layouts.app')
@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <div class="card">
                @include('role_user.custom.message')
                <div class="card-header">
                    <h2>{{$user->name}} detalles</h2>
                </div>
                
                <div class="card-body">
                    <div class="container">
                        <div class="form-group">
                            <input disabled type="text" class="form-control" id="name" name="name" placeholder="nombre" value="{!! old('name',$user->name) !!}" required>
                        </div>

                        <div class="form-group">
                            <input disabled type="email" class="form-control" id="email" name="email" placeholder="correo" value="{!! old('email',$user->email) !!}" required>
                        </div>

                        <div class="form-group">
                            <select name="roles" id="roles" disabled class="form-control">
                                @foreach($roles as $role)
                                <option value="{!! $role->id !!}" @isset($user->roles[0]->name)
                                    @if($role->name==$user->roles[0]->name)
                                    selected
                                    @endif
                                    @endisset
                                    >
                                    {!! $role->name !!}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <hr>

                        <a href="{{route('user.index')}}" class="btn btn-primary btn-sm">
                            <i class="ti-check"></i>
                        </a>

                        @can('haveaccess', 'user.edit');
                        <a href="{{route('user.edit',$user->id)}}" class="btn btn-success btn-sm">
                            <i class="ti-pencil"></i>
                        </a>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection