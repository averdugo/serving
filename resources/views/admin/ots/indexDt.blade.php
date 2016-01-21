@extends('layout')
@section('dCss')
    <link rel="stylesheet" type="text/css" href="/js/bootstrap-datepicker/css/datepicker-custom.css" />
    <link rel="stylesheet" type="text/css" href="/js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
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
                            <section class="panel">
                                <header class="panel-heading">
                                    OTs DT
                                    <form class="form-inline" action="/admin/ots/listA/1" method="get">
                                        <input type="hidden" id="type" value="{{$type}}">
                                        <div class="form-group">
                                            <div class="col-md-5" style="float: right;margin-top: -30px;">
                                                <div class="input-group input-large custom-date-range"  style="right: 70px;">
                                                    <span class="input-group-addon">Tipo</span>
                                                    <select name="type" id="typeGant" class="form-control" style="width: 100px">
                                                        <option value="1">Dt</option>
                                                        <option value="2">Asr</option>
                                                        <option value="3">Bch</option>
                                                    </select>
                                                    <span class="input-group-addon">Desde</span>
                                                    <input type="text" class="form-control dpd1" name="from" data-date-format="yyyy-mm-dd" value="{{$primerDia}}">
                                                    <span class="input-group-addon">Hasta</span>
                                                    <input type="text" class="form-control dpd2" name="to" data-date-format="yyyy-mm-dd" value="{{$ultimoDia}}">
                                                </div>
                                                <button type="submit" class="btn btn-success " style="float: right;margin-top: -34px;">Buscar</button>
                                            </div>
                                        </div>
                                    </form>
                                </header>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td>N° Ot</td>
                                            <td>Tipo</td>
                                            <td>Tarea</td>
                                            <td>Region</td>
                                            <td>Fecha Solicitud</td>
                                            <td>Grupo</td>
                                            <td>Estado</td>
                                            <td>Observacion</td>
                                            <td>Acciones</td>
                                        </tr>
                                    </thead>
                                    <tbody id="tablaListDtOts">
                                        @foreach($ots as $ot)
                                            <tr>
                                                <td>{{$ot->original_ot}}</td>
                                                <td>{{$ot->detail_type}}</td>
                                                <td>{{$ot->description}}</td>
                                                <td>{{$ot->region}}</td>
                                                <td>{{$ot->request_at}}</td>
                                                <td>{{$ot->group_id}}</td>
                                                <td>{{$ot->status}}</td>
                                                <td>{{$ot->observation}}</td>
                                                <td>
                                                    <button class="btn btn-default showOT" data-id="{{$ot->id}}"><i class="fa fa-eye"></i></button>
                                                    <button class="btn btn-default editOT" data-id="{{$ot->id}}"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-default editOT" data-id="{{$ot->id}}"><i class="fa fa-remove"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
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
            <script type="text/javascript">
            var type = $('#type').val();
            $("select option[value='"+type+"']").attr("selected","selected");
            </script>
        @endsection

@endsection
