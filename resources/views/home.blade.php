@extends('layout')

@section('body-class')
	<body class="sticky-header">
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

                <div class="row states-info" style="    padding: 80px;">
                    <div class="col-md-6">
                        <div class="panel green-bg" style="cursor: pointer">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <i class="fa fa-list-alt"></i>
                                    </div>
                                    <div class="col-xs-8">
                                        <h2>OTS</h2>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel red-bg" style="cursor: pointer">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <div class="col-xs-8">
                                        <h2>Gantt's</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel blue-bg" >
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <i class="fa fa-pie-chart"></i>
                                    </div>
                                    <div class="col-xs-8">
                                        <h2>Indicadores KPI</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel yellow-bg">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <i class="fa fa-briefcase"></i>
                                    </div>
                                    <div class="col-xs-8">
                                        <h2>Documentos</h2>

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

@endsection
