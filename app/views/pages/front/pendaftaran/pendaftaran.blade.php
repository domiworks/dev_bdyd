@extends('layouts.layout')
@section('content')	
<style>
	.datepicker-dropdown{
		margin-top: 75px;
	}
</style>

<section class="s_top_nav_cntr">
	<div class="container-fluid">
		@include('navigations.front')
	</div>
</section>

<section class="s_common_ctr" style="margin-top: 70px;">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">

				<h2>Pendaftaran</h2> 
				{{ Carbon\Carbon::now()->toDateString()  }}
				
				<div class="  text-center">
				{{ QrCode::size(151)->generate(Request::url()); }}
					<p>Scan me to return to the original page.</p>
				</div>
				<div class="panel panel-default">
					<div class="panel-body">

						<form class="form-horizontal">

							<div class="form-group">
							<label for="email" class="col-sm-3 control-label">Email</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="email" placeholder="Password">
								</div>
							</div>
							<div class="form-group">
							<label for="password" class="col-sm-3 control-label">Password</label>
								<div class="col-sm-5">
									<input type="password" class="form-control" id="password" placeholder="Password">
								</div>
							</div>
							<div class="form-group">
							<label for="retype_password" class="col-sm-3 control-label">Re-type Password</label>
								<div class="col-sm-5">
									<input type="retype_password" class="form-control" id="retype_password" placeholder="Re-type Password">
								</div>
							</div>
							<div class="form-group">
							<label for="nama_lengkap" class="col-sm-3 control-label">Nama Lengkap</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="nama_lengkap" placeholder="text">
								</div>
							</div>
							<div class="form-group">
							<label for="nama_panggilan" class="col-sm-3 control-label">Nama Panggilan</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="nama_panggilan" placeholder="text">
								</div>
							</div>
							<div class="form-group">
							<label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
								<div class="col-sm-5">
									<div class="radio" style="float: left;">
										<label><input type="radio" name="gender" id="jenis_kelamin" value="1">Pria</label>
									</div>
									<div class="radio" style="float: left; margin-left: 40px;">
										<label><input type="radio" name="gender" id="jenis_kelamin" value="0">Wanita</label>
									</div>
								</div>
							</div>
							<div class="form-group">
							<label for="tempat_lahir" class="col-sm-3 control-label">Tempat Lahir</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="tempat_lahir" placeholder="text">
								</div>
							</div>
							<div class="form-group">
							<label for="tanggal_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
								<div class="col-sm-5">
									<input type="hidden" id="tanggal_lahir_check" value="{{ Carbon\Carbon::now()->toDateString() }}">
									<input type="text" class="form-control datepicker" id="tanggal_lahir" placeholder="text">
								</div>
								<script>
									$('.datepicker').datepicker({
										autoclose: true,
										 format: 'yyyy-mm-dd'
									});
								</script>
							</div>
							<div class="form-group">
							<label for="alamat_tinggal" class="col-sm-3 control-label">Alamat Tinggal</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="alamat_tinggal" placeholder="text">
								</div>
							</div>
							<div class="form-group">
							<label for="kota_tinggal" class="col-sm-3 control-label">Kota Tinggal</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="kota_tinggal" placeholder="text">
								</div>
							</div>
							<div class="form-group">
							<label for="no_handphone" class="col-sm-3 control-label">No. Handphone</label>
								<div class="col-sm-5">
									<input type="number" class="form-control" id="no_handphone" placeholder="text">
								</div>
							</div>
							<div class="form-group">
							<label for="pekerjaan" class="col-sm-3 control-label">Pekerjaan</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="pekerjaan" placeholder="text">
								</div>
							</div>
							<div class="form-group">
							<label for="kegiatan_gereja" class="col-sm-3 control-label">Kegiatan Gereja</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="kegiatan_gereja" placeholder="text">
								</div>
							</div>
							<div class="form-group">
							<label for="hobi_bakat" class="col-sm-3 control-label">Hobi Bakat</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="hobi_bakat" placeholder="text">
								</div>
							</div>
							<div class="form-group">
							<label for="paroki" class="col-sm-3 control-label">Paroki</label>
								<div class="col-sm-5"> 
									<select class="form-control" id="paroki" selected> 
										<option value="0">-- pilih paroki --</option>
										@foreach($all_paroki as $paroki) 
										<option value="{{$paroki->nama_paroki}}" data-dekanat="{{$paroki->nama_dekanat}}">{{$paroki->nama_paroki}}</option>
										@endforeach
										<input type="hidden" id="paroki_val" value="">
									</select>
								</div>
							</div>
							<div class="form-group">
							<label for="dekanat" class="col-sm-3 control-label">Dekanat</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="dekanat" placeholder="--" readonly>
								</div>
							</div>

							<div class="form-group">
								<label for="jumlah_hari" class="col-sm-3 control-label">Jumlah Hari</label>
								<div class="col-sm-5">
									<div class="radio" style="float: left;">
										<label><input type="radio" name="jumlah_hari" id="jumlah_hari" value="1">1</label>
									</div>
									<div class="radio" style="float: left; margin-left: 40px;">
										<label><input type="radio" name="jumlah_hari" id="jumlah_hari" value="2">2</label>
									</div>
								</div>
							</div>
					<!-- <div class="form-group">
						<label for="inputtext3" class="col-sm-3 control-label">birdtype</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputtext3" placeholder="text">
						</div>
					</div>
					<div class="form-group">
						<label for="inputtext3" class="col-sm-3 control-label">status aktivasi</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputtext3" placeholder="text">
						</div>
					</div>
					<div class="form-group">
						<label for="inputtext3" class="col-sm-3 control-label">status peserta</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputtext3" placeholder="text">
						</div>
					</div>
					<div class="form-group">
						<label for="inputtext3" class="col-sm-3 control-label">status bayar</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputtext3" placeholder="text">
						</div>
					</div> --> 
					<div class="form-group">
						<label for="kesediaan_informasi" class="col-sm-3 control-label">Kesediaan Informasi</label>
						<div class="col-sm-5">
							<div class="radio" style="float: left;">
							<label><input type="radio" name="kesediaan_informasi" id="kesediaan_informasi" value="1" checked="">Ya</label>
							</div>
							<div class="radio" style="float: left; margin-left: 40px;">
								<label><input type="radio" name="kesediaan_informasi" id="kesediaan_informasi" value="0">Tidak</label>
							</div>
						</div>
					</div>

					<!-- <div class="form-group">
						<label for="inputtext3" class="col-sm-3 control-label">days count</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputtext3" placeholder="text">
						</div>
					</div> -->



					<!-- 

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<div class="checkbox">
								<label>
									<input type="checkbox"> Remember me
								</label>
							</div>
						</div>
					</div> -->
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-7">
							<button type="button" class="btn btn-primary btn-raised" id="f_send_pendaftaran">Sign Up</button>
						</div>
					</div> 
				</form>
					</div>
				</div>




				
				

			</div>
		</div>
	</div>
