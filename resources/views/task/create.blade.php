<!-- resources/views/create.blade.php -->

@extends('layouts.app')

@section('title', 'Create')

@section('content')
        
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <!-- Display Validation Errors -->
            @include('errors.errors')


            <div class="panel panel-default">
                <div class="panel-body">
                    {{ Form::open(['route' => 'task.store', 'method' => 'POST', 'class' => 'form-horizontal'])}}

                        <!-- Task Name -->
                        <div class="form-group">
                            {{ Form::label('task','Task', ['class' => 'col-sm-3 control-label'])}}
                            <div class="col-sm-6">
                                {{Form::text('name', null, ['id' => 'task-name', 'class' => 'form-control'])}}
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-plus"></i> Create Task
                                </button>
                                <a href="{{route('task.index')}}">
                                    <button type="button" class="btn btn-default pull-right">
                                        <i class="fa fa-repeat"></i> Return
                                    </button>
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