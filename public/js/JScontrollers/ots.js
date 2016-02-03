function renderDt(a,b,c){

    $('td[data-detailType]').text(b.detail_type);
    $('td[data-description]').text(a.description);
    $('td[data-requestAt]').text(a.request_at);
    $('td[data-region]').text(a.region);
    $('td[data-ingTel]').text(a.requester_id);
    $('td[data-status]').text(a.status);
    $('td[data-startAt]').text(a.start_at);
    $('td[data-finishAt]').text(a.finish_at);
    $('td[data-ingDt]').text(b.ingdt_user_id);
    $('td[data-group]').text(a.group_id);
    $('td[data-allowances]').text(b.allowance_id);
    $('td[data-driver]').text(a.driver_user_id);
    $('td[data-car]').text(a.car_id);
    $('td[data-reporter]').text(c.user_id);
    $('td[data-reportAt]').text(c.report_at);
    $('td[data-reportStatus]').text(c.status);
    $('td[data-observation]').text(c.observation);
    $('#verOt').modal();
    $('.nameOt').html(a.original_ot)

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
            var data = JSON.parse(result);
            if(data.ot.type == 1){
                renderDt(data.ot,data.ot_detail[0],data.report[0]);
            }else if(data.ot.type == 2){
                renderAsr(data.ot,data.ot_detail[0],data.report[0]);
            }else if(data.ot.type == 3){
                renderDt(data.ot,data.ot_detail[0],data.report[0]);
            }
        });
    })
    $('body').on('click','.setAllowance',function(){
        var id =$(this).data('id');
        $('#allowanceI').val(id);
        $('#otModalAllowance').modal('hide');
    })
    $('body').on('click','.deleteOT',function(){
        var id =$(this).data('id');

        var form = $('#deleteFormO').serializeObject();
        var url ="/admin/ots/"+id;

        $.post(url, form, function(result){
            $("#ots"+result).remove();
        });
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
