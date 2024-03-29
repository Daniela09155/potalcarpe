@section('content_header')
<h4> Editar {{$permission->name}} </h4>
@stop
@extends('layouts.app')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            @include('role_user.custom.message')
            <div class="card">
                <div class="card-header">
                    <h2>Editar {{$permission->name}}</h2>
                </div>


                <div class="card-body">
                    <form action="{{route('permission.update',$permission)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="container">
                            <h3>Informacion requerida</h3>
                            <form>

                            <div class="form-group">
                                    <select name="category_id" id="category_id" class="form-control">
                                        @foreach($categories as $category)
                                        <option value="{!! $category->id !!}"
                                        @isset($permission->category->id)
                                        @if($category->id==$permission->category->id)
                                        selected
                                        @endif
                                        @endisset    
                                        >
                                            {!! $category->name !!}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>


            


                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="nombre" value="{!! old('name',$permission->name) !!}" required>
                                </div>


                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Alerta!</strong> Tenga cuidado con el identificador (slug), esto puede afectar la funcionalidad de la aplicación, solo se usa para crear o modificar módulos.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="identificador" value="{!! old('slug',$permission->slug) !!}" required>
                                </div>


                                
                                <div class="form-group">
                                        <textarea name="description" id="description" class="form-control" placeholder="descripcion" >{!! old('description',$permission->description) !!}</textarea>
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