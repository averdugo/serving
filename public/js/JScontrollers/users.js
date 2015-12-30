var swuser = true;
function addUser(){

    var form = $('#crearUsuarioForm').serializeObject();
    var url ="/admin/users";

    $.post(url,form,function(result){
        if (swuser){
            $('#crearUsuario').modal('hide');
            alert('Usuario Creado')
        }else{
            location.reload();
        }
    });
}
function getUser(id){

    var url ="/admin/users/"+id+"/edit"

    $.get(url,function(result){

        $('#idEditFormUser').val(result.id);
        $('#nameEditFormUser').val(result.name);
        $('#emailEditFormUser').val(result.email);
        $('#phoneEditFormUser').val(result.phone);
        $('#addressEditFormUser').val(result.address);
        $('#typeEditFormUser option[value='+result.user_type_id+']').attr('selected','selected');
        $('#groupEditFormUser option[value='+result.group_id+']').attr('selected','selected');
        $('#editarUsuario').modal();
    });
}
function editUser(){

    var form = $('#editarUsuarioForm').serializeObject();
    var url ="/admin/users/"+form.id;

    $.post(url,form,function(result){
        $('#editarUsuario').modal('hide');
        alert('Usuario Actualizado');
        location.reload();
    });
}

function deleteUser(id){

    var form = $('#deleteForm').serializeObject();
    var url ="/admin/users/"+id;

    $.post(url, form, function(result){
        $("#user"+result).remove();
    });
}
