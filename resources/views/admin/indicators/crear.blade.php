<!-- Modal -->
<div class="modal fade" id="crearIndicator" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Crear Indicador</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route'=>'admin.indicators.store','method'=>'POST','id'=>'crearIndicatorForm']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name',null, ['class'=>'form-control', 'placeholder'=>'KPI1']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('value', 'Valor') !!}
                    {!! Form::text('value',null, ['class'=>'form-control', 'placeholder'=>'Valor']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('value', 'Rango') !!}
                    {!! Form::text('range',null, ['class'=>'form-control', 'placeholder'=>'Rango']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('type', 'Selecciona Tipo') !!}
                    {!! Form::select('type', array(
                        '' => 'Seleccione',
                        '1' => 'DT',
                        '2' => 'ASR',
                        '3' => 'BCH'
                    ),null,['class'=>'form-control']) !!}
                </div>


                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary crearIndicator">Guardar</button>
            </div>

        </div>
    </div>
</div>