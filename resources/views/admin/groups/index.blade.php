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
                                    Grupos
                                        <span class=" pull-right">
                                            <button class="btn btn-default masGroup"><i class="fa fa-plus "></i></button>
                                         </span>
                                </header>
                                <div class="panel-body">
                                    <div class="adv-table">
                                        <table  class="display table table-bordered table-striped" id="dynamic-table">
                                            <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Tipo</th>
                                                <th>Estado</th>
                                                <th>Acciones</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($groups as $g)
                                                <tr id="group{{$g->id}}" class="gradeX">
                                                    <td>{{ $g->name }}</td>
                                                    <td>{{ $g->type }}</td>
                                                    <td>{{ $g->status }}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-default editGroup" data-id="{{$g->id}}"><i class="glyphicon glyphicon-pencil"></i></button>
                                                        <button type="button" class="btn btn-danger deleteGroup" data-id="{{$g->id}}"><i class="glyphicon glyphicon-remove"></i></button>
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
    {!! Form::open (['route'=>['admin.groups.destroy', ':USER_ID'],'method'=>'DELETE', 'id'=>'deleteFormG']) !!}
    {!! Form::close() !!}

    @section('modales')
        @include('admin.groups.editar')
    @endsection


@endsection
