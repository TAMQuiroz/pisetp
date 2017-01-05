@extends('layouts.pdf')

@section('title', 'Ver Tarea')

@section('content')

		<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-12">
      	        	<div class="panel panel-default">
	      	          	<div class="panel-heading">
	                    	<b>Ver tarea</b>
	            		</div>

	            		<div class="panel-body">
				            <table class="table table-striped task-table">
				              	<thead>
				              		<tr>
					                    <th>Nombre</th>
					                    <th>Descripcion</th>
					                    <th>Fecha</th>
					                    <th>Url video</th>
				                    </tr>
				              	</thead>
				          		<tbody>
				                	<tr>
				                    	<td>{{$task->name}}</td>
				                    	<td>{{$task->description}}</td>
				                    	<td>{{$task->date}}</td>
					                    <td>{{$task->url}}</td>
				                	</tr>
				          		</tbody>
				        	</table>
				        </div>
				    </div>
				</div>
			</div>
        </div>

@endsection