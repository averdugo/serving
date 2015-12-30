<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>Serving App</title>

  <!--dynamic table-->
  <link href="/js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="/js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="/js/data-tables/DT_bootstrap.css" />

  <!--common-->
  <link href="{{ url('/css/style.css') }}" rel="stylesheet">
  <link href="{{ url('/css/style-responsive.css') }}" rel="stylesheet">




  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="{{ url('/js/html5shiv.js') }}"></script>
  <script src="{{ url('/js/respond.min.js') }}"></script>
  <![endif]-->
</head>
@yield('body-class')

@yield('content')


<!-- Placed js at the end of the document so the pages load faster -->
<script src="{{ url('/js/jquery-1.10.2.min.js') }}"></script>
<script src="{{ url('/js/jquery-ui-1.9.2.custom.min.js') }}"></script>
<script src="{{ url('/js/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ url('/js/bootstrap.min.js') }}"></script>
<script src="{{ url('/js/modernizr.min.js') }}"></script>
<script src="{{ url('/js/jquery.nicescroll.js') }}"></script>

<!--dynamic table-->
<script type="text/javascript" language="javascript" src="/js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="/js/data-tables/DT_bootstrap.js"></script>
<!--dynamic table initialization -->
<script src="/js/dynamic_table_init.js"></script>


<!--JSControllers-->
<script src="/js/JScontrollers/users.js"></script>
<script src="/js/JScontrollers/allowances.js"></script>
<script src="/js/JScontrollers/cars.js"></script>
<script src="/js/JScontrollers/groups.js"></script>
<script src="/js/JScontrollers/indicators.js"></script>

<!--common scripts for all pages-->
<script src="{{ url('/js/scripts.js') }}"></script>
<script src="{{ url('/js/main.js') }}"></script>
<script src="/js/jquery.serialize-object.min.js"></script>

@yield('modales')

@include('admin.users.crearUsuario')
@include('admin.allowances.crearAllowance')
@include('admin.cars.crearCar')
@include('admin.groups.crear')
@include('admin.indicators.crear')
</body>
</html>