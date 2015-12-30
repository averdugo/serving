<!-- Modal -->
<div class="modal fade" id="editarSite" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Editar Sitios  <span id=''></span></h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route'=>'admin.sites.store','method'=>'PUT','id'=>'editarSiteForm']) !!}
                {!! Form::hidden('id',null,['id'=>'idEditFormSite']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name',null, ['class'=>'form-control', 'placeholder'=>'Nombre','id'=>'nameEditFormSite']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('nemonico', 'Nemonico') !!}
                    {!! Form::text('nemonico',null, ['class'=>'form-control', 'placeholder'=>'Nemonico','id'=>'nemonicoEditFormSite']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('address', 'Direccion') !!}
                    {!! Form::text('address',null, ['class'=>'form-control', 'placeholder'=>'Telefono','id'=>'addressEditFormSite']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('owner_id', 'Selecciona Dueño') !!}

                    <select name="owner_id" id="ownerEditFormSite" class="form-control">
                        <option value="0">Seleccione</option>
                        @foreach($owners as $o)
                            <option value="{{$o->id}}">{{$o->name}}</option>
                        @endforeach
                    </select>
                </div>
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary editarSite">Guardar</button>
            </div>

        </div>
    </div>
</div>