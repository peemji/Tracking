<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
	<title>Laravel 5 - @yield('page_title')</title>
	{!! Html::style('bootstrap/css/bootstrap.min.css') !!}
	{!! Html::style('bootstrap/css/simple-sidebar.css') !!}
	<style>
		.navbar {
			margin-bottom: 0; 
		}
		#sidebar-wrapper {
			background: #f8f8f8;
			border-style: solid;
			border-color: #e7e7e7;
			border-width: 1px;
			border-top: none;
		}
		#sidebar-wrapper {
    		width: 200px;
		}
		#wrapper {
    		padding-left: 180px;
		}
		.sidebar-nav li a:hover {
			color: #aaa19b;
			background:#e7e7e7;
		}
	</style>
</head>
<body>
	{{-- start navbar --}}
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Brand</a>
	    </div>

	  </div>
	</nav>
	{{-- end navbar --}}

{{-- start sidebar --}}
 <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Mikrotik Manage
                    </a>
                </li>
                <li>
                    <a href="{{ url('map') }}">Maps</a>
                </li>
                <li>
                    <a href="{{ url('mikrotiks') }}">Test</a>
                </li>
                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        @yield('content')

    </div>
    <!-- /#wrapper sidebar -->



	{{-- <div class="container">
		@yield('content')
	</div> --}}

	{!! Html::script('js/jquery.min.js') !!}
	{!! Html::script('bootstrap/js/bootstrap.min.js') !!}
</body>
</html>