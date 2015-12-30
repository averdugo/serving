var swgroup = true;
function addGroup(){

    var form = $('#crearGroupForm').serializeObject();
    var url ="/admin/groups";

    $.post(url,form,function(result){
        if (swgroup){
            $('#crearGroup').modal('hide');
            alert('Grupo Creado')
        }else{
            location.reload();
        }
    });
}
function getGroup(id){

    var url ="/admin/groups/"+id+"/edit"

    $.get(url,function(result){
        $('#idEditFormGroup').val(result.id);
        $('#nameEditFormGroup').val(result.name);
        $('#typeEditFormGroup option[value='+result.type+']').attr('selected','selected');
        $('#statusEditFormGroup option[value='+result.status+']').attr('selected','selected');

        $('#editarGroup').modal();
    });
}
function editGroup(){

    var form = $('#editarGroupForm').serializeObject();
    var url ="/admin/groups/"+form.id;

    $.post(url,form,function(result){
        $('#editarGroup').modal('hide');
        alert('Auto Actualizado');
        location.reload();
    });
}

function deleteGroup(id){

    var form = $('#deleteFormG').serializeObject();
    var url ="/admin/groups/"+id;

    $.post(url, form, function(result){
        $("#group"+result).remove();
    });
}
