<!-- Modal -->
<div class="modal fade" id="crearRequester" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Crear Solicitante</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route'=>'admin.requesters.store','method'=>'POST','id'=>'crearRequesterForm']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name',null, ['class'=>'form-control', 'placeholder'=>'Nombre ']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'email') !!}
                    {!! Form::email('email',null, ['class'=>'form-control', 'placeholder'=>'E-mail']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('phone', 'Telefono') !!}
                    {!! Form::text('phone',null, ['class'=>'form-control', 'placeholder'=>'+56923232']) !!}
                </div>

                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary crearRequester">Guardar</button>
            </div>

        </div>
    </div>
</div>