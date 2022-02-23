@section('content_header')
<h4> {{$category->name}} </h4>
@stop
@extends('layouts.app')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <div class="card">
                @include('role_user.custom.message')
                <div class="card-header">
                    <h2>Modulo {{$category->name}} detalles</h2>
                </div>


                <div class="card-body">
                    <form method="post">
                        <div class="container">
                            <form>

                                <div class="form-group">
                                    <input disabled type="text" class="form-control" id="name" name="name" placeholder="nombre" value="{!! old('name',$category->name) !!}" required>
                                </div>



                                <div class="form-group">
                                    <textarea name="description" id="description" class="form-control" placeholder="descripcion" disabled>{!! old('description',$category->description) !!}</textarea>
                                </div>

                                <hr>

                                <a href="{{route('category.index')}}" class="btn btn-primary btn-sm">
                                <i class="ti-check"></i>
                                </a>

                                @can('haveaccess','category.edit')
                                <a href="{{route('category.edit',$category)}}" class="btn btn-success btn-sm">
                                    <i class="ti-pencil"></i>
                                </a>
                                @endcan

                            </form>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection