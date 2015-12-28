@extends('layout')

@section('body-class')
	<body class="login-body">
@stop

@section('content')

	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
		<form class="form-signin" role="form" method="POST" action="{{ url('/auth/login') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-signin-heading text-center">
				<h1 class="sign-title">Ingreso</h1>
				<img src="../images/logo.gif" alt="" style="width: 100%;"/>
			</div>
			<div class="login-wrap">
				<input type="email" class="form-control" placeholder="E-mail" name="email" value="{{ old('email') }}">
				<br>
				<input type="password" class="form-control" placeholder="Password" name="password">
				<br>
				<input type="checkbox" name="remember"> Remember Me
				<button class="btn btn-lg btn-login btn-block" type="submit">
					<i class="fa fa-check"></i>
				</button>
			</div>
		</form>

@endsection
