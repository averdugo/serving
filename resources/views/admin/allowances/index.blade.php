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
                                    Viaticos
                                        <span class=" pull-right">

                                            <button class="btn btn-default masAllowance"><i class="fa fa-plus "></i></button>
                                         </span>
                                </header>
                                <div class="panel-body">
                                    <div class="adv-table">
                                        <table  class="display table table-bordered table-striped" id="dynamic-table">
                                            <thead>
                                                <tr>
                                                    <th>Region</th>
                                                    <th>Lugar</th>
                                                    <th>Valor</th>
                                                    <th>Fondo</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($allowances as $a)
                                                    <tr id="allowances{{$a->id}}" class="gradeX">
                                                        <td>{{ $a->region }}</td>
                                                        <td>{{ $a->place }}</td>
                                                        <td>{{ $a->value }}</td>
                                                        <td>{{ $a->fondo }}</td>
                                                        <td>
                                                            <button type="button" class="btn btn-default editAllowance" data-id="{{$a->id}}"><i class="glyphicon glyphicon-pencil"></i></button>
                                                            <button type="button" class="btn btn-danger deleteAllowance" data-id="{{$a->id}}"><i class="glyphicon glyphicon-remove"></i></button>
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
        {!! Form::open (['route'=>['admin.allowances.destroy', ':USER_ID'],'method'=>'DELETE', 'id'=>'deleteFormA']) !!}
        {!! Form::close() !!}

    @section('modales')
        @include('admin.allowances.editarAllowance')
    @endsection
    @section('JScontrollers')
        <script src="/js/JScontrollers/allowances.js"></script>
    @endsection

@endsection
