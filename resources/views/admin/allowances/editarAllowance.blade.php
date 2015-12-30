<!-- Modal -->
<div class="modal fade" id="editarAllowance" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Editar Usuario: <span id=''></span></h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route'=>'admin.users.store','method'=>'PUT','id'=>'editarAllowanceForm']) !!}
                {!! Form::hidden('id',null,['id'=>'idEditFormAllowance']) !!}
                <div class="form-group">
                    {!! Form::label('region', 'Region') !!}
                    {!! Form::text('region',null, ['class'=>'form-control', 'placeholder'=>'RM','id'=>'regionEditFormAllowance']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('place', 'Lugar') !!}
                    {!! Form::text('place',null, ['class'=>'form-control', 'placeholder'=>'Lugar','id'=>'placeEditFormAllowance']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('value', 'Valor') !!}
                    {!! Form::text('value',null, ['class'=>'form-control', 'placeholder'=>'$','id'=>'valueEditFormAllowance']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('fondo', 'Fondo a Rendir') !!}
                    {!! Form::text('fondo',null, ['class'=>'form-control', 'placeholder'=>'$','id'=>'fondoEditFormAllowance']) !!}
                </div>
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary editarAllowance">Guardar</button>
            </div>

        </div>
    </div>
</div>