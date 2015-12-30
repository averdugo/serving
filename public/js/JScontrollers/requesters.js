var swreq = true;
function addRequester(){

    var form = $('#crearRequesterForm').serializeObject();
    var url ="/admin/requesters";

    $.post(url,form,function(result){
        if (swreq){
            $('#crearRequester').modal('hide');
            alert('Solicitante Creado')
        }else{
            alert('Solicitante Creado')
            location.reload();
        }
    });
}
function getRequester(id){

    var url ="/admin/requesters/"+id+"/edit"

    $.get(url,function(result){
        $('#idEditFormRequester').val(result.id);
        $('#nameEditFormRequester').val(result.name);
        $('#emailEditFormRequester').val(result.email);
        $('#phoneEditFormRequester').val(result.phone);
        $('#editarRequester').modal();
    });
}
function editRequester(){

    var form = $('#editarRequesterForm').serializeObject();
    var url ="/admin/requesters/"+form.id;

    $.post(url,form,function(result){
        $('#editarRequester').modal('hide');
        alert('Solicitante Actualizado');
        location.reload();
    });
}

function deleteRequester(id){

    var form = $('#deleteFormRequester').serializeObject();
    var url ="/admin/requesters/"+id;

    $.post(url, form, function(result){
        $("#requester"+result).remove();
    });
}
