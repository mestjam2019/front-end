<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Find easily a doctor and book online an appointment">
	<meta name="author" content="Ansonika">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>JAM - @yield('title')</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="/assets/img/logo.png" type="image/x-icon">
	<!-- <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png"> -->

	<!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="/assets/css/style.css" rel="stylesheet">
	<link href="/assets/css/menu.css" rel="stylesheet">
	<link href="/assets/css/vendors.css" rel="stylesheet">
    <link href="/assets/css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
    <!-- SPECIFIC CSS -->
    <link href="/assets/css/date_picker.css" rel="stylesheet">
	<!-- YOUR CUSTOM CSS -->
	<link href="/assets/css/custom.css" rel="stylesheet">

</head>

<body>

	<div id="preloader" class="Fixed">
		<div data-loader="circle-side"></div>
	</div>
	<!-- /Preload-->

	<div id="page">
        <header class="header_sticky">
            <a href="#menu" class="btn_mobile">
                <div class="hamburger hamburger--spin" id="hamburger">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>
            <!-- /btn_mobile-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div id="logo_home">
                            <img src="/assets/img/logo.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-9 col-6">
                        <ul id="top_access">
                            <li><a href="{{ url('/login') }}"><i class="pe-7s-user"></i></a></li>
                            <!-- <li><a href="register-doctor.html"><i class="pe-7s-add-user"></i></a></li> -->
                        </ul>
                        <nav id="menu" class="main-menu">
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ url('/portfolio') }}">Portfolio</a>
                                </li>
                                <li>
                                    <a href="{{ url('consultation') }}">Consultation</a>
                                </li>
                                <li>
                                    <a href="Webinar.html">Webinar</a>
                                </li>
                                <li>
                                    <a href="{{ url('/trainning/badges') }}">Trainning</a>
                                </li>
                                <li>
                                    <a href="{{ url('/contact') }}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- /main-menu -->
                    </div>
                </div>
            </div>
            <!-- /container -->
        </header>
        <!-- /header -->

        @yield('content')

    </div>

    <footer>
		<div class="container margin_60_35">
			<hr>
			<div class="row">
				<div class="col-md-8">
					<ul id="additional_links">
						<li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<div id="copy">© 2019 JAM. All rights reserved</div>
				</div>
			</div>
		</div>
    </footer>
    <!-- /footer -->


	<div id="toTop"></div>
	<!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
	<script src="/assets/js/jquery-2.2.4.min.js"></script>
	<script src="/assets/js/common_scripts.min.js"></script>
    <script src="/assets/js/functions.js"></script>
    <!-- SPECIFIC SCRIPTS -->
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCoz993id_Qq7AcfaoVzviC6swgvQRixuQ"></script>
	<script src="/assets/js/markerclusterer.js"></script>
    <script src="/assets/js/map_listing.js"></script>
    <script src="/assets/js/infobox.js"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- SPECIFIC SCRIPTS -->
    <script src="/assets/js/bootstrap-datepicker.js"></script>
	<script>
        $.fn.datepicker.defaults.format = "mm/dd/yyyy";
		$('#calendar').datepicker({
            todayHighlight: true,
            showOnFocus: true,
			daysOfWeekDisabled: [0],
			weekStart: 1,
			format: "yyyy-mm-dd",
			datesDisabled: ["2017/10/20", "2017/11/21", "2017/12/21", "2018/01/21", "2018/02/21", "2018/03/21"],
        });
        
		$('#calendar').datepicker().on('changeDate', function(e) {
            let nb = $('#calendar').datepicker('getDate');
            nb =  nb.getFullYear() + '/' + (nb.getMonth() + 1) + '/' + nb.getDate();
            alert(nb);
            $('input[type=hidden][id=my_hidden_input]').val(nb);
        });
	</script>

</body>


</html>
