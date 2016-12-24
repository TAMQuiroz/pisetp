<div id="{{$id}}" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Confirmacion</h4>
            </div>
            <div class="modal-body">
                <p>{{ $message }}</p>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-10">
                        {{ Form::button('Cancelar', ['class' => 'btn btn-default', 'data-dismiss' => 'modal'])}}
                    </div>
                    <div class="col-md-2 pull-right">
                        {{ Form::submit('Aceptar', ['class' => 'btn btn-success'])}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>