<!-- Modal -->
<div class="modal fade" id="editarRequester" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Editar Solicitante  <span id=''></span></h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route'=>'admin.requesters.store','method'=>'PUT','id'=>'editarRequesterForm']) !!}
                {!! Form::hidden('id',null,['id'=>'idEditFormRequester']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name',null, ['class'=>'form-control', 'placeholder'=>'Nombre','id'=>'nameEditFormRequester']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Contacto') !!}
                    {!! Form::email('email',null, ['class'=>'form-control', 'placeholder'=>'E-mail','id'=>'emailEditFormRequester']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('phone', 'Telefono') !!}
                    {!! Form::text('phone',null, ['class'=>'form-control', 'placeholder'=>'+56956956','id'=>'phoneEditFormRequester']) !!}
                </div>

                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary editarRequester">Guardar</button>
            </div>

        </div>
    </div>
</div>