var swsite = true;
function addSite(){

    var form = $('#crearSiteForm').serializeObject();
    var url ="/admin/sites";

    $.post(url,form,function(result){
        if (swsite){
            $('#crearSite').modal('hide');
            alert('Sitio  Creado')
        }else{
            alert('Sitio Creado')
            location.reload();
        }
    });
}
function getSite(id){

    var url ="/admin/sites/"+id+"/edit"

    $.get(url,function(result){
        $('#idEditFormSite').val(result.id);
        $('#nameEditFormSite').val(result.name);
        $('#nemonicoEditFormSite').val(result.nemonico);
        $('#addressEditFormSite').val(result.address);
        $('#siteidEditFormSite').val(result.siteid);
        $('#instanceEditFormSite').val(result.instance);
        $('#tecnologyEditFormSite').val(result.tecnology);
        $('#emplzEditFormSite').val(result.emplz);
        $('#comunaEditFormSite').val(result.comuna);
        $('#provinciaEditFormSite').val(result.provincia);
        $('#regionEditFormSite').val(result.region);
        $('#categoryEditFormSite').val(result.category);
        $('#ownerEditFormSite option[value='+result.owner_id+']').attr('selected','selected');
        $('#editarSite').modal();
    });
}
function editSite(){

    var form = $('#editarSiteForm').serializeObject();
    var url ="/admin/sites/"+form.id;

    $.post(url,form,function(result){
        $('#editarSite').modal('hide');
        alert('Sitio Actualizado');
        location.reload();
    });
}

function deleteSite(id){

    var form = $('#deleteFormS').serializeObject();
    var url ="/admin/sites/"+id;

    $.post(url, form, function(result){
        $("#site"+result).remove();
    });
}
