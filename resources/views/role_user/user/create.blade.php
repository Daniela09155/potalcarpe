@section('content_header')
<h4> Crear usuario </h4>
@stop
@extends('layouts.app')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <div class="card">
                @include('role_user.custom.message')
                <div class="card-header">
                    <h2>Crear usuario</h2>
                </div>


                <div class="card-body">
                    <form action="{{route('user.store')}}" method="post">
                        @csrf
                        @method('POST')
                        <div class="container">
                            <h3>Informacion requerida</h3>
                            <form>


                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="" required>
                                </div>


                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Correo" value="" required>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" value="" required>
                                </div>


                                <div class="form-group">
                                    <select name="roles" id="roles" class="form-control">
                                        @foreach($roles as $role)
                                        <option value="{!! $role->id !!}">
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