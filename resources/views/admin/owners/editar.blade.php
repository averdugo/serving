<!-- Modal -->
<div class="modal fade" id="editarOwner" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Editar Dueño  <span id=''></span></h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route'=>'admin.owners.store','method'=>'PUT','id'=>'editarOwnerForm']) !!}
                {!! Form::hidden('id',null,['id'=>'idEditFormOwner']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name',null, ['class'=>'form-control', 'placeholder'=>'Nombre','id'=>'nameEditFormOwner']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('contact', 'Contacto') !!}
                    {!! Form::text('contact',null, ['class'=>'form-control', 'placeholder'=>'Contacto','id'=>'contactEditFormOwner']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('phone', 'Telefono') !!}
                    {!! Form::text('phone',null, ['class'=>'form-control', 'placeholder'=>'Telefono','id'=>'phoneEditFormOwner']) !!}
                </div>

                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary editarOwner">Guardar</button>
            </div>

        </div>
    </div>
</div>