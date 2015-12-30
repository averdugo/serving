<!-- Modal -->
<div class="modal fade" id="editarGroup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Editar Grupo <span id=''></span></h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route'=>'admin.groups.store','method'=>'PUT','id'=>'editarGroupForm']) !!}
                {!! Form::hidden('id',null,['id'=>'idEditFormGroup']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name',null, ['class'=>'form-control', 'placeholder'=>'Nombre','id'=>'nameEditFormGroup']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('type', 'Selecciona Tipo') !!}
                    {!! Form::select('type', array(
                        '' => 'Seleccione',
                        '1' => 'DT',
                        '2' => 'ASR',
                        '3' => 'BCH'
                    ),null,['class'=>'form-control','id'=>'typeEditFormGroup']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('status', 'Selecciona Estado') !!}
                    {!! Form::select('status', array(
                        '' => 'Seleccione',
                        '1' => 'Inactivo',
                        '2' => 'Activo'
                    ),null,['class'=>'form-control','id'=>'statusEditFormGroup']) !!}
                </div>
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary editarGroup">Guardar</button>
            </div>

        </div>
    </div>
</div>