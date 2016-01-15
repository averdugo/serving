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
                    {!! Form::label('siteid', 'Id de Sitio') !!}
                    {!! Form::number('siteid',null, ['class'=>'form-control', 'placeholder'=>'Nombre del Sitio','id'=>'siteidEditFormSite']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('nemonico', 'Nemonico') !!}
                    {!! Form::text('nemonico',null, ['class'=>'form-control', 'placeholder'=>'Nemonico','id'=>'nemonicoEditFormSite']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('name', 'I') !!}
                    {!! Form::text('name',null, ['class'=>'form-control', 'placeholder'=>'','id'=>'nameEditFormSite']) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('address', 'Direccion') !!}
                    {!! Form::text('address',null, ['class'=>'form-control', 'placeholder'=>'Telefono','id'=>'addressEditFormSite']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('instance', 'Instancia') !!}
                    {!! Form::number('instance',null, ['class'=>'form-control', 'placeholder'=>'Instancia','id'=>'instanceEditFormSite']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('tecnology', 'Tecnologia') !!}
                    {!! Form::text('tecnology',null, ['class'=>'form-control', 'placeholder'=>'Tecnologia','id'=>'tecnologyEditFormSite']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('emplz', 'ID Emplz') !!}
                    {!! Form::number('emplz',null, ['class'=>'form-control', 'placeholder'=>'','id'=>'emplzEditFormSite']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('comuna', 'Comuna') !!}
                    {!! Form::text('comuna',null, ['class'=>'form-control', 'placeholder'=>'Comuna','id'=>'comunaEditFormSite']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('provincia', 'Provincia') !!}
                    {!! Form::text('provincia',null, ['class'=>'form-control', 'placeholder'=>'Provincia','id'=>'provinciaEditFormSite']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('region', 'Region') !!}
                    {!! Form::text('region',null, ['class'=>'form-control', 'placeholder'=>'Region','id'=>'regionEditFormSite']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('category', 'Categoria') !!}
                    {!! Form::text('category',null, ['class'=>'form-control', 'placeholder'=>'Categoria','id'=>'categoryEditFormSite']) !!}
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