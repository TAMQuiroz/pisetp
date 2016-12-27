<!-- resources/views/create.blade.php -->

@extends('layouts.app')

@section('title', 'Editar Rol de Usuario')

@section('content')
        
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>Edicion de roles de usuario</b>
                </div>
                <div class="panel-body">
                    {{ Form::open(['route' => ['role.update', $user->id], 'class' => 'form-horizontal'])}}

                        @foreach($roles as $role)
                        <div class="form-group">
                            <div class="col-md-5"></div>
                            <div class="col-md-7">
                                {{Form::checkbox('roles[]', $role->id, false, ['id'=>'opcion'.$role->id])}}
                                <div class="btn-group">
                                    <label for='opcion{{$role->id}}' class="btn btn-default">
                                        <span class="glyphicon glyphicon-ok"></span>
                                        <span> </span>
                                    </label>
                                    {{ Form::label('opcion'.$role->id, $role->name, ['class' => 'btn btn-primary active'])}}
                                </div>
                            </div>
                        </div>   
                        @endforeach

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-8">
                                {{Form::button('<i class="fa fa-pencil"></i> Editar', ['class' => 'btn btn-primary', 'data-toggle' => 'modal', 'data-target' => '#role'.$user->id])}}
                                @include('modals.confirm', ['id'=> 'role'.$user->id, 'message' => '¿Esta seguro que desea hacer esta accion?'])

                                <a href="{{route('user.show',$user->id)}}">
                                    {{Form::button('<i class="fa fa-repeat"></i> Regresar', ['class' => 'btn btn-default pull-right'])}}
                                </a>
                            </div>
                        </div>

                    {{Form::close()}}
                </div>
            </div>
            <!-- New Task Form -->

        </div>
    </div>
</div>

@endsection