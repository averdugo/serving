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
                                    Solicitantes
                                        <span class=" pull-right">
                                            <button class="btn btn-default masRequester"><i class="fa fa-plus "></i></button>
                                         </span>
                                </header>
                                <div class="panel-body">
                                    <div class="adv-table">
                                        <table  class="display table table-bordered table-striped" id="dynamic-table">
                                            <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>E-mail</th>
                                                <th>Telefono</th>
                                                <th>Acciones</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($requesters as $requester)
                                                <tr id="requester{{$requester->id}}" class="gradeX">
                                                    <td>{{ $requester->name }}</td>
                                                    <td>{{ $requester->email }}</td>
                                                    <td>{{ $requester->phone }}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-default editRequester" data-id="{{$requester->id}}"><i class="glyphicon glyphicon-pencil"></i></button>
                                                        <button type="button" class="btn btn-danger deleteRequester" data-id="{{$requester->id}}"><i class="glyphicon glyphicon-remove"></i></button>
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
    {!! Form::open (['route'=>['admin.requesters.destroy', ':USER_ID'],'method'=>'DELETE', 'id'=>'deleteFormRequester']) !!}
    {!! Form::close() !!}

@section('modales')
    @include('admin.requesters.editar')
@endsection


@endsection
