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
                    {!! Form::label('name', 'Nombre de Sitio') !!}
                    {!! Form::text('name',null, ['class'=>'form-control', 'placeholder'=>'Nombre del Sitio']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('nemonico', 'Nemonico') !!}
                    {!! Form::text('nemonico',null, ['class'=>'form-control', 'placeholder'=>'Nemonico']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('address', 'Direccion') !!}
                    {!! Form::text('address',null, ['class'=>'form-control', 'placeholder'=>'Direccion']) !!}
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