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
                    <div class="row">
                        <div class="col-sm-12">
                            <section class="panel">
                                <header class="panel-heading">
                                    OTs DT
                                        <span class="tools pull-right">
                                            <a href="/admin/ots/form/1" class="fa fa-plus"></a>

                                         </span>
                                </header>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td>N° Ot</td>
                                            <td>Tipo</td>
                                            <td>Tarea</td>
                                            <td>Region</td>
                                            <td>Fecha Solicitud</td>
                                            <td>Estado</td>
                                            <td>Ingeniero DT</td>
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
                                                <td>{{$ot->status}}</td>
                                                <td>{{$ot->ingdt_user_id}}</td>
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

@endsection