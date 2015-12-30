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
                            Usuarios <button class="btn btn-default pull-right masUser" data-set="2">+</button>
                        </h3>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#">Inicio</a>
                            </li>
                            <li class="active">Usuarios</li>
                        </ul>
                    </div>
                    <!-- page heading end-->
                    <ul class="directory-list">
                        <li><a href="#">a</a></li>
                        <li><a href="#">b</a></li>
                        <li><a href="#">c</a></li>
                        <li><a href="#">d</a></li>
                        <li><a href="#">e</a></li>
                        <li><a href="#">f</a></li>
                        <li><a href="#">g</a></li>
                        <li><a href="#">h</a></li>
                        <li><a href="#">i</a></li>
                        <li><a href="#">j</a></li>
                        <li><a href="#">k</a></li>
                        <li><a href="#">l</a></li>
                        <li><a href="#">m</a></li>
                        <li><a href="#">n</a></li>
                        <li><a href="#">o</a></li>
                        <li><a href="#">p</a></li>
                        <li><a href="#">q</a></li>
                        <li><a href="#">r</a></li>
                        <li><a href="#">s</a></li>
                        <li><a href="#">t</a></li>
                        <li><a href="#">u</a></li>
                        <li><a href="#">v</a></li>
                        <li><a href="#">w</a></li>
                        <li><a href="#">x</a></li>
                        <li><a href="#">y</a></li>
                        <li><a href="#">z</a></li>
                    </ul>
                    <div class="directory-info-row">
                        <div class="row">
                            @foreach($users as $user)
                                <div id="user{{$user->id}}" class="col-md-6 col-sm-6">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <h4>
                                                {{ $user->name }}
                                                <span class="text-muted small">
                                                    {{ $user->user_type_id }}
                                                </span>
                                                <span class="pull-right">
                                                    <button class="btn btn-default editUser" data-id="{{$user->id}}" ><i class="glyphicon glyphicon-pencil"></i></button>
                                                    <button class="btn btn-default deleteUser" data-id="{{$user->id}}" ><i class="glyphicon glyphicon-remove"></i></button>
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
    @include('modales/editarUsuario')
@endsection
@section('JScontrollers')
    <script src="/js/JScontrollers/users.js"></script>
@endsection