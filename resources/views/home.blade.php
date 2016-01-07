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
                <style>
                    .link{
                        cursor: pointer;
                    }
                    .link:hover{
                        opacity:0.8;
                    }
                </style>
                <div class="row " style="    padding: 80px;">
                    <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading" style="background-color: #353f4f;">
                                <h2 class="text-center">Otś</h2>

                            </div>
                            <div class="panel-body">
                                <ul class="nav nav-pills nav-stacked custom-nav custom-nav2">
                                    <li class="menu-list"><a href="/home"><i class="fa fa-plus"></i> <span>Crear</span></a>
                                        <ul class="sub-menu-list">
                                           <li><a href="/admin/ots/form/1">DT</a></li>
                                           <li><a href="/admin/ots/form/2">ASR</a></li>
                                           <li><a href="/admin/ots/form/3">BCH</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-list"><a href="/home"><i class="fa fa-list"></i> <span>Listar</span></a>
                                        <ul class="sub-menu-list">
                                            <li><a href="/admin/ots/listA/1">DT</a></li>
                                            <li><a href="/admin/ots/listA/2">ASR</a></li>
                                            <li><a href="/admin/ots/listA/3">BCH</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-list"><a href="/home"><i class="fa fa-bar-chart"></i> <span>Gantt</span></a>
                                        <ul class="sub-menu-list">
                                            <li><a href="/admin/ots/gantt/1">DT</a></li>
                                            <li><a href="/admin/ots/gantt/2">ASR</a></li>
                                            <li><a href="/admin/ots/gantt/3">BCH</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h2 class="text-center">Indicadores Kpi</h2>

                            </div>
                            <div class="panel-body">
                                <ul class="nav nav-pills nav-stacked custom-nav custom-nav2">
                                    <li class="menu-list"><a href="/home"><i class="fa fa-adjust"></i> <span>DT</span></a>
                                        <ul class="sub-menu-list">
                                            <li><a href="">Indicador 1</a></li>
                                            <li><a href="">Indicador 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-list"><a href="/home"><i class="fa fa-anchor"></i> <span>ASR</span></a>
                                        <ul class="sub-menu-list">
                                            <li><a href="">Indicador 1</a></li>
                                            <li><a href="">Indicador 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-list"><a href="/home"><i class="fa fa-archive"></i> <span>BCH</span></a>
                                        <ul class="sub-menu-list">
                                            <li><a href="">Indicador 1</a></li>
                                            <li><a href="">Indicador 2</a></li>
                                        </ul>
                                    </li>
                                </ul>
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
