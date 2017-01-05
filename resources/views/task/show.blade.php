<!-- resources/views/create.blade.php -->

@extends('layouts.app')

@section('title', 'Ver tarea')

@section('content')
        
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <ol class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('task.index')}}">Lista de tareas</a></li>
                <li class="active">Ver Tarea</li>
            </ol>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>Ver tarea</b>
                </div>
                <div class="panel-body">
                    <div class="form-horizontal">
                        <!-- Task Name -->
                        <div class="form-group">
                            {{ Form::label('task','Tarea', ['class' => 'col-sm-3 control-label'])}}
                            <div class="col-sm-8">
                                {{Form::text('name', $task->name, ['id' => 'task-name', 'class' => 'form-control', 'readonly'])}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('description','Descripcion', ['class' => 'col-sm-3 control-label'])}}
                            <div class="col-sm-8">
                                {{Form::textarea('description', $task->description, ['id' => 'task-desc', 'class' => 'form-control', 'rows' => 6, 'readonly'])}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('date','Fecha', ['class' => 'col-sm-3 control-label'])}}
                            <div class="col-sm-8">
                                {{Form::date('date', $task->date, ['id' => 'task-date', 'class' => 'form-control', 'readonly'])}}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {{ Form::label('url','Url de video', ['class' => 'col-sm-3 control-label'])}}
                            <div class="col-sm-8">
                            @if($task->url)
                                <div class="embed-responsive embed-responsive-16by9">
                                    {!!$task->url!!}
                                </div>
                            @else
                                {{Form::text('url', 'No tiene un video', ['id' => 'task-url', 'class' => 'form-control', 'readonly'])}}
                            @endif
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('image','Imagen', ['class' => 'col-sm-3 control-label'])}}
                            <div class="col-sm-8">
                                @if($task->image)
                                <a class="thumbnail">
                                    {{Html::image(Storage::url($task->image), Storage::url($task->image), ['class' => 'img-responsive'])}}
                                </a>
                                @else
                                {{Form::text('image', 'No tiene una imagen' , ['id' => 'task-image', 'class' => 'form-control', 'readonly'])}}
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-8">
                                @if(Auth::id() == $task->user_id)
                                <a href="{{route('task.edit',$task->id)}}">
                                    {{Form::button('<i class="fa fa-pencil"></i> Editar', ['class' => 'btn btn-primary'])}}
                                </a>

                                <a href="{{route('file.index',$task->id)}}">
                                    {{Form::button('<i class="fa fa-pencil"></i> Mis Archivos', ['class' => 'btn btn-primary'])}}
                                </a>

                                <a href="{{route('task.export.pdf',$task->id)}}">
                                    {{Form::button('<i class="fa fa-file-pdf-o"></i> PDF', ['class' => 'btn btn-primary'])}}
                                </a>
                                @endif
                                <a href="{{route('task.index')}}">
                                    {{Form::button('<i class="fa fa-repeat"></i> Regresar', ['class' => 'btn btn-default pull-right'])}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- New Task Form -->

        </div>
    </div>
</div>

@endsection