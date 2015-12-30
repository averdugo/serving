var swallo = true;
function addAllowance(){

    var form = $('#crearAllowanceForm').serializeObject();
    var url ="/admin/allowances";

    $.post(url,form,function(result){
        if (swallo){
            $('#crearAllowance').modal('hide');
            alert('Viatico Creado')
        }else{
            location.reload();
        }
    });
}
function getAllowance(id){

    var url ="/admin/allowances/"+id+"/edit"

    $.get(url,function(result){
        console.log(result)
        $('#idEditFormAllowance').val(result.id);
        $('#regionEditFormAllowance').val(result.region);
        $('#placeEditFormAllowance').val(result.place);
        $('#valueEditFormAllowance').val(result.value);
        $('#fondoEditFormAllowance').val(result.fondo);
        $('#editarAllowance').modal();
    });
}
function editAllowance(){

    var form = $('#editarAllowanceForm').serializeObject();
    var url ="/admin/allowances/"+form.id;

    $.post(url,form,function(result){
        $('#editarAllowance').modal('hide');
        alert('Viatico Actualizado');
        location.reload();
    });
}

function deleteAllowance(id){

    var form = $('#deleteFormA').serializeObject();
    var url ="/admin/allowances/"+id;

    $.post(url, form, function(result){
        $("#allowances"+result).remove();
    });
}
