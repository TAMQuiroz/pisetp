@extends('layouts.app')

@section('title', 'Ver Usuario')

@section('content')
        
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Ver Usuario</b>
                    </div>
                    <div class="panel-body">
                        <div class="form-horizontal">
                            <!-- Task Name -->
                            <div class="form-group">
                                {{ Form::label('name','Nombre', ['class' => 'col-sm-3 control-label'])}}
                                <div class="col-sm-8">
                                    {{Form::text('name', $user->name, ['id' => 'task-name', 'class' => 'form-control', 'readonly'])}}
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('nickname','Apodo', ['class' => 'col-sm-3 control-label'])}}
                                <div class="col-sm-8">
                                    {{Form::text('nickname', $user->nickname, ['id' => 'task-nickname', 'class' => 'form-control', 'readonly'])}}
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('email','Email', ['class' => 'col-sm-3 control-label'])}}
                                <div class="col-sm-8">
                                    {{Form::text('email', $user->email, ['id' => 'task-email', 'class' => 'form-control', 'readonly'])}}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-8">
                                    @if(Auth::id() == $user->id)
                                    <a href="{{route('user.edit',$user->id)}}">
                                        {{Form::button('<i class="fa fa-pencil"></i> Editar', ['class' => 'btn btn-primary pull-right'])}}
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Ver Roles</b>
                    </div>
                    <div class="panel-body">
                        <div class="form-horizontal">
                            @if(count($user->roles) > 0)
                                <table class="table table-striped task-table table-hover">

                                    <!-- Table Headings -->
                                    <thead>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Accion</th>
                                    </thead>

                                    <!-- Table Body -->
                                    <tbody>
                                        @foreach ($user->roles as $role)
                                            <tr>
                                                <td>
                                                    <div>{{ $role->name }}</div>
                                                </td>

                                                <td>
                                                    <div>{{ $role->description}}</div>
                                                </td>

                                                <td>
                                                    {{Form::button('<i class="fa fa-trash"></i> Eliminar', ['class' => 'btn btn-danger', 'data-toggle' => 'modal', 'data-target' => '#role'.$role->id])}}
                                                    @include('modals.delete', ['id'=> 'role'.$role->id, 'message' => '¿Esta seguro que desea quitarle este rol?', 'route' => route('role.delete', $role->id)])
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <div class="col-md-12 text-center">
                                    <h4>No posee ningun rol</h4>
                                </div>
                            @endif

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-8">
                                    @if(Auth::id() == $user->id)
                                    <a href="{{route('role.edit',$user->id)}}">
                                        {{Form::button('<i class="fa fa-pencil"></i> Editar', ['class' => 'btn btn-primary pull-right'])}}
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
