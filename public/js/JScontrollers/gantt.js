function getData(data, type){
    var url ="/admin/ots/data/"+type;
    $.get(url,data,function(result){
        var data    = JSON.parse(result);
        var from    = data.from.split('-');
        from        = from[2]+"/"+from[1]+"/"+from[0];
        var to      = data.to.split('-');
        to          = to[2]+"/"+to[1]+"/"+to[0];

        $('.dpd1').val(from)
        $('.dpd2').val(to)

        if(data.ots == ""){
            alert("No se han encontrado Ot's con los parametros enviados.")

        }

        var gnats = $.map(data.ots, function(a, i) {
            return {
                id          : data.ots[i].id,
                requester   : data.ots[i].requester_id,
                status      : data.ots[i].status,
                pp          : data.ots[i].description,
                name        : data.ots[i].original_ot,
                text        : data.ots[i].description,
                group       : data.ots[i].group_id,
                start_date  : data.ots[i].start_at,
                duration    : data.ots[i].duration,
                open        : true
            };
        });

        var demo_tasks = {
            "data":gnats
        };

        gantt.parse(demo_tasks);
    });
}

$(document).ready(function(){

    $('#typeGant').on('change', function() {
        type = $(this).val();
    });

    $('.searchDateGantt').click(function(e){
        e.preventDefault();

        var from    = $('.dpd1').val();
        var to      = $('.dpd2').val();
        from        = from.split('/');
        from        = from[2]+"-"+from[1]+"-"+from[0];
        to          = to.split('/');
        to          = to[2]+"-"+to[1]+"-"+to[0];

        var data    = {
            'from':from,
            'to':to
        }

        getData(data,type);
    })
})
