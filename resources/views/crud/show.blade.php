@extends('layouts.master')

@section('title', 'Show')

@section('content')

   <p>Nombre: {{$user->name}}</p>
   <p>Password: {{$user->password}}</p>
   <p>Email: {{$user->email}}</p>

@endsection


    
