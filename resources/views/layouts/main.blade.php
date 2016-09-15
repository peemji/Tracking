<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Laravel 5 - @yield('page_title')</title>
	{!! Html::style('bootstrap/css/bootstrap.min.css') !!}
</head>
<body>
	<div class="container">
		@yield('content')
	</div>
	{!! Html::script('js/jquery.min.js') !!}
	{!! Html::script('bootstrap/js/bootstrap.min.js') !!}
</body>
</html>