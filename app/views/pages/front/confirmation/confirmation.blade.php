@extends('layouts.layout')
@section('content')	


<section class="s_top_nav_cntr">
	<div class="container-fluid">
		@include('navigations.front')
	</div>
</section>

<section class="s_common_ctr" style="margin-top: 70px;">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
 

				
				<h2>Konfirmasi</h2>  
				<form class="form-horizontal">


					pembayan group/single
					kode pendaftaran
					cara pembayaran (transfer/tunai via teller/atm) 
					nama bank pengirim
					nama rekening pengirim
					ammount
					tanngal pembayaran
					capthca
					[button] 

					<div class="form-group">
						<label for="email" class="col-sm-3 control-label">Pembayan Group/Single</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="email" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-sm-3 control-label">Kode Pendaftaran</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="password" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="nama_lengkap" class="col-sm-3 control-label">Cara Pembayaran</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="nama_lengkap" placeholder="text">
						</div>
					</div>
					<div class="form-group">
						<label for="nama_panggilan" class="col-sm-3 control-label">Nama Bank Pengirim</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="nama_panggilan" placeholder="text">
						</div>
					</div>
					<div class="form-group">
						<label for="nama_panggilan" class="col-sm-3 control-label">Nama Rekening Pengirim</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="nama_panggilan" placeholder="text">
						</div>
					</div>
					<div class="form-group">
						<label for="nama_panggilan" class="col-sm-3 control-label">Ammount</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="nama_panggilan" placeholder="text">
						</div>
					</div> 
					<div class="form-group">
						<label for="nama_panggilan" class="col-sm-3 control-label">Tanngal Pembayaran</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="nama_panggilan" placeholder="text">
						</div>
					</div>


				</form>

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
  

$('body').on('click', '#f_send_pendaftaran', function() { 
	// $nama_lengkap 		= $('#nama_lengkap').val();  
	// $nama_panggilan 	= $('#nama_panggilan').val();
	// $jenis_kelamin 		= $('#jenis_kelamin').val();
	// $tempat_lahir 		= $('#tempat_lahir').val();
	// $tanggal_lahir 		= $('#tanggal_lahir').val();
	// $alamat_tinggal 	= $('#alamat_tinggal').val();
	// $kota_tinggal 		= $('#kota_tinggal').val();
	// $no_handphone 		= $('#no_handphone').val();
	// $pekerjaan 			= $('#pekerjaan').val();
	// $kegiatan_gereja 	= $('#kegiatan_gereja').val();
	// $hobi_bakat 		= $('#hobi_bakat').val();
	// $dekanat 			= $('#dekanat').val();
	// $paroki 			= $('#paroki_val').val();
	// $jumlah_hari	= $('#jumlah_hari').val();
	// $kesediaan_informasi	= $('#kesediaan_informasi').val();


	// $email		= $('#email').val();
	// $password 	= $('#password').val();

	// $birdtype			= '1';
	// $status_aktivasi	= '0';
	// $status_peserta		= '0';
	// $status_bayar		= '0';
	// $days_count			= '0';


	var formData = new FormData(); 
	// formData.append('nama_lengkap', $nama_lengkap);
	// formData.append('nama_panggilan', $nama_panggilan);
	// formData.append('jenis_kelamin', $jenis_kelamin);
	// formData.append('tempat_lahir', $tempat_lahir);
	// formData.append('tanggal_lahir', $tanggal_lahir);
	// formData.append('alamat_tinggal', $alamat_tinggal);
	// formData.append('kota_tinggal', $kota_tinggal);
	// formData.append('no_handphone', $no_handphone);
	// formData.append('pekerjaan', $pekerjaan);
	// formData.append('kegiatan_gereja', $kegiatan_gereja);
	// formData.append('hobi_bakat', $hobi_bakat);
	// formData.append('dekanat', $dekanat);
	// formData.append('paroki', $paroki);
	// formData.append('kesediaan_informasi', $kesediaan_informasi); 
	// formData.append('jumlah_hari', $jumlah_hari); 
	// formData.append('email', $email);
	// formData.append('password', $password);

	// formData.append('birdtype', '1');
	// formData.append('status_aktivasi','0');
	// formData.append('status_peserta', '0');
	// formData.append('status_bayar', '0');
	// formData.append('days_count', '0');

	$.ajax({
		type: 'POST',
		url: "{{URL('post_pendaftaran')}}",
		data: formData, 
		processData: false,
		contentType: false,				
		success: function(response) { 
			alert(response); 
		},
		error: function(xhr, textStatus, errorThrown) {
			alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
			alert("responseText: "+xhr.responseText);
		}
	});
});
</script>



	pembayan group/single
	kode pendaftaran
	cara pembayaran (transfer/tunai via teller/atm) 
	nama bank pengirim
	nama rekening pengirim
	ammount
	tanngal pembayaran
	capthca
	[button] 


@stop