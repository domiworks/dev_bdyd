@extends('layouts.layout')
@section('content')	
<style>
.btm_mark {
	/*display: none;*/
}
</style>

<section class="s_outer_ring">
	<ul id="cbp-bislideshow" class="cbp-bislideshow">
		<li style="background-size: cover; background-position: center; background-image: url({{asset('assets/slideshow_bg/1.jpg')}});">
			<!--<img src="{{asset('assets/slideshow_bg/1.jpg')}}" alt="image01"/>-->
		</li>
		<li style="background-size: cover; background-position: center; background-image: url({{asset('assets/slideshow_bg/2.jpg')}});">
			<!--<img src="{{asset('assets/slideshow_bg/2.jpg')}}" alt="image02"/>-->
		</li>
		<li style="background-size: cover; background-position: center; background-image: url({{asset('assets/slideshow_bg/3.jpg')}});">
			<!--<img src="{{asset('assets/slideshow_bg/3.jpg')}}" alt="image03"/>-->
		</li> 
	</ul> 
	<section class="s_inner_ring">
		<div class="container-fluid"> 
			<div class="row s_top_nav">
				<div class="g-xs-12">

					<ul style="margin-bottom: 0px;">  
						<li>
							<a href="" style="margin-right: 0px;">alexindo perkasa</a>
							<span class="s_interior_sign">
								INTERIOR
							</span>
						</li> 
					</ul>
				</div>
			</div> 

			<div class="row ">
				<div class="g-xs-6 g-xs-push-3 s_content_unav">
					<div class="s_tbl">
						<div class="s_cell">

							<h2 class="s_home_catchprase">
								Website<br/> Underconstruction.
							</h2>
							<span style="height: 5px; width: 50px; display: block; background-color: #242424;">
							</span>

						</div>
					</div>
				</div>
			</div>
		</div>
 


	</section> 
</section>
<!-- Preloader -->
<script src="{{ asset('assets/js/slideshowbg/jquery.imagesloaded.min.js') }}"></script>
<script src="{{ asset('assets/js/slideshowbg/cbpBGSlideshow.js') }}"></script>
<script type="text/javascript"> 

$(function() {
	cbpBGSlideshow.init();
});
	//<![CDATA[
		$(window).load(function() { // makes sure the whole site is loaded
			$(".f_preoload_diag").animate({"opacity": "0"},1000, 'easeInOutExpo');
			setTimeout(function(){ $(".f_preoload_diag").addClass('hidden'); }, 1000);
		})
	//]]>
	</script> 	
	@stop