@extends('layouts.layout')
@section('content')	

<section class="s_top_nav_cntr">
	<div class="container-fluid">
		@include('navigations.front')
	</div>
</section>

@include('pages.front.home.landing')

<section class="container">
	<div class="row">
		<div class="col-xs-12">
			home 00
		</div>
	</div>
</section>
<section class="container">
	<div class="row">
		<div class="col-xs-12">
			home 01
		</div>
	</div>
</section>
<section class="container">
	<div class="row">
		<div class="col-xs-12">
			home 02
		</div>
	</div>
</section>


@stop