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
                            <h4>Tareas Publicas</h4>
                        </div>
                        <div class="col-md-6">
                            {{Form::button('<i class="fa fa-filter"></i> Filtrar', ['class' => 'btn btn-warning pull-right', 'data-toggle' => 'modal', 'data-target' => '#filter'])}}
                            @include('modals.tasks.filter-general-task', ['id'=> 'filter', 'url' => route('home')])
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Tareas Globales</b>
                    </div>

                    <div class="panel-body">
                        @if(count($tasks) > 0)
                            <table class="table table-striped task-table table-hover">

                                <!-- Table Headings -->
                                <thead>
                                    <th>Nombre</th>
                                    <th>Fecha</th>
                                    <th>Autor</th>
                                    <th>Acciones</th>
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
                                                <div>{{ $task->user->name}}</div>
                                            </td>

                                            <td>
                                                <a href="{{route('task.show',$task->id)}}">
                                                    {{Form::button('<i class="fa fa-search"></i> Ver', ['class' => 'btn btn-primary'])}}
                                                </a>
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