</section>
<script>
$('body').on('change', 'select#paroki', function() { 
    $( "select#paroki option:selected" ).each(function() { 
      $('#paroki_val').val($( this ).val());
      $('#dekanat').val($( this ).data('dekanat'));
    });
    

  });

function parseDate(str)
{
	var s = str.split(" "),
	d = s[0].split("-"),
	t = s[1].replace(/:/g, "");
	return d[2] + d[1] + d[0];
}

$('body').on('click', '#f_send_pendaftaran', function() { 
	// alert($('#tanggal_lahir').val() - $('#tanggal_lahir_check').val() );


	if( parseDate("17-05-1989 12:15:00") > parseDate("15-05-1989 14:00:00") )
	{
		alert("larger");
	}
	else
	{
		alert("smaller");  
	}
});

// $('body').on('click', '#f_send_pendaftaran', function() { 
// 	$nama_lengkap 		= $('#nama_lengkap').val();  
// 	$nama_panggilan 	= $('#nama_panggilan').val();
// 	$jenis_kelamin 		= $('#jenis_kelamin:checked').val();
// 	$tempat_lahir 		= $('#tempat_lahir').val();
// 	$tanggal_lahir 		= $('#tanggal_lahir').val();
// 	$alamat_tinggal 	= $('#alamat_tinggal').val();
// 	$kota_tinggal 		= $('#kota_tinggal').val();
// 	$no_handphone 		= $('#no_handphone').val();
// 	$pekerjaan 			= $('#pekerjaan').val();
// 	$kegiatan_gereja 	= $('#kegiatan_gereja').val();
// 	$hobi_bakat 		= $('#hobi_bakat').val();
// 	$dekanat 			= $('#dekanat').val();
// 	$paroki 			= $('#paroki_val').val();
// 	$jumlah_hari	= $('#jumlah_hari:checked').val();
// 	$kesediaan_informasi	= $('#kesediaan_informasi:checked').val();


// 	$email		= $('#email').val();
// 	$password 	= $('#password').val();

// 	// $birdtype			= '1';
// 	// $status_aktivasi	= '0';
// 	// $status_peserta		= '0';
// 	// $status_bayar		= '0';
// 	// $days_count			= '0';


// 	var formData = new FormData(); 
// 	formData.append('nama_lengkap', $nama_lengkap);
// 	formData.append('nama_panggilan', $nama_panggilan);
// 	formData.append('jenis_kelamin', $jenis_kelamin);
// 	formData.append('tempat_lahir', $tempat_lahir);
// 	formData.append('tanggal_lahir', $tanggal_lahir);
// 	formData.append('alamat_tinggal', $alamat_tinggal);
// 	formData.append('kota_tinggal', $kota_tinggal);
// 	formData.append('no_handphone', $no_handphone);
// 	formData.append('pekerjaan', $pekerjaan);
// 	formData.append('kegiatan_gereja', $kegiatan_gereja);
// 	formData.append('hobi_bakat', $hobi_bakat);
// 	formData.append('dekanat', $dekanat);
// 	formData.append('paroki', $paroki);
// 	formData.append('kesediaan_informasi', $kesediaan_informasi); 
// 	formData.append('jumlah_hari', $jumlah_hari); 
// 	formData.append('email', $email);
// 	formData.append('password', $password);

// 	// formData.append('birdtype', '1');
// 	// formData.append('status_aktivasi','0');
// 	// formData.append('status_peserta', '0');
// 	// formData.append('status_bayar', '0');
// 	// formData.append('days_count', '0');

// 	$.ajax({
// 		type: 'POST',
// 		url: "{{URL('post_pendaftaran')}}",
// 		data: formData, 
// 		processData: false,
// 		contentType: false,				
// 		success: function(response) { 
// 			alert(response); 
// 		},
// 		error: function(xhr, textStatus, errorThrown) {
// 			alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
// 			alert("responseText: "+xhr.responseText);
// 		}
// 	});
// });
</script>


@stop