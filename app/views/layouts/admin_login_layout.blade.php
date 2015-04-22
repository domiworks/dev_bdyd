<!DOCTYPE html>
<html lang="en">
<head>
	@include('includes.admin_head_html')
	<script>

	function startTime() {
		var m_names = new Array("Januari", "Februari", "Maret", 
			"April", "Mei", "Juni", "Juli", "Agustus", "September", 
			"Oktober", "November", "Desember");

		var today=new Date();
		var mo=today.getMonth();
		var da=today.getDate();
		var y=today.getFullYear();
		var h=today.getHours();
		var m=today.getMinutes();
		var s=today.getSeconds();
		m = checkTime(m);
		s = checkTime(s);
		document.getElementById('f_clock').innerHTML = da+" "+m_names[mo]+" "+y+" - "+h+":"+m+":"+s;
		var t = setTimeout(function(){startTime()},500);
	}

	function checkTime(i) {
		    if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
		    return i;
		}
		</script>
		<style>
		body {
			font-weight: 400;
			font-size: 15px;
		}
		</style>
	</head>
	<body>
		<!-- <div class="s_orenji_header">
	</div> -->
	<div class="s_top_header">
		<div class="container-fluid">
			<div class="s_header_admin row">  
				<div class="g-lg-8">
					<img src="{{asset('assets/img/logo_admin.png')}}"   style="float: left; margin-right:20px; margin-top: 10px; padding-bottom: 10px; pointer-events: none"/>

					<h1 style="font-weight: 300;">Admin Control Panel</h1>
				</div>
				<div class="g-lg-4" style="line-height: 69px; text-align: right;">
					<span class="pull-right" id="f_clock" style="margin-right: 10px; line-height: 84px; "></span>
				</div>
			</div>
		</div>
	</div>


	<div id="yield_content" class="s_content_admin">
		@yield('content')
	</div>

	<script type="text/javascript">
	function updateSize(){
		var width = $(window).width();
		var height = $(window).height();
		var iHeight = $(window).height() - 270;

		$('.s_set_height_window').height(iHeight);
	};
	$(document).ready(startTime);
	
	$(document).ready(updateSize);
	$(window).resize(updateSize);
	</script>
</body>
</html>