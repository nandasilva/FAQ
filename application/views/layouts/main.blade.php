<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>F.A.Q</title>
		<meta name="viewport" content="width=device-width">
		<!-- CSS -->
		@section('styles')
		{{ Asset::styles() }}
		@yield_section
	</head>

	<body>

		<div class="container">
			@yield('container')
		</div>

		<!-- JS -->
		@section('scripts_footer')
		{{ Asset::scripts() }}
		@yield_section
	</body>
</html>