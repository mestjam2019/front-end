@extends('layouts.default')

@section('title', 'Detail doctor')

@section('content')
    <main>
        <div id="results">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="breadcrumb">
                            <div class="container">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">specialistes</a></li>
                                    <li>detail</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /results -->

		<div class="container margin_60">
			<div class="row">
				<aside class="col-xl-3 col-lg-4" id="sidebar">
					<div class="box_profile">
						<figure>
							<img src="{{ url('/assets/img/doctor_listing_2.jpg') }}" alt="" class="img-fluid">
						</figure>
						<small>Primary care - Internist</small>
						<h1>DR. Julia Jhones</h1>
						<span class="rating">
							<i class="icon_star voted"></i>
							<i class="icon_star voted"></i>
							<i class="icon_star voted"></i>
							<i class="icon_star voted"></i>
							<i class="icon_star"></i>
							<small>(145)</small>
							<a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ url('img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
						</span>
						<ul class="contacts">
							<li><h6>Address</h6>859 60th, Brooklyn, NY, 11220</li>
							<li><h6>Phone</h6><a href="tel://000434323342">+00043 4323342</a></li>
						</ul>
						<div class="text-center"><a href="https://www.google.com/maps" class="btn_1 outline" target="_blank"><i class="icon_pin"></i> View on map</a></div>
					</div>
				</aside>
				<!-- /asdide -->

				<Booking></Booking>
				<!-- /col -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
    <!-- /main -->

@endsection
