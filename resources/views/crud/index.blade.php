@extends('layouts.master')

@section('title', 'Index')

@section('content')

    <ul>
    @foreach($usuarios as $usuario)
       
        <li><a href="{{route('test.show',$usuario->id)}}">{{$usuario->name}} {{ $usuario->password}}</a></li>

    @endforeach
    </ul>

@endsection


    
