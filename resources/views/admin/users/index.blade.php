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
                    <!-- page heading start-->
                    <div class="page-heading">
                        <h3>
                            Usuarios
                                <button class="btn btn-default pull-right masUser" data-set="2">+</button>
                        </h3>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#">Inicio</a>
                            </li>
                            <li class="active">Usuarios</li>
                        </ul>
                    </div>

                    <!-- page heading end-->
                    <form class="form-inline">
                       <div class="form-group" style="float: right;    margin-right: 15px;">
                           <input type="text" class="form-control busquedaInput" placeholder="Nombre">
                           <button class="btn btn-default buscarUsuario"><i class="glyphicon glyphicon-search"></i></button>
                        </div>

                    </form>
                    <ul class="directory-list" >


                    </ul>
                    <div class="directory-info-row">
                        <div class="row">
                            @foreach($users as $user)
                                <div id="user{{$user->id}}" class="col-md-6 col-sm-6">
                                    <div id="userList" class="panel">
                                        <div class="panel-body">
                                            <h4>
                                                {{ $user->name }} /
                                                <span class="text-muted small">
                                                    {{ $user->user_type_id }}
                                                </span>
                                                <span class="pull-right">
                                                    <button class="btn btn-default editUser" data-id="{{$user->id}}" ><i class="glyphicon glyphicon-pencil"></i></button>
                                                    <button class="btn btn-danger deleteUser" data-id="{{$user->id}}" ><i class="glyphicon glyphicon-remove"></i></button>
                                                </span>
                                            </h4>
                                            <div class="media">
                                                <div class="media-body">
                                                    <address>
                                                        <strong>{{$user->address}}</strong><br>
                                                        <a href="mailto:{{$user->email}}">{{$user->email}}</a><br>
                                                        <p>{{$user->group_id}}</p>
                                                        <abbr title="Phone">T:</abbr><a href="tel:{{$user->phone}}">{{$user->phone}}</a>
                                                    </address>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {!! $users->render() !!}
                </div>
                <!--body wrapper end-->
            </div>
            <!-- main content end-->
        </section>
        {!! Form::open (['route'=>['admin.users.destroy', ':USER_ID'],'method'=>'DELETE', 'id'=>'deleteForm']) !!}
        {!! Form::close() !!}
@endsection
@section('modales')
    @include('admin.users.editarUsuario')
@endsection
