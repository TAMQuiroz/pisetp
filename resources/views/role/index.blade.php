<!-- resources/views/index.blade.php -->

@extends('layouts.app')

@section('title', 'Mantenimiento de Roles')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-6">
                            <h4>Lista de Roles</h4>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Roles</b>
                    </div>

                    <div class="panel-body">
                        @if(count($roles) > 0)
                            <table class="table table-striped task-table table-hover">

                                <!-- Table Headings -->
                                <thead>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                </thead>

                                <!-- Table Body -->
                                <tbody>
                                    @foreach ($roles as $role)
                                        <tr>
                                            <!-- Task Name -->
                                            <td>
                                                <div>{{ $role->name }}</div>
                                            </td>

                                            <td>
                                                <div>{{ $role->description}}</div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection