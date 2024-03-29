@section('content_header')
<h4> Edit {!! $role->name !!} </h4>
@stop
@extends('layouts.app')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <div class="card">
                @include('role_user.custom.message')
                <div class="card-header">
                    <h2>Editar Rol</h2>
                </div>


                <div class="card-body">
                    <form action="{{route('role.update',$role)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="container">
                            <h3>Informacion requerida</h3>



                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="nombre" value="{!! old('name',$role->name) !!}" required>
                            </div>


                            <div class="form-group">
                                <input type="text" class="form-control" id="slug" name="slug" placeholder="identificador" value="{!! old('slug',$role->slug) !!}" required>
                            </div>


                            <div class="form-group">
                                <textarea name="description" id="description" class="form-control" placeholder="descripcion">{!! old('description',$role->description) !!}</textarea>
                            </div>

                            <hr>
                            <h3>Acceso total</h3>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="fullaccessyes" name="full_access" class="custom-control-input" value="yes" @if($role['full_access']=='yes' ) checked @elseif(old('full_access')=='yes' ) checked @endif>



                                <label class="custom-control-label" for="fullaccessyes">Si</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="fullaccessno" name="full_access" class="custom-control-input" value="no" @if($role['full_access']=='no' ) checked @elseif(old('full_access')=='no' ) checked @endif>
                                <label class="custom-control-label" for="fullaccessno">No</label>
                            </div>
                            <hr>

                            <div class="col-12">

                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab_category_permission" role="tablist">
                                        <a class="nav-item btn btn btn-dark active mr-3" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="presentation" aria-controls="nav-home" aria-selected="true">{{$role->name}}</a>
                                        @foreach($categories as $category)
                                        <a class="nav-link btn btn-outline-primary" id="nav-home-tab{{$category->id}}" data-toggle="tab" href="#nav-home{{$category->id}}" role="tab" aria-controls="nav-home{{$category->id}}" aria-selected="true">{{$category->name}}</a>
                                        @endforeach
                                    </div>
                                </nav>


                                <div class="tab-content mt-3" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                                        <p>
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    @foreach($categories as $category)


                                                    <br>
                                                    <div class="badge badge-primary">
                                                        {{$category->name}}
                                                    </div>


                                                    @foreach($category->permissions as $permission)


                                                    @if(in_array("$permission->id",$permission_role))

                                                    <span class="badge badge-pill badge-success">{{ $permission->name }}</span>



                                                    @endif

                                                    @endforeach

                                                    @endforeach
                                                </li>

                                            </ul>

                                        </p>
                                    </div>


                                    @foreach($categories as $category)
                                    <div class="tab-pane fade show" id="nav-home{{$category->id}}" role="tabpanel" aria-labelledby="nav-home-tab{{$category->id}}">
                                        @foreach($category->permissions as $permission)

                                        <div class="custom-control custom-checkbox mt-3">
                                            <input type="checkbox" class="custom-control-input" id="permission_{!! $permission->id !!}" value="{!! $permission->id !!}" name="permission[]" @if(is_array(old('permission')) && in_array("$permission->id",old('permission')))
                                            checked
                                            @elseif(is_array($permission_role) && in_array("$permission->id",$permission_role))
                                            checked
                                            @endif>
                                            <label class="custom-control-label" for="permission_{!! $permission->id !!}">
                                                {{ $permission->name }}
                                                <em>({{ $permission->description }})</em>

                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                    @endforeach
                                </div>
                            </div>



                            <hr>

                            <input type="submit" class="btn btn-primary" value="Confirmar">
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection