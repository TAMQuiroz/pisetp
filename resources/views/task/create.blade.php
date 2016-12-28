<!-- resources/views/create.blade.php -->

@extends('layouts.app')

@section('title', 'Crear tarea')

@section('content')
        
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <ol class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('task.index')}}">Lista de tareas</a></li>
                <li class="active">Crear Tarea</li>
            </ol>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>Creacion de tarea</b>
                </div>
          
                <div class="panel-body">
                    {{ Form::open(['route' => 'task.store', 'files' => true, 'class' => 'form-horizontal'])}}

                        <!-- Task Name -->
                        <div class="form-group">
                            {{ Form::label('name','Nombre', ['class' => 'col-sm-3 control-label'])}}
                            <div class="col-sm-8">
                                {{Form::text('name', null, ['id' => 'task-name', 'class' => 'form-control'])}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('description','Descripcion', ['class' => 'col-sm-3 control-label'])}}
                            <div class="col-sm-8">
                                {{Form::textarea('description', null, ['id' => 'task-desc', 'class' => 'form-control', 'rows' => 6])}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('url','Url de video', ['class' => 'col-sm-3 control-label'])}}
                            <div class="col-sm-8">
                                <div class="input-group">
                                    {{Form::text('url', null, ['id' => 'task-url', 'class' => 'form-control'])}}
                                    <div class="input-group-addon pointer" data-toggle="modal" data-target="#videohelp">
                                        <span class="glyphicon glyphicon-question-sign"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        @include('modals.videohelp')

                        <div class="form-group">
                            {{ Form::label('date','Fecha', ['class' => 'col-sm-3 control-label'])}}
                            <div class="col-sm-8">
                                <div class='input-group date' id='date'>
                                    {{Form::text('date', null, ['id' => 'task-date', 'class' => 'form-control'])}}
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('image','Imagen', ['class' => 'col-sm-3 control-label'])}}
                            <div class="col-sm-8">
                                {{Form::file('image', ['id' => 'image', 'class' => 'form-control file'])}}
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-8">
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