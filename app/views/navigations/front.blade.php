<div class="row s_top_nav">
	<div class="g-xs-12">

		<ul style="margin-bottom: 0px;">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle s_about_us_link" data-toggle="dropdown">about us
          <!-- <span class="s_in_au_bg"></span> -->
        </a>
				<ul class="dropdown-menu s_about_us_submenu" role="menu" style="min-width: 125px !important; left: -3px;">
					<li>
						<a href="{{URL::to('about_us')}}" class="s_au_child_link" style="margin: 0px; width: 125px; padding: 0px; line-height: 50px;">Who We Are?</a>
					</li>
					<li>
						<a href="{{URL::to('our_services')}}" class="s_au_child_link" style="margin: 0px; width: 125px; padding: 0px; line-height: 50px;">Our Service</a>
					</li>

				</ul>
			</li>
			<li>
				<a href="{{URL::to('showcase')}}">showcase</a>
			</li>
			<li>
				<a href="{{URL::to('home')}}" class="s_home_link">alexindo perkasa
        <span class="s_interior_sign">
          INTERIOR
        </span>
        </a>
			</li>
			<li>
				<a href="{{URL::to('material')}}">material</a>
			</li>
			<li>
				<a href="{{URL::to('contact_us')}}">contact us </a>
			</li>
		</ul>
	</div>
</div>
<script>
 // $('.dropdown').on('show.bs.dropdown', function(e){
 //    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
 //  });

(function ($, window, delay) {
  // http://jsfiddle.net/AndreasPizsa/NzvKC/
  var theTimer = 0;
  var theElement = null;
    var theLastPosition = {x:0,y:0};
  $('[data-toggle]')
    .closest('li')
    .on('mouseenter', function (inEvent) {
    if (theElement) theElement.removeClass('open');
    window.clearTimeout(theTimer);
    theElement = $(this);

    theTimer = window.setTimeout(function () {
      theElement.addClass('open');
    }, delay);
  })
    .on('mousemove', function (inEvent) {
        if(Math.abs(theLastPosition.x - inEvent.ScreenX) > 4 || 
           Math.abs(theLastPosition.y - inEvent.ScreenY) > 4)
        {
            theLastPosition.x = inEvent.ScreenX;
            theLastPosition.y = inEvent.ScreenY;
            return;
        }
        
    if (theElement.hasClass('open')) return;
    window.clearTimeout(theTimer);
    theTimer = window.setTimeout(function () {
      theElement.addClass('open');
    }, delay);
  })
    .on('mouseleave', function (inEvent) {
    window.clearTimeout(theTimer);
    theElement = $(this);
    theTimer = window.setTimeout(function () {
      theElement.removeClass('open');
    }, delay);
  });
})(jQuery, window, 100); // 200 is the delay in milliseconds
</script>