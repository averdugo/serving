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

  <!--icheck-->
  <link href="{{ url('/js/iCheck/skins/minimal/minimal.css') }}" rel="stylesheet">
  <link href="{{ url('/js/iCheck/skins/square/square.css') }}" rel="stylesheet">
  <link href="{{ url('/js/iCheck/skins/square/red.css') }}" rel="stylesheet">
  <link href="{{ url('/js/iCheck/skins/square/blue.css') }}" rel="stylesheet">

  <!--dashboard calendar-->
  <link href="{{ url('/css/clndr.css') }}" rel="stylesheet">


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

<!--easy pie chart-->
<script src="{{ url('/js/easypiechart/jquery.easypiechart.js') }}"></script>
<script src="{{ url('/js/easypiechart/easypiechart-init.js') }}"></script>

<!--Sparkline Chart-->
<script src="{{ url('/js/sparkline/jquery.sparkline.js') }}"></script>
<script src="{{ url('/js/sparkline/sparkline-init.js') }}"></script>

<!--icheck -->
<script src="{{ url('/js/iCheck/jquery.icheck.js') }}"></script>
<script src="{{ url('/js/icheck-init.js') }}"></script>

<!-- jQuery Flot Chart-->
<script src="{{ url('/js/flot-chart/jquery.flot.js') }}"></script>
<script src="{{ url('/js/flot-chart/jquery.flot.tooltip.js') }}"></script>
<script src="{{ url('/js/flot-chart/jquery.flot.resize.js') }}"></script>
<script src="{{ url('/js/flot-chart/jquery.flot.pie.resize.js') }}"></script>
<script src="{{ url('/js/flot-chart/jquery.flot.selection.js') }}"></script>
<script src="{{ url('/js/flot-chart/jquery.flot.stack.js') }}"></script>
<script src="{{ url('/js/flot-chart/jquery.flot.time.js') }}"></script>
<script src="{{ url('/js/main-chart.js') }}"></script>

<!--common scripts for all pages-->
<script src="{{ url('/js/scripts.js') }}"></script>


</body>
</html>