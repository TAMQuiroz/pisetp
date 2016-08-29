<!-- resources/views/index.blade.php -->

@extends('layouts.app')

@section('title', 'Index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                
                <div class="panel panel-default">
                    <div class="panel-body">

                        <a href="{{route('task.create')}}">
                            <button type="button" class="btn btn-success pull-right">
                                <i class="fa fa-plus"></i> Create
                            </button>
                        </a>

                    </div>
                </div>

                @if (count($tasks) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Tasks
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">

                            <!-- Table Headings -->
                            <thead>
                                <th>Task</th>
                                <th>&nbsp;</th>
                            </thead>

                            <!-- Table Body -->
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <!-- Task Name -->
                                        <td class="table-text">
                                            <div>{{ $task->name }}</div>
                                        </td>

                                        <td>
                                            <a href="{{route('task.show',$task->id)}}">
                                                <button type="submit" class="btn btn-primary pull-right">
                                                    <i class="fa fa-search"></i> Show
                                                </button>                                                
                                            </a>
                                        </td>    
                                        <!-- Delete Button -->
                                        <td>
                                            {{Form::open(['route' => ['task.delete', $task->id], 'method' => 'DELETE'])}}
                                                <button type="submit" class="btn btn-danger pull-right">
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
                @endif
            </div>
        </div>
    </div>
@endsection