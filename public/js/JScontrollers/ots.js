function renderDt(){
    //$()
}
function renderAsr(a,b){
    $('#clasificacionA').html(b.detail_type);
    $('#nemonicoA').html(b.detail_type);
}
/*=====STEPY WIZARD WITH VALIDATION====*/
$(function() {
    $('#stepy_form').stepy({
        backLabel: 'Anterior',
        nextLabel: 'Siguiente',
        errorImage: true,
        block: true,
        description: true,
        legend: false,
        titleClick: true,
        titleTarget: '#top_tabby',
        validate: true
    });
    $('#stepy_form').validate({
        errorPlacement: function(error, element) {
            $('#stepy_form div.stepy-error').append(error);
        },
        rules: {
            'original_ot': 'required',
            'description': 'required',
            'request_at': 'required',
            'status': 'required',
        },
        messages: {
            'original_ot': {
                required: 'Ot Original Requerido!'
            },
            'description': {
                required: 'Tarea Requerido!'
            },
            'request_at': {
                required: 'Ing. Telefonica Requerido!'
            },
            'status': {
                required: 'Estado Requerido!'
            }
        }
    });

    $('body').on('click','#aa',function(e){
        e.preventDefault();
        var form =$('#stepy_form').serializeObject();
        var url ="/admin/ots";
        $.post(url,form,function(result){
        });
    })

    $('body').on('click','#allowanceI',function(){
        var url ="/admin/allowance/listA";
        $.get(url,function(result){
            $('#tableShowAllowance').html(result);
            $('#otModalAllowance').modal();
        });
    })

    $('body').on('click','.showOT',function(){
        var id = $(this).data('id');
        var url = "/admin/ots/"+id;
        $.get(url,function(result){
            data = JSON.parse(result);
            $('#verOt').modal();
            $('.nameOt').html(data.ot.original_ot)

            console.log(data.ot);
            console.log(data.ot_detail[0]);
        });
    })
    $('body').on('click','.setAllowance',function(){
        var id =$(this).data('id');
        $('#allowanceI').val(id);
        $('#otModalAllowance').modal('hide');
    })

    $('.default-date-picker').datepicker({
        format: 'yyyy-mm-dd'
    });

    $('#country_name').autocomplete({
        source: function( request, response ) {
            $.ajax({
                url : '/admin/sites/nemonico',
                dataType: "json",
                data: {
                    name_startsWith: request.term
                },
                success: function( data ) {
                    response( $.map( data, function( item, i ) {
                        return {
                            label: data[i].nemonico,
                            value: data[i].id
                        }
                    }));
                }
            });
        },
        autoFocus: true,
        minLength: 0
    });

});
