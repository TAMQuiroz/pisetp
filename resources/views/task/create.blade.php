<!-- resources/views/create.blade.php -->

@extends('layouts.app')

@section('title', 'Crear tarea')

@section('content')
        
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>Creacion de tarea</b>
                </div>
          
                <div class="panel-body">
                    {{ Form::open(['route' => 'task.store', 'files' => true, 'class' => 'form-horizontal'])}}

                        <!-- Task Name -->
                        <div class="form-group">
                            {{ Form::label('name','Nombre', ['class' => 'col-sm-3 control-label'])}}
                            <div class="col-sm-6">
                                {{Form::text('name', null, ['id' => 'task-name', 'class' => 'form-control'])}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('description','Descripcion', ['class' => 'col-sm-3 control-label'])}}
                            <div class="col-sm-6">
                                {{Form::textarea('description', null, ['id' => 'task-desc', 'class' => 'form-control', 'rows' => 6])}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('date','Fecha', ['class' => 'col-sm-3 control-label'])}}
                            <div class="col-sm-6">
                                {{Form::date('date', null, ['id' => 'task-date', 'class' => 'form-control'])}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('image','Imagen', ['class' => 'col-sm-3 control-label'])}}
                            <div class="col-sm-6">
                                {{Form::file('image', ['id' => 'task-image', 'class' => 'form-control'])}}
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                {{Form::button('<i class="fa fa-plus"></i> Crear', ['class' => 'btn btn-success', 'data-toggle' => 'modal', 'data-target' => '#task'])}}
                                @include('modals.confirm', ['id'=> 'task', 'message' => '¿Esta seguro que desea hacer esta accion?'])

                                <a href="{{route('task.index')}}">
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