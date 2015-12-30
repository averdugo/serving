<!-- Modal -->
<div class="modal fade" id="editarIndicator" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Editar Indicador <span id=''></span></h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route'=>'admin.indicators.store','method'=>'PUT','id'=>'editarIndicatorForm']) !!}
                {!! Form::hidden('id',null,['id'=>'idEditFormIndicator']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name',null, ['class'=>'form-control', 'placeholder'=>'Nombre','id'=>'nameEditFormIndicator']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('value', 'Valor') !!}
                    {!! Form::text('value',null, ['class'=>'form-control', 'placeholder'=>'Valor','id'=>'valueEditFormIndicator']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('range', 'Rango') !!}
                    {!! Form::text('range',null, ['class'=>'form-control', 'placeholder'=>'Nombre','id'=>'rangeEditFormIndicator']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('type', 'Selecciona Tipo') !!}
                    {!! Form::select('type', array(
                        '' => 'Seleccione',
                        '1' => 'DT',
                        '2' => 'ASR',
                        '3' => 'BCH'
                    ),null,['class'=>'form-control','id'=>'typeEditFormIndicator']) !!}
                </div>

                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary editarIndicator">Guardar</button>
            </div>

        </div>
    </div>
</div>