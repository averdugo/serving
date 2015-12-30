var swind = true;
function addIndicator(){

    var form = $('#crearIndicatorForm').serializeObject();
    var url ="/admin/indicators";

    $.post(url,form,function(result){
        if (swind){
            $('#crearIndicator').modal('hide');
            alert('Viatico Creado')
        }else{
            location.reload();
        }
    });
}
function getIndicator(id){

    var url ="/admin/indicators/"+id+"/edit"

    $.get(url,function(result){

        $('#idEditFormIndicator').val(result.id);
        $('#nameEditFormIndicator').val(result.name);
        $('#valueEditFormIndicator').val(result.value);
        $('#rangeEditFormIndicator').val(result.range);
        $('#typeEditFormIndicator option[value='+result.type+']').attr('selected','selected');
        $('#editarIndicator').modal();
    });
}
function editIndicator(){

    var form = $('#editarIndicatorForm').serializeObject();
    var url ="/admin/indicators/"+form.id;

    $.post(url,form,function(result){
        $('#editarIndicator').modal('hide');
        alert('Viatico Actualizado');
        location.reload();
    });
}

function deleteIndicator(id){

    var form = $('#deleteFormI').serializeObject();
    var url ="/admin/indicators/"+id;

    $.post(url, form, function(result){
        $("#indicator"+result).remove();
    });
}
