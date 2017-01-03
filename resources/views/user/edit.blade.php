@extends('layouts.app')

@section('title', 'Editar Usuario')

@section('content')
        
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>Editar Usuario</b>
                </div>
                <div class="panel-body">
                    {{ Form::open(['route' => ['user.update', $user->id], 'class' => 'form-horizontal'])}}

                        <!-- Task Name -->
                        <div class="form-group">
                            {{ Form::label('name','Nombre', ['class' => 'col-sm-3 control-label'])}}
                            <div class="col-sm-8">
                                {{Form::text('name', $user->name, ['id' => 'name', 'class' => 'form-control', 'required'])}}
                            </div>

                        </div>

                        <div class="form-group">
                            {{ Form::label('nickname','Apodo', ['class' => 'col-sm-3 control-label'])}}
                            <div class="col-sm-8">
                                <div class="input-group">
                                    {{Form::text('nickname', $user->nickname, ['id' => 'nickname', 'class' => 'form-control', 'required'])}}
                                    <div id="checkNickname" class="input-group-addon pointer" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                        <span class="glyphicon glyphicon-check"></span>
                                    </div>
                                </div>

                                <div class="collapse" id="collapseExample">
                                    <div class="well" id="response">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            {{ Form::label('email','Email', ['class' => 'col-sm-3 control-label'])}}
                            <div class="col-sm-8">
                                {{Form::email('email', $user->email, ['id' => 'email', 'class' => 'form-control', 'required'])}}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-8">
                                @if(Auth::id() == $user->id)
                                    {{Form::button('<i class="fa fa-pencil"></i> Editar', ['type' => 'submit', 'class' => 'btn btn-primary pull-right'])}}
                                @endif
                            </div>
                        </div>
                    {{Form::close()}}
                </div>
            </div>

            <div class="form-group">
                <a href="{{route('user.show', $user->id)}}">
                    {{Form::button('<i class="fa fa-repeat"></i> Regresar', ['class' => 'btn btn-default pull-right'])}}
                </a>
            </div>

        </div>
    </div>
</div>

@endsection

@section('footer')
    <script src="{{ URL::asset('js/ajax.js') }}"></script>
@endsection