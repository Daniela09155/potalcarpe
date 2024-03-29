@section('content_header')
<h4> Editar {{$user->name}} </h4>
@stop
@extends('layouts.app')
@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            @include('role_user.custom.message')
            <div class="card">
                <div class="card-header">
                    <h2>Editar {{$user->name}}</h2>
                </div>


                <div class="card-body">
                    <form action="{{route('user.update',$user)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="container">
                            <h3>Informacion requerida</h3>
                            <form>


                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{!! old('name',$user->name) !!}" required>
                                </div>


                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Correo" value="{!! old('email',$user->email) !!}" required>
                                </div>



                                <div class="form-group">
                                    <select name="roles" id="roles" class="form-control">
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



                                <input type="submit" class="btn btn-primary" value="Confirmar">
                            </form>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection