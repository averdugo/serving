<!-- Modal -->
<div class="modal fade" id="crearSite" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Crear Sitios</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route'=>'admin.sites.store','method'=>'POST','id'=>'crearSiteForm']) !!}
                <div class="form-group">
                    {!! Form::label('siteid', 'Id de Sitio') !!}
                    {!! Form::number('siteid',null, ['class'=>'form-control', 'placeholder'=>'Id del Sitio']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('nemonico', 'Nemonico') !!}
                    {!! Form::text('nemonico',null, ['class'=>'form-control', 'placeholder'=>'Nemonico']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('name', 'I') !!}
                    {!! Form::text('name',null, ['class'=>'form-control', 'placeholder'=>'']) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('address', 'Direccion') !!}
                    {!! Form::text('address',null, ['class'=>'form-control', 'placeholder'=>'Direccion']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('instance', 'Instancia') !!}
                    {!! Form::number('instance',null, ['class'=>'form-control', 'placeholder'=>'Instancia']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('tecnology', 'Tecnologia') !!}
                    {!! Form::text('tecnology',null, ['class'=>'form-control', 'placeholder'=>'Tecnologia']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('emplz', 'ID Emplz') !!}
                    {!! Form::number('emplz',null, ['class'=>'form-control', 'placeholder'=>'']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('comuna', 'Comuna') !!}
                    {!! Form::text('comuna',null, ['class'=>'form-control', 'placeholder'=>'Comuna']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('provincia', 'Provincia') !!}
                    {!! Form::text('provincia',null, ['class'=>'form-control', 'placeholder'=>'Provincia']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('region', 'Region') !!}
                    {!! Form::text('region',null, ['class'=>'form-control', 'placeholder'=>'Region']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('category', 'Categoria') !!}
                    {!! Form::text('category',null, ['class'=>'form-control', 'placeholder'=>'Categoria']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('owner_id', 'Selecciona Dueño') !!}
                    <select name="owner_id" id="owner_id" class="form-control">

                    </select>
                </div>
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary crearSite">Guardar</button>
            </div>

        </div>
    </div>
</div>