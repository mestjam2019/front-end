@extends('layouts.default')

@section('title', 'Confirm booking')

@section('content')
    <main>
		<div class="container margin_120">
			<div class="row justify-content-center">
				<div class="col-lg-8">
          <div class="box_general_3 booking">
    						<form>
    							<div class="title">
    								<h3>Your booking</h3>
    							</div>
    							<div class="summary">
    								<ul>
    									<li>Date: <strong class="float-right">{{$data->date_booking}}</strong></li>
    									<li>Time: <strong class="float-right">{{$data->time}}</strong></li>
    									<li>Dr. Name: <strong class="float-right">Dr. julia Jhones</strong></li>
    								</ul>
    							</div>
    							<!-- <ul class="treatments checkout clearfix">
    								<li>
    									Back Pain visit <strong class="float-right">$55</strong>
    								</li>
    								<li>
    									Cardiovascular screen <strong class="float-right">$55</strong>
    								</li>
    								<li class="total">
    									Total <strong class="float-right">$110</strong>
    								</li>
    							</ul> -->
    							<hr>

    						</form>
    					</div>
    					<!-- /box_general -->
    				</aside>
    				<!-- /asdide -->

				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!-- /main -->
@endsection
