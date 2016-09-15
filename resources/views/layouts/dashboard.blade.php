<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Laravel 5 - @yield('page_title')</title>
	<!-- #CSS Links -->
	<!-- Basic Styles -->
	{!! Html::style('bootstrap/css/bootstrap.min.css') !!}
	{!! Html::style('bootstrap/css/font-awesome.min.css') !!}
	<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
	{!! Html::style('bootstrap/css/smartadmin-production-plugins.min.css') !!}
	{!! Html::style('bootstrap/css/smartadmin-production.min.css') !!}
	{!! Html::style('bootstrap/css/smartadmin-skins.min.css') !!}

	<!-- SmartAdmin RTL Support -->
	{!! Html::style('bootstrap/css/smartadmin-rtl.min.css') !!}

	<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
	{!! Html::style('bootstrap/css/demo.min.css') !!}

	<!-- #FAVICONS -->
	<link rel="shortcut icon" href="{{ asset('img/favicon/favicon.ico') }}" >
	{!! Html::style('bootstrap/css/smartadmin-rtl.min.css') !!}

	<!-- #GOOGLE FONT -->
	{!! Html::style('http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700') !!}

	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

</head>
<body class="">
	
		@yield('content')


	<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
	<script data-pace-options='{ "restartOnRequestAfter": false }' src="js/plugin/pace/pace.min.js"></script>

	{{-- {!! Html::script('js/jquery.min.js') !!} --}}
	{!! Html::script('https://code.jquery.com/jquery-2.2.4.js') !!}

	<!-- IMPORTANT: APP CONFIG -->
	{!! Html::script('js/app.config.js') !!}

	<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
	{!! Html::script('js/plugin/jquery-touch/jquery.ui.touch-punch.min.js') !!}

	<!-- BOOTSTRAP JS -->
	{!! Html::script('js/bootstrap/bootstrap.min.js') !!}

	<!-- CUSTOM NOTIFICATION -->
	{!! Html::script('js/notification/SmartNotification.min.js') !!}

	<!-- JARVIS WIDGETS -->
	{!! Html::script('js/smartwidgets/jarvis.widget.min.js') !!}

	<!-- EASY PIE CHARTS -->
	{!! Html::script('js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js') !!}

	<!-- SPARKLINES -->
	{!! Html::script('js/plugin/sparkline/jquery.sparkline.min.js') !!}

	<!-- JQUERY VALIDATE -->
	{!! Html::script('js/plugin/jquery-validate/jquery.validate.min.js') !!}

	<!-- JQUERY MASKED INPUT -->
	{!! Html::script('js/plugin/masked-input/jquery.maskedinput.min.js') !!}

	<!-- JQUERY SELECT2 INPUT -->
	{!! Html::script('js/plugin/select2/select2.min.js') !!}

	<!-- JQUERY UI + Bootstrap Slider -->
	{!! Html::script('js/plugin/bootstrap-slider/bootstrap-slider.min.js') !!}

	<!-- browser msie issue fix -->
	{!! Html::script('js/plugin/msie-fix/jquery.mb.browser.min.js') !!}

	<!-- FastClick: For mobile devices -->
	{!! Html::script('js/plugin/fastclick/fastclick.min.js') !!}

		<!--[if IE 8]>

		<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

		<![endif]-->

	<!-- Demo purpose only -->
	{!! Html::script('js/demo.min.js') !!}

	<!-- MAIN APP JS FILE -->
	{!! Html::script('js/app.min.js') !!}

	<script type="text/javascript">

			$(document).ready(function() {
			 	
				/* DO NOT REMOVE : GLOBAL FUNCTIONS!
				 *
				 * pageSetUp(); WILL CALL THE FOLLOWING FUNCTIONS
				 *
				 * // activate tooltips
				 * $("[rel=tooltip]").tooltip();
				 *
				 * // activate popovers
				 * $("[rel=popover]").popover();
				 *
				 * // activate popovers with hover states
				 * $("[rel=popover-hover]").popover({ trigger: "hover" });
				 *
				 * // activate inline charts
				 * runAllCharts();
				 *
				 * // setup widgets
				 * setup_widgets_desktop();
				 *
				 * // run form elements
				 * runAllForms();
				 *
				 ********************************
				 *
				 * pageSetUp() is needed whenever you load a page.
				 * It initializes and checks for all basic elements of the page
				 * and makes rendering easier.
				 *
				 */
				
				 pageSetUp();
				 
				/*
				 * ALL PAGE RELATED SCRIPTS CAN GO BELOW HERE
				 * eg alert("my home function");
				 * 
				 * var pagefunction = function() {
				 *   ...
				 * }
				 * loadScript("js/plugin/_PLUGIN_NAME_.js", pagefunction);
				 * 
				 * TO LOAD A SCRIPT:
				 * var pagefunction = function (){ 
				 *  loadScript(".../plugin.js", run_after_loaded);	
				 * }
				 * 
				 * OR
				 * 
				 * loadScript(".../plugin.js", run_after_loaded);
				 */
				
			})
		
		</script>

</body>
</html>