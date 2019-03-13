@extends('layouts.default')

@section('title', 'Badges')

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
                                    <li><a href="#">Trainning</a></li>
                                    <li>Badges</li>
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

        <div class="container margin_60_35">
			<div class="main_title">
				<h1>Start<strong> learning</strong> !</h1>
				<p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel.</p>
			</div>
			<div class="row">

				<div class="col-lg-4">
					<div class="box_badges">
						<div id="badge_level_1"><img src="{{ url('/assets/img/badges/badge_1.svg')}}" alt="" width="100" height="100"></div>
						<h3>level 1</h3>
						<p>Lorem ipsum dolor sit amet, pro id zril molestie, cum ne omittam quaestio. Pri delectus conclusionemque te.</p>
						<ul>
							<li><i class="icon-eye-7"></i>54 Views</li>
							<li><i class="icon-users-1"></i>24 Patients</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="box_badges">
						<div id="badge_level_2" class="disabled_badge"><img src="{{ url('/assets/img/badges/badge_2.svg') }}" alt="" width="100" height="100"><i class="icon-lock"></i></div>
						<h3>level 2</h3>
						<p>Lorem ipsum dolor sit amet, pro id zril molestie, cum ne omittam quaestio. Pri delectus conclusionemque te.</p>
						<ul>
							<li><i class="icon-eye-7"></i>54 Views</li>
							<li><i class="icon-users-1"></i>24 Patients</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="box_badges">
						<div id="badge_level_3" class="disabled_badge"><img src="{{ url('/assets/img/badges/badge_3.svg')}}" alt="" width="100" height="100"><i class="icon-lock"></i></div>
						<h3>level 3</h3>
						<p>Lorem ipsum dolor sit amet, pro id zril molestie, cum ne omittam quaestio. Pri delectus conclusionemque te.</p>
						<ul>
							<li><i class="icon-eye-7"></i>54 Views</li>
							<li><i class="icon-users-1"></i>24 Patients</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="box_badges">
						<div id="badge_level_4" class="disabled_badge"><img src="{{ url('/assets/img/badges/badge_4.svg')}}" alt="" width="100" height="100"><i class="icon-lock"></i></div>
						<h3>level 4</h3>
						<p>Lorem ipsum dolor sit amet, pro id zril molestie, cum ne omittam quaestio. Pri delectus conclusionemque te.</p>
						<ul>
							<li><i class="icon-eye-7"></i>54 Views</li>
							<li><i class="icon-users-1"></i>24 Patients</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="box_badges">
						<div id="badge_level_5" class="disabled_badge"><img src="{{ url('/assets/img/badges/badge_5.svg') }}" alt="" width="100" height="100"><i class="icon-lock"></i></div>
						<h3>level 5</h3>
						<p>Lorem ipsum dolor sit amet, pro id zril molestie, cum ne omittam quaestio. Pri delectus conclusionemque te.</p>
						<ul>
							<li><i class="icon-eye-7"></i>54 Views</li>
							<li><i class="icon-users-1"></i>24 Patients</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="box_badges">
						<div id="badge_level_6" class="disabled_badge"><img src="{{ url('/assets/img/badges/badge_6.svg') }}" alt="" width="100" height="100"><i class="icon-lock"></i></div>
						<h3>level 6</h3>
						<p>Lorem ipsum dolor sit amet, pro id zril molestie, cum ne omittam quaestio. Pri delectus conclusionemque te.</p>
						<ul>
							<li><i class="icon-eye-7"></i>54 Views</li>
							<li><i class="icon-users-1"></i>24 Patients</li>
						</ul>
					</div>
				</div>

			</div>
			<!--/row-->
        </div>
        <!-- /container -->

	</main>
    <!-- /main -->
@endsection