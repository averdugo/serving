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
                                    Autos
                                        <span class=" pull-right">
                                            <button class="btn btn-default masCar"><i class="fa fa-plus "></i></button>
                                         </span>
                                </header>
                                <div class="panel-body">
                                    <div class="adv-table">
                                        <table  class="display table table-bordered table-striped" id="dynamic-table">
                                            <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Placa</th>
                                                <th>Estado</th>
                                                <th>Acciones</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($cars as $c)
                                                <tr id="car{{$c->id}}" class="gradeX">
                                                    <td>{{ $c->name }}</td>
                                                    <td>{{ $c->plate }}</td>
                                                    <td>{{ $c->status }}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-default editCar" data-id="{{$c->id}}"><i class="glyphicon glyphicon-pencil"></i></button>
                                                        <button type="button" class="btn btn-danger deleteCar" data-id="{{$c->id}}"><i class="glyphicon glyphicon-remove"></i></button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                </div>
                <!--body wrapper end-->
            </div>
            <!-- main content end-->
        </section>
        {!! Form::open (['route'=>['admin.cars.destroy', ':USER_ID'],'method'=>'DELETE', 'id'=>'deleteFormC']) !!}
        {!! Form::close() !!}

    @section('modales')
        @include('admin.cars.editarCar')
    @endsection


@endsection
