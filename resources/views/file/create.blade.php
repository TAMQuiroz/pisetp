<!-- resources/views/create.blade.php -->

@extends('layouts.app')

@section('title', 'Subir archivo')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <ol class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('task.index')}}">Lista de tareas</a></li>
                    <li><a href="{{route('task.show',$task->id)}}">Ver tarea</a></li>
                    <li><a href="{{route('file.index',$task->id)}}">Mis archivos</a></li>
                    <li class="active">Subir Archivo</li>
                </ol>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Subir archivo</b>
                    </div>
              
                    <div class="panel-body">
                        {{ Form::open(['route' => ['file.store', $task->id], 'files' => true, 'class' => 'form-horizontal'])}}

                            <!-- Task Name -->
                            <div class="form-group">
                                {{ Form::label('name','Nombre', ['class' => 'col-sm-3 control-label'])}}
                                <div class="col-sm-8">
                                    {{Form::text('name', null, ['id' => 'task-name', 'class' => 'form-control'])}}
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('file','Archivo', ['class' => 'col-sm-3 control-label'])}}
                                <div class="col-sm-8">
                                    {{Form::file('file', ['id' => 'file', 'class' => 'form-control file'])}}
                                </div>
                            </div>

                            <!-- Add Task Button -->
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-8">
                                    {{Form::button('<i class="fa fa-plus"></i> Crear', ['class' => 'btn btn-success', 'data-toggle' => 'modal', 'data-target' => '#task'])}}
                                    @include('modals.confirm', ['id'=> 'task', 'message' => '¿Esta seguro que desea hacer esta accion?'])

                                    <a href="{{route('file.index', $task->id)}}">
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
