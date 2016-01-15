@extends('layout')
@section('dCss')
    <link href="/css/jquery.stepy.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/js/bootstrap-datepicker/css/datepicker-custom.css" />
@stop
@section('body-class')
    <body class="sticky-header">
    @stop

    @section('content')
        <style>
            .ui-menu{
                background: #65CEA7!important;
                color: #fff;
            }
        </style>
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
                        <div class="col-md-12">
                            <h4 class="fw-title">Formulario Creacion Asr</h4>
                            <div class="box-widget">
                                <div class="widget-head clearfix">
                                    <div id="top_tabby" class="block-tabby pull-left">
                                    </div>
                                </div>
                                <div class="widget-container">
                                    <div class="widget-block">
                                        <div class="widget-content box-padding">
                                            {!! Form::open (['route'=>['admin.ots.store'],'method'=>'POST', 'id'=>'stepy_form','class'=>'form-horizontal left-align form-well']) !!}
                                            <input type="hidden" name="type" value="2">
                                            <fieldset title="Paso 1">
                                                <legend>Detalles Generales</legend>
                                                <div class="form-group">
                                                    <label class="col-md-2 col-sm-2 control-label">Numero Ot Original</label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input class="form-control" name="original_ot" type="text"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 col-sm-2 control-label">Clasificacion</label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <select name="detail_type" id="" class="form-control" >
                                                            @include('partials.typeAsrSelect')
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 col-sm-2 control-label">Nemonico</label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input type="text" name="nemonico" id="country_name" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 col-sm-2 control-label">DPR</label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input type="number" name="dpr" class="form-control" >
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 col-sm-2 control-label">Region</label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <select name="region" id="" class="form-control">
                                                            @include('partials.regionselect')
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 col-sm-2 control-label">Fecha Solicitud</label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input name="request_at" class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value="" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 col-sm-2 control-label">Ingeniero Telefonico</label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <select name="requester_id" id="" class="form-control" >
                                                            <option value="0">Seleccione</option>
                                                            @foreach ($requesters as $r)
                                                                <option value="{{$r->id}}">{{$r->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 col-sm-2 control-label">Estado</label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <select name="status" id="" class="form-control" >
                                                            @include('partials.statusAsrSelect')
                                                        </select>
                                                    </div>
                                                </div>

                                            </fieldset>
                                            <fieldset title="Paso 2">
                                                <legend>Detalles Parciales</legend>
                                                <div class="form-group">
                                                    <label class="col-md-2 col-sm-2 control-label">Seguimiento</label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <select name="ingdt_user_id" id="" class="form-control">
                                                            <option value="0">Seleccione</option>
                                                            @foreach ($uAsrs as $ud)
                                                                <option value="{{$ud->id}}">{{$ud->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 col-sm-2 control-label">Grupo</label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <select name="group_id" id="" class="form-control">
                                                            <option value="0">Seleccione</option>
                                                            @foreach ($gAsrs as $gd)
                                                                <option value="{{$gd->id}}">{{$gd->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 col-sm-2 control-label">Fecha Inicio</label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input name="start_at" class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value="" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 col-sm-2 control-label">Fecha Termino</label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input name="finish_at" class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value="" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 col-sm-2 control-label">Viaticos</label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input id="allowanceI" type="text" name="allowance_id" readonly class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 col-sm-2 control-label">Auto a Usar</label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <select name="car_id" id="" class="form-control">
                                                            <option value="0">Seleccione</option>
                                                            @foreach ($cars as $c)
                                                                <option value="{{$c->id}}">{{$c->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 col-sm-2 control-label">Chofer</label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <select name="driver_user_id" id="" class="form-control">
                                                            <option value="0">Seleccione</option>
                                                            @foreach ($drivers as $d)
                                                                <option value="{{$d->id}}">{{$d->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 col-sm-2 control-label">Observaciones</label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <textarea name="observation" id="" cols="30" rows="4" class="form-control" ></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 col-sm-2 control-label">Materiales</label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <textarea name="materials" id="" cols="30" rows="4" class="form-control" ></textarea>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset title="Paso 3">
                                                <legend>Reporte</legend>
                                                <div class="form-group">
                                                    <label class="col-md-2 col-sm-2 control-label">Responsable Informe</label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <select name="user_id" id="" class="form-control">
                                                            <option value="0">Seleccione</option>
                                                            @foreach ($uAsrs as $ud)
                                                                <option value="{{$ud->id}}">{{$ud->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 col-sm-2 control-label">Fecha Entrega Informe</label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input name="report_at" class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value="" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 col-sm-2 control-label">Estado</label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <select name="reportStatus" id="" class="form-control" >
                                                            @include('partials.statusReportSelect')
                                                        </select>
                                                    </div>
                                                </div>

                                            </fieldset>
                                            <button id="otSubmit" type="submit" class="finish btn btn-info btn-extend">Guardar</button>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--body wrapper end-->
            </div>
            <!-- main content end-->
        </section>
    @section('js-Extra')
        <script src="/js/jquery.validate.min.js"></script>
        <script src="/js/jquery.stepy.js"></script>
        <script type="text/javascript" src="/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="/js/JScontrollers/ots.js"></script>
        <script src="/js/moment.js"></script>
        <script src="/js/autocomplete/jquery-ui.min.js"></script>
@endsection
@section('modales')
    @include('modals.otModalAllowance')
@endsection

@endsection