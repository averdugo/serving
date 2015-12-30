<!-- Modal -->
<div class="modal fade" id="crearOwner" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Crear Dueño de Sitios</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route'=>'admin.owners.store','method'=>'POST','id'=>'crearOwnerForm']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre de Sitio') !!}
                    {!! Form::text('name',null, ['class'=>'form-control', 'placeholder'=>'Nombre del Sitio']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('contact', 'Contacto') !!}
                    {!! Form::text('contact',null, ['class'=>'form-control', 'placeholder'=>'Nombre de Contacto']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('phone', 'Telefono') !!}
                    {!! Form::text('phone',null, ['class'=>'form-control', 'placeholder'=>'+56923232']) !!}
                </div>

                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary crearOwner">Guardar</button>
            </div>

        </div>
    </div>
</div>