@extends('layouts.master')

@section('title', 'Create')

@section('content')

    {!!Form::open(['route'=>'test.store','method' => 'post'])!!}
    	<p>Nombre: {!!Form::text('nombre')!!}</p>
    	<p>Mail: {!!Form::email('email')!!}</p>
    	<p>Password: {!!Form::text('pass')!!}</p>
    	<p>{{ Form::submit('Ok') }}</p>

    {!!Form::close()!!}
    
@endsection


    
