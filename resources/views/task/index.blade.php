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
                            <a href="{{route('task.create')}}">
                                <button type="button" class="btn btn-success pull-right">
                                    <i class="fa fa-plus"></i> Create
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                @if (!empty($tasks))
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tareas actuales
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">

                            <!-- Table Headings -->
                            <thead>
                                <th>Nombre</th>
                                <th>Acciones</th>
                                <th></th>
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
                                            <a href="{{route('task.show',$task->id)}}">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-search"></i> Show
                                                </button>
                                            </a>
                                        </td>    
                                        <!-- Delete Button -->
                                        <td>
                                            {{Form::open(['route' => ['task.delete', $task->id], 'method' => 'DELETE'])}}
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i> Delete
                                                </button>
                                            {{Form::close()}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $tasks->links() }}
                    </div>
                </div>
                @else
                No se encontraron tareas
                @endif
            </div>
        </div>
    </div>
@endsection