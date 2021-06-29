<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Car Rental Website</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('template/assets/css/main.css') }}" />
		<noscript><link rel="stylesheet" href="{{ asset('template/assets/css/noscript.css') }}" /></noscript>
        @yield('css')
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
                @include('layouts.module.header')

                <!-- Menu -->
                @include('layouts.module.menu')

				<!-- Banner -->
				@yield('banner')

				<!-- Main -->
				@yield('main_content')

				<!-- inquiry -->
				@yield('content')

				<!-- Footer -->
				@include('layouts.module.footer')

			</div>

		<!-- Scripts -->
        @yield('js')
		<script src="{{ asset('template/assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('template/assets/js/jquery.scrolly.min.js') }}"></script>
		<script src="{{ asset('template/assets/js/jquery.scrollex.min.js') }}"></script>
		<script src="{{ asset('template/assets/js/browser.min.js') }}"></script>
		<script src="{{ asset('template/assets/js/breakpoints.min.js') }}"></script>
		<script src="{{ asset('template/assets/js/util.js') }}"></script>
		<script src="{{ asset('template/assets/js/main.js') }}"></script>

	</body>
</html>
