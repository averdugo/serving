<!-- Modal -->
<div class="modal fade" id="editarUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Editar Usuario: <span id=''></span></h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route'=>'admin.users.store','method'=>'PUT','id'=>'editarUsuarioForm']) !!}
                {!! Form::hidden('id',null,['id'=>'idEditFormUser']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name',null, ['class'=>'form-control', 'placeholder'=>'Nombre','id'=>'nameEditFormUser']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'Contraseña') !!}
                    {!! Form::password('password', ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'E-Mail') !!}
                    {!! Form::text('email',null, ['class'=>'form-control', 'placeholder'=>'email@serving.cl','id'=>'emailEditFormUser']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('phone', 'Telefono') !!}
                    {!! Form::text('phone',null, ['class'=>'form-control', 'placeholder'=>'+569-1234-1234','id'=>'phoneEditFormUser']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('address', 'Direccion') !!}
                    {!! Form::text('address',null, ['class'=>'form-control', 'placeholder'=>'Calle 1234','id'=>'addressEditFormUser']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('type', 'Selecciona Tipo de Usuario') !!}
                    {!! Form::select('user_type_id', array(
                        '' => 'Seleccione',
                        '1' => 'Admin',
                        '2' => 'Ots',
                        '3' => 'Chofer'
                    ),null,['class'=>'form-control','id'=>'typeEditFormUser']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('group', 'Selecciona Grupo') !!}
                    {!! Form::select('group_id', array(
                        '' => 'Seleccione',
                        '1' => 'DT',
                        '2' => 'ASR',
                        '3' => 'BCH'
                    ),null,['class'=>'form-control','id'=>'groupEditFormUser']) !!}
                </div>
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary editarUsuario">Guardar</button>
            </div>

        </div>
    </div>
</div>