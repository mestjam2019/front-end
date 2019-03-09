@extends('layouts.default')

@section('title', 'Find easily and book an appointment')

@section('content')
    <main>
        <Filterspecialiste></Filterspecialiste>
        <!-- /filters -->

        <div class="container margin_60_35">
            <Specialiste></Specialiste>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>
    <!-- /main -->
@endsection
