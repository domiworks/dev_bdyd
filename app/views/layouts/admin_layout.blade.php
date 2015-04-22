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
	<body onload="startTime()">
		<!-- <div class="s_orenji_header">
	</div> -->
	<div class="s_top_header">
		<div class="container-fluid">
			<div class="s_header_admin row">
				<div class="g-xs-8">
					<img src="{{asset('assets/img/logo_admin.png')}}"   style="float: left; margin-right:20px; margin-top: 10px; padding-bottom: 10px; pointer-events: none"/>

					<h1 style="font-weight: 300;">Admin Control Panel</h1>
				</div>
				<div class="g-xs-4" style="line-height: 83px; text-align: right;">
					log in as {{Auth::user()->username}} | <a href="{{url('admin/logout')}}">log out</a>
				</div>
			</div>
		</div>
	</div>

	@include('navigations.admin')
	<div class="container-fluid f_mini_info_container" style="position: fixed; color: #f00; z-index: 999; width: 100%; text-align: center; display: none;">
		<div class="g-xs-12">
			<span class="f_mini_info btn">
				<span class="glyphicon glyphicon-warning-sign"></span>
				<span id="f_mini_info_content">Mini Information</span> 
				<span class="glyphicon glyphicon-warning-sign"></span>
			</span>
		</div>
	</div>

	<div id="yield_content" class="s_content_admin">
		@yield('content')
	</div>

	<script type="text/javascript">
	function updateSize(){
				// Get the dimensions of the viewport
				var width = $(window).width();
				var height = $(window).height();
				var iHeight = $(window).height() - 270;
				
				$('.s_set_height_window').height(iHeight);
				//$('.irashai').width(width);
				//$('.willkommen').width($('.irashai').width()/2);
				//$('.willkommen').height(height);
				//$('body').css('overflow-x','hidden');//.css('overflow-x','visible');
				//$('body').mousewheel(function(event, delta) {
				//	this.scrollLeft -= (delta * 50);
				//	event.preventDefault();
				//});
};
$(document).ready(updateSize);
$(window).resize(updateSize);
</script>
<script>
var timeout    = 500;
var closetimer = 0;
var ddmenuitem = 0;

function jsddm_open()
{  jsddm_canceltimer();
	jsddm_close();
	ddmenuitem = $(this).find('ul').css('visibility', 'visible');
}

function jsddm_close()
{  if(ddmenuitem) ddmenuitem.css('visibility', 'hidden');
}

function jsddm_timer()
{  closetimer = window.setTimeout(jsddm_close, timeout);
}

function jsddm_canceltimer()
{  if(closetimer)
	{  window.clearTimeout(closetimer);
		closetimer = null;
	}
}

$(document).ready(function()
{  
	$('.s_top_nav > li').bind('mouseover', jsddm_open)
	$('.s_top_nav > li').bind('mouseout',  jsddm_timer)
});

document.onclick = jsddm_close;


//Resetter input[type=text] untuk seluruh modal
$('.modal').on('hidden.bs.modal', function (e) {
  //alert('modal closed');
  //-- fungsi untuk me-reset sluruh input[type=text] pada modal --
  $(this).find('input[type=text]').val('');
  $(this).find('textarea').val('');
})

/*Non AJAX JS*/
$('.modal').on('hidden.bs.modal', function (e) {
	$('input[type="text"]').val("");
	$('input[type="password"]').val("");
	$('.f_anti_modal').addClass('hidden'); 
	$('.f_spinner_load').css('opacity','0'); 
});

$( "#f_get_retype_password" ).keyup(function() {
	if( $(this).val() != $("#f_get_new_password").val() ){
		$('.f_notmatch_retype_password').removeClass('hidden'); 
	}else{
		$('.f_notmatch_retype_password').addClass('hidden'); 
	}
});
 
function fadingInfo(info, warning) {  
	$('#f_mini_info_content').html(info);
	$('.f_mini_info').removeClass('btn-danger').removeClass('btn-success').removeClass('btn-warning').removeClass('btn-info').removeClass('btn-default');
	$('.f_mini_info').addClass(warning);
	$('.f_mini_info_container').css('display','block');
	$('.f_mini_info_container').delay(1000).fadeOut(2000);
}; 

</script>
</body>
</html>