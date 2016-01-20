@extends('layout')
@section('dCss')
    <link href="/css/jquery.stepy.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/js/bootstrap-datepicker/css/datepicker-custom.css" />
    <link rel="stylesheet" type="text/css" href="/js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
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
                <style>
                    .custom-date-range .input-group-addon{
                        border: none;
                    }
                </style>
                <div class="wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <section class="panel" style="height: 500px;">
                                <header class="panel-heading">
                                    Gantt
                                    <form class="form-inline">
                                        <input type="hidden" id="gantType" value="{{$type}}">
                                        <div class="form-group">
                                            <div class="col-md-5" style="float: right;margin-top: -30px;">
                                                <div class="input-group input-large custom-date-range"  style="right: 70px;">
                                                    <span class="input-group-addon">Tipo</span>
                                                    <select name="" id="typeGant" class="form-control" style="width: 100px">
                                                        <option value="1">Dt</option>
                                                        <option value="2">Asr</option>
                                                        <option value="3">Bch</option>
                                                    </select>
                                                    <span class="input-group-addon">Desde</span>
                                                    <input type="text" class="form-control dpd1" name="from" data-date-format="dd/mm/yyyy">
                                                    <span class="input-group-addon">Hasta</span>
                                                    <input type="text" class="form-control dpd2" name="to" data-date-format="dd/mm/yyyy">
                                                </div>
                                                <button class="btn btn-success searchDateGantt" style="float: right;margin-top: -34px;">Buscar</button>
                                            </div>
                                        </div>
                                    </form>
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

                                            return "OT " + obj.name + " - " + obj.requester + " - " + obj.tarea + " - " +obj.status;
                                        }

                                        gantt.config.columns =  [
                                            {name:"name",       label:"Ot",  width:'70', tree:true },
                                            {name:"requester",  label:"Solicitante",  width:'100', tree:true },
                                            {name:"pp",  label:"Tarea",  width:'150', tree:true },
                                            {name:"status",  label:"Estado",  width:'100', tree:true },
                                            {name:"start_date", label:"Inicio", width:150 },

                                        ];

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
    @section('js-Extra')
        <script type="text/javascript" src="/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="/js/bootstrap-daterangepicker/moment.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="/js/pickerrange.js"></script>
        <script src="/js/JScontrollers/gantt.js"></script>
    @endsection
    @section('script')
        <script>
            $(document).ready(function(){
                var type = $('#gantType').val();
                $("select option[value='"+type+"']").attr("selected","selected");
                getData(0,type);
            });
        </script>
    @endsection
    @endsection