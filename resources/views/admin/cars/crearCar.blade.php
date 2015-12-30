<!-- Modal -->
<div class="modal fade" id="crearCar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Crear Auto</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route'=>'admin.cars.store','method'=>'POST','id'=>'crearCarForm']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name',null, ['class'=>'form-control', 'placeholder'=>'Toyota X']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('plate', 'Placa') !!}
                    {!! Form::text('plate',null, ['class'=>'form-control', 'placeholder'=>'XY-5012']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('status', 'Selecciona Estado') !!}
                    {!! Form::select('status', array(
                        '' => 'Seleccione',
                        '1' => 'Mantencion',
                        '2' => 'Inactivo',
                        '3' => 'Activo'
                    ),null,['class'=>'form-control']) !!}
                </div>

                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary crearCar">Guardar</button>
            </div>

        </div>
    </div>
</div>