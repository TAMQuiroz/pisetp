<!-- resources/views/create.blade.php -->

@extends('layouts.app')

@section('title', 'Show')

@section('content')
        
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="form-horizontal">
                        <!-- Task Name -->
                        <div class="form-group">
                            {{ Form::label('task','Task:', ['class' => 'col-sm-3 control-label'])}}
                            <div class="col-sm-6">
                                {{Form::text('name', $task->name, ['id' => 'task-name', 'class' => 'form-control', 'readonly'])}}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <a href="{{route('task.edit',$task->id)}}">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-pencil"></i> Edit
                                    </button>
                                </a>
                                <a href="{{route('task.index')}}">
                                    <button type="button" class="btn btn-default pull-right">
                                        <i class="fa fa-repeat"></i> Return
                                    </button>
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