<div id="{{$id}}" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Filtros de busqueda</h4>
            </div>
            {{Form::open(['url' => $url, 'method' => 'GET', 'class' => 'form-horizontal'])}}
            <div class="modal-body">
				<div class="form-group">
					{{ Form::label('name','Nombre', ['class' => 'control-label col-md-4 col-sm-3 col-xs-6 label-modal'])}}
					<div class="col-md-6 col-sm-6 col-xs-6">
						{{Form::text('name', null, ['class' => 'form-control input-modal'])}}
					</div>			
				</div>
				
				<div class="form-group">
					{{ Form::label('description','Descripcion', ['class' => 'control-label col-md-4 col-sm-3 col-xs-6 label-modal'])}}
					<div class="col-md-6 col-sm-6 col-xs-6">
						{{Form::text('description', null, ['class' => 'form-control input-modal'])}}
					</div>			
				</div>

				<div class="form-group">
					{{ Form::label('dateIni','Fecha Inicio', ['class' => 'control-label col-md-4 col-sm-3 col-xs-6 label-modal'])}}
					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class='input-group date' id='dateIni'>
	                        {{Form::text('dateIni', null, ['class' => 'form-control'])}}
	                        <span class="input-group-addon">
	                            <span class="glyphicon glyphicon-calendar"></span>
	                        </span>
	                    </div>
					</div>			
				</div>	

				<div class="form-group">
					{{ Form::label('dateEnd','Fecha Fin', ['class' => 'control-label col-md-4 col-sm-3 col-xs-6 label-modal'])}}
					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class='input-group date' id='dateEnd'>
	                        {{Form::text('dateEnd', null, ['class' => 'form-control'])}}
	                        <span class="input-group-addon">
	                            <span class="glyphicon glyphicon-calendar"></span>
	                        </span>
	                    </div>
					</div>			
				</div>	
            </div>

            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-9">
                        {{ Form::button('Cancelar', ['class' => 'btn btn-default', 'data-dismiss' => 'modal'])}}
                    </div>
                    <div class="col-md-3">
                        {{ Form::button('<i class="fa fa-search"></i> Buscar', ['type' => 'submit', 'class' => 'btn btn-submit'])}}
                    </div>
                </div>
            </div>
			{{Form::close()}}
        </div>
    </div>
</div>