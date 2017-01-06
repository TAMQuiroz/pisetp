<!-- resources/views/index.blade.php -->

@extends('layouts.app')

@section('title', 'Mantenimiento de Tareas')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-6">
                            <h4>Mantenimiento de Tareas</h4>
                        </div>
                        <div class="col-md-6">
                            {{Form::button('<i class="fa fa-filter"></i> Filtrar', ['class' => 'btn btn-warning', 'data-toggle' => 'modal', 'data-target' => '#filter'])}}
                            @include('modals.tasks.filter-task', ['id'=> 'filter', 'url' => route('task.index')])

                            <div class="btn-group">
                              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Reportes <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu">
                                <li>
                                    <a href="{{route('task.export.index.pdf', Auth::id())}}">
                                        <i class="fa fa-file-pdf-o"></i> PDF
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('task.export.index.excel', Auth::id())}}">
                                        <i class="fa fa-file-excel-o"></i> Excel
                                    </a>
                                </li>
                              </ul>
                            </div>

                            <a href="{{route('task.create')}}">
                                {{Form::button('<i class="fa fa-plus"></i> Crear', ['class' => 'btn btn-success'])}}
                            </a>

                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Tareas actuales</b>
                    </div>

                    <div class="panel-body">
                        @if(count($tasks) > 0)
                            <table class="table table-striped task-table table-hover">

                                <!-- Table Headings -->
                                <thead>
                                    <th>Nombre</th>
                                    <th>Fecha</th>
                                    <th colspan="2" class="text-center">Acciones</th>
                                </thead>

                                <!-- Table Body -->
                                <tbody>
                                    @foreach ($tasks as $task)
                                        <tr>
                                            <!-- Task Name -->
                                            <td>
                                                <div>{{ $task->name }}</div>
                                            </td>

                                            <td>
                                                <div>{{ $task->date}}</div>
                                            </td>

                                            <td>
                                                <a href="{{route('task.show',$task->id)}}">
                                                    {{Form::button('<i class="fa fa-search"></i> Ver', ['class' => 'btn btn-primary pull-right'])}}
                                                </a>
                                            </td>    

                                            <!-- Delete Button -->
                                            <td>
                                                {{Form::button('<i class="fa fa-trash"></i> Eliminar', ['class' => 'btn btn-danger', 'data-toggle' => 'modal', 'data-target' => '#task'.$task->id])}}
                                                @include('modals.delete', ['id'=> 'task'.$task->id, 'message' => '¿Esta seguro que desea eliminar esta tarea?', 'route' => route('task.delete', $task->id)])
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $tasks->links() }}
                        @else
                            No se encontraron tareas
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection