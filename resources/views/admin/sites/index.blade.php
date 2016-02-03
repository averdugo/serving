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
                                    Sitios
                                        <span class=" pull-right">
                                            <button class="btn btn-default masSite"><i class="fa fa-plus "></i></button>
                                         </span>
                                </header>
                                <div class="panel-body">
                                    <div class="adv-table">
                                        <table  class="display table table-bordered table-striped" >
                                            <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Nemonico</th>
                                                <th>Direccion</th>
                                                <th>Dueño</th>
                                                <th>Acciones</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($sites as $s)
                                                <tr id="site{{$s->id}}" class="gradeX">
                                                    <td>{{ $s->name }}</td>
                                                    <td>{{ $s->nemonico }}</td>
                                                    <td>{{ $s->address }}</td>
                                                    <td>{{ $s->owner_id }}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-default editSite" data-id="{{$s->id}}"><i class="glyphicon glyphicon-pencil"></i></button>
                                                        <button type="button" class="btn btn-danger deleteSite" data-id="{{$s->id}}"><i class="glyphicon glyphicon-remove"></i></button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        {!! $sites->render() !!}
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
    {!! Form::open (['route'=>['admin.sites.destroy', ':USER_ID'],'method'=>'DELETE', 'id'=>'deleteFormS']) !!}
    {!! Form::close() !!}

@section('modales')
    @include('admin.sites.editar')
@endsection


@endsection
