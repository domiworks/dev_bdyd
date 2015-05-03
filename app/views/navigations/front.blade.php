<div class="row s_top_nav">
	<div class="col-xs-12"> 
		<a href="">
			home -> image
		</a>

		<ul class="s_first_level_menu">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">BDYD 2015 
				</a>
				<ul class="dropdown-menu" role="menu" style="margin-top: -5px;">
					<li>
						<a href="" class="" style="">Logo dan Tema</a>
					</li>
					<li>
						<a href="" class="" style="">Venue</a>
					</li>
					<li>
						<a href="" class="" style="">Pre-event</a>
					</li>
					<li>
						<a href="" class="" style="">Jadwal</a>
					</li>
					<li>
						<a href="" class="" style="">Panitia</a>
					</li>
					<li>
						<a href="" class="" style="">Doa BDYD 2015</a>
					</li> 
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">About BDYD 
				</a>
				<ul class="dropdown-menu" role="menu" style="margin-top: -5px;">
					<li>
						<a href="" class="" style="">Sejarah BDYD</a>
					</li>
					<li>
						<a href="" class="" style="">Tujuan BDYD</a>
					</li>
					<li>
						<a href="" class="" style="">Theme Song BDYD</a>
					</li> 
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Past BDYD 
				</a>
				<ul class="dropdown-menu" role="menu" style="margin-top: -5px;">
					<li>
						<a href="" class="" style="">BDYD 2011</a>
					</li>
					<li>
						<a href="" class="" style="">BDYD 2013</a>
					</li> 
				</ul>
			</li>
			<li>
				<a href="">Sponsor dan Donatur</a>
			</li>
			<li>
				<a href="">Gallery</a>
			</li>
			<li>
				<a href="">Pendaftaran</a>
			</li>
		</ul>
	</div>
</div>
<script>
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