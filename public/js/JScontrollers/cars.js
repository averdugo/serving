var swcar = true;
function addCar(){

    var form = $('#crearCarForm').serializeObject();
    var url ="/admin/cars";

    $.post(url,form,function(result){
        if (swcar){
            $('#crearCar').modal('hide');
            alert('Auto Creado')
        }else{
            location.reload();
        }
    });
}
function getCar(id){

    var url ="/admin/cars/"+id+"/edit"

    $.get(url,function(result){
        $('#idEditFormCar').val(result.id);
        $('#nameEditFormCar').val(result.name);
        $('#plateEditFormCar').val(result.plate);
        $('#statusEditFormCar option[value='+result.status+']').attr('selected','selected');

        $('#editarCar').modal();
    });
}
function editCar(){

    var form = $('#editarCarForm').serializeObject();
    var url ="/admin/cars/"+form.id;

    $.post(url,form,function(result){
        $('#editarCar').modal('hide');
        alert('Auto Actualizado');
        location.reload();
    });
}

function deleteCar(id){

    var form = $('#deleteFormC').serializeObject();
    var url ="/admin/cars/"+id;

    $.post(url, form, function(result){
        $("#car"+result).remove();
    });
}
