var swown = true;
function addOwner(){

    var form = $('#crearOwnerForm').serializeObject();
    var url ="/admin/owners";

    $.post(url,form,function(result){
        if (swown){
            $('#crearOwner').modal('hide');
            alert('Dueño Creado')
        }else{
            location.reload();
        }
    });
}
function getOwner(id){

    var url ="/admin/owners/"+id+"/edit"

    $.get(url,function(result){
        $('#idEditFormOwner').val(result.id);
        $('#nameEditFormOwner').val(result.name);
        $('#contactEditFormOwner').val(result.contact);
        $('#phoneEditFormOwner').val(result.phone);
        $('#editarOwner').modal();
    });
}
function editOwner(){

    var form = $('#editarOwnerForm').serializeObject();
    var url ="/admin/owners/"+form.id;

    $.post(url,form,function(result){
        $('#editarOwner').modal('hide');
        alert('Dueño Actualizado');
        location.reload();
    });
}
function getOwnerOptions(swsite){
    var url ="/admin/owners/option/";
    $.get(url,function(result){
        $('select#owner_id').html(result)

    });
}

function deleteOwner(id){

    var form = $('#deleteFormO').serializeObject();
    var url ="/admin/owners/"+id;

    $.post(url, form, function(result){
        $("#owner"+result).remove();
    });
}
