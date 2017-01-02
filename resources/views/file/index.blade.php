<!-- resources/views/index.blade.php -->

@extends('layouts.app')

@section('title', 'Mantenimiento de Archivos')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <ol class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('task.index')}}">Lista de tareas</a></li>
                    <li><a href="{{route('task.show',$task->id)}}">Ver tarea</a></li>
                    <li class="active">Mis archivos</li>
                </ol>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-6">
                            <h4>Mantenimiento de Archivos</h4>
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('file.create', $task->id)}}">
                                {{Form::button('<i class="fa fa-plus"></i> Crear', ['class' => 'btn btn-success pull-right'])}}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Mis Archivos</b>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                        @if(count($task->files) > 0)
                            @foreach($task->files as $file)
                            <div class="col-md-4">
                                <a target="_blank" href="{{Storage::url($file->url)}}" class="thumbnail">
                                    @if($file->extension == 'doc' || $file->extension == 'docx')
                                        {{Html::image(asset('img/doc.png'), null, ['class' => 'img-responsive file_icon'])}}
                                    @elseif($file->extension == 'xls' || $file->extension == 'xlsx')
                                        {{Html::image(asset('img/xls.png'), null, ['class' => 'img-responsive file_icon'])}}
                                    @elseif($file->extension == 'ppt' || $file->extension == 'pptx')
                                        {{Html::image(asset('img/ppt.png'), null, ['class' => 'img-responsive file_icon'])}}
                                    @elseif($file->extension == 'jpg' || $file->extension == 'png')
                                        {{Html::image(asset('img/img.png'), null, ['class' => 'img-responsive file_icon'])}}
                                    @elseif($file->extension == 'pdf')
                                        {{Html::image(asset('img/pdf.png'), null, ['class' => 'img-responsive file_icon'])}}
                                    @endif
                                </a>
                                <div class="text-center">
                                    <h5>
                                        {{$file->name}}
                                        {{Form::button('<i class="fa fa-trash"></i>', ['class' => 'btn btn-danger', 'data-toggle' => 'modal', 'data-target' => '#file'.$file->id])}}
                                    </h5>
                                </div>
                                    

                                @include('modals.delete', ['id'=> 'file'.$file->id, 'message' => '¿Esta seguro que desea eliminar este archivo?', 'route' => route('file.delete', $file->id)])
                            </div>
                            @endforeach
                        @else
                            No se encontraron archivos
                        @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <a href="{{route('task.show', $task->id)}}">
                        {{Form::button('<i class="fa fa-repeat"></i> Regresar', ['class' => 'btn btn-default pull-right'])}}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection