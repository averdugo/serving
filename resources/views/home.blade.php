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
                        <div class="panel red-bg">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <i class="fa fa-money"></i>
                                    </div>
                                    <div class="col-xs-8">
                                        <span class="state-title"> Dollar Profit Today </span>
                                        <h4>$ 23,232</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel blue-bg">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <i class="fa fa-tag"></i>
                                    </div>
                                    <div class="col-xs-8">
                                        <span class="state-title">  Copy Sold Today  </span>
                                        <h4>2,980</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel green-bg">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <i class="fa fa-gavel"></i>
                                    </div>
                                    <div class="col-xs-8">
                                        <span class="state-title">  New Order  </span>
                                        <h4>5980</h4>
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
                                        <i class="fa fa-eye"></i>
                                    </div>
                                    <div class="col-xs-8">
                                        <span class="state-title">  Unique Visitors  </span>
                                        <h4>10,000</h4>
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
