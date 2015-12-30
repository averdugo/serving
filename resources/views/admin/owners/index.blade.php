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
                                    Dueños de Sitios
                                        <span class=" pull-right">
                                            <button class="btn btn-default masOwner"><i class="fa fa-plus "></i></button>
                                         </span>
                                </header>
                                <div class="panel-body">
                                    <div class="adv-table">
                                        <table  class="display table table-bordered table-striped" id="dynamic-table">
                                            <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Contacto</th>
                                                <th>Telefono</th>
                                                <th>Acciones</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($owners as $o)
                                                <tr id="owner{{$o->id}}" class="gradeX">
                                                    <td>{{ $o->name }}</td>
                                                    <td>{{ $o->contact }}</td>
                                                    <td>{{ $o->phone }}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-default editOwner" data-id="{{$o->id}}"><i class="glyphicon glyphicon-pencil"></i></button>
                                                        <button type="button" class="btn btn-danger deleteOwner" data-id="{{$o->id}}"><i class="glyphicon glyphicon-remove"></i></button>
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
    {!! Form::open (['route'=>['admin.owners.destroy', ':USER_ID'],'method'=>'DELETE', 'id'=>'deleteFormO']) !!}
    {!! Form::close() !!}

@section('modales')
    @include('admin.owners.editar')
@endsection


@endsection
