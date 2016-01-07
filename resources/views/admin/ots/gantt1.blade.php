@extends('layout')
@section('dCss')
    <script src="/codebase/dhtmlxgantt.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://export.dhtmlx.com/gantt/api.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" href="/codebase/dhtmlxgantt.css" type="text/css" media="screen" title="no title" charset="utf-8">

@stop

@section('body-class')
    <body class="sticky-header left-side-collapsed">
@stop

    @section('content')
        <section>
            <!-- left side start-->
            @include('side-menu')
                    <!-- left side end-->
            <!-- main content start-->
            <div class="main-content" >
                <!-- header section start-->
                @include('header')
                        <!-- header section end-->
                <!--body wrapper start-->
                <div class="wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <section class="panel" style="height: 500px;">
                                <header class="panel-heading">
                                    Gantt DT
                                </header>
                                <div class="" style="height: 500px;">
                                    <input value="Exportar a PDF" type="button" onclick='gantt.exportToPDF()' class="btn btn-success" style='margin:20px;'>
                                    <input value="Exportar a PNG" type="button" onclick='gantt.exportToPNG()' class="btn btn-primary" style='margin:20px;'>
                                    <input value="Exportar a Excel" type="button" onclick='gantt.exportToExcel()' class="btn btn-warning" style='margin:20px;'>
                                    <div id="gantt_here" style='width:100%; height:400px'></div>
                                    <script type="text/javascript">
                                        gantt.locale={date:{month_full:["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],month_short:["Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic"],day_full:["Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"],day_short:["Dom","Lun","Mar","Mié","Jue","Vie","Sáb"]},labels:{dhx_cal_today_button:"Hoy",day_tab:"Día",week_tab:"Semana",month_tab:"Mes",new_event:"Nuevo evento",icon_save:"Guardar",icon_cancel:"Cancelar",
                                            icon_details:"Detalles",icon_edit:"Editar",icon_delete:"Eliminar",confirm_closing:"",confirm_deleting:"El evento se borrará definitivamente, ¿continuar?",section_description:"Descripción",section_time:"Período",section_type:"Tipo",column_text:"Tarea",column_start_date:"Inicio",column_duration:"Duración",column_add:"",link:"Enlace",confirm_link_deleting:"será borrada",link_start:" (inicio)",link_end:" (fin)",type_task:"Tarea",type_project:"Proyecto",type_milestone:"Hito",minutes:"Minutos",hours:"Horas",
                                            days:"Días",weeks:"Semanas",months:"Meses",years:"Años"}};

                                        gantt.templates.task_text = function(s,e,task){
                                            return task.group;
                                        }
                                        gantt.config.columns[0].template = function(obj){
                                            return "OT " + obj.name + " -";
                                        }
                                        gantt.init("gantt_here");

                                    </script>
                                </div>

                            </section>
                        </div>
                    </div>

                </div>
                <!--body wrapper end-->
            </div>
            <!-- main content end-->
        </section>
    @section('script')
        <script>
            $(document).ready(function(){
                function getData(){
                    var url ="/admin/ots/data/1";

                    $.get(url,function(result){

                        var gnats = $.map(result, function(a, i) {
                            return {id: result[i].id,name:result[i].original_ot, text: result[i].description, group: result[i].group_id, start_date: result[i].start_at, duration:"1",open:true};
                        });

                        console.log(gnats);
                        var demo_tasks = {
                            "data":gnats
                        };
                        console.log(demo_tasks);
                       gantt.parse(demo_tasks);


                    });
                }

                getData();
            });
        </script>
    @endsection
    @endsection