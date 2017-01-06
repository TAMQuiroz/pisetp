@extends('layouts.pdf')

@section('title', 'Listado de tareas')

@section('content')

		<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-12">
      	        	<div class="panel panel-default">
	      	          	<div class="panel-heading">
	                    	<b>Listado de tareas</b>
	            		</div>

	            		<div class="panel-body">
                            @if(count($tasks) > 0)
                                <table class="table table-striped task-table">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Autor</th>
                                            <th>Fecha</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                            @foreach ($tasks as $task)
                                                <tr>
                                                    <td>
                                                        <div>{{ $task->name }}</div>
                                                    </td>

                                                    <td>
                                                        <div>{{ $task->user->name }}</div>
                                                    </td>

                                                    <td>
                                                        <div>{{ $task->date}}</div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            @else
                                No se encontraron datos
                            @endif
				        </div>
				    </div>
				</div>
			</div>
        </div>

@endsection