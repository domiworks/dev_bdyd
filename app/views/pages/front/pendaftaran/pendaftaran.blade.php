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
				{{-- Carbon\Carbon::now()->toDateString() --}}
				
				<div class="  text-center">
					{{-- QrCode::size(151)->generate(Request::url()); --}}
				</div>
				<div class="panel panel-default">
					<div class="panel-body">

						<form class="form-horizontal">


							<div class="form-group">
								<label for="" class="col-sm-3 control-label"></label>
								<div class="col-sm-5">
									<h3>Informasi Pendaftar</h3>
								</div>
							</div>
							<div class="form-group">
								<label for="nama_lengkap" class="col-sm-3 control-label">Nama Lengkap</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="nama_lengkap" placeholder="eg: Michael Andrian" required>
								</div>
								<div class="col-sm-4">
									<span class="btn-danger f_validate_error f_nama_lengkap_er" style="display: none; padding: 6px;">
										Field ini harus diisi.
									</span>
									<script>
									$('body').on('keyup','#nama_lengkap', function (){$('.f_nama_lengkap_er').css('display','none')});
									</script>
								</div>
							</div>
							<div class="form-group">
								<label for="nama_panggilan" class="col-sm-3 control-label">Nama Panggilan</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="nama_panggilan" placeholder="eg: Mike" required>
								</div>
								<div class="col-sm-4">
									<span class="btn-danger f_validate_error f_nama_panggilan_er" style="display: none; padding: 6px;">
										Field ini harus diisi.
									</span>
									<script>
									$('body').on('keyup','#nama_panggilan', function (){$('.f_nama_panggilan_er').css('display','none')});
									</script>
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
								<div class="col-sm-4">
									<span class="btn-danger f_validate_error f_jenis_kelamir_er" style="display: none; padding: 6px;">
										Field ini harus diisi.
									</span>
									<script>
									$('body').on('click','#jenis_kelamin', function (){$('.f_jenis_kelamir_er').css('display','none')});
									</script>
								</div>
							</div>
							<div class="form-group">
								<label for="tempat_lahir" class="col-sm-3 control-label">Tempat Lahir</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="tempat_lahir" placeholder="eg: Jakarta" required>
								</div>
								<div class="col-sm-4">
									<span class="btn-danger f_validate_error f_tempat_lahir_er" style="display: none; padding: 6px;">
										Field ini harus diisi.
									</span>
									<script>
									$('body').on('click','#tempat_lahir', function (){$('.f_tempat_lahir_er').css('display','none')});
									</script>
								</div>
							</div>
							<div class="form-group">
								<label for="tanggal_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
								<div class="col-sm-5">
									<input type="hidden" id="tanggal_lahir_check" value="{{ Carbon\Carbon::now()->toDateString() }}">
									<input type="hidden" id="tanggal_lahir">
									<select class="form-control pull-left" id="tanggal_lahir_dd" style="width:50px;">
										<option value="01">1</option>
										<option value="02">2</option>
										<option value="03">3</option>
										<option value="04">4</option>
										<option value="05">5</option>
										<option value="06">6</option>
										<option value="07">7</option>
										<option value="08">8</option>
										<option value="09">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
										<option value="26">26</option>
										<option value="27">27</option>
										<option value="28">28</option>
										<option value="29">29</option>
										<option value="30">30</option>
										<option value="31">31</option>
									</select>
									<select class="form-control pull-left" id="tanggal_lahir_mm"  style="margin-left: 20px; width: 100px;">
										<option value="01">Januari</option>
										<option value="02">Februari</option>
										<option value="03">Maret</option>
										<option value="04">April</option>
										<option value="05">Mei</option>
										<option value="06">Juni</option>
										<option value="07">Juli</option>
										<option value="08">Agustus</option>
										<option value="09">September</option>
										<option value="10">Oktober</option>
										<option value="11">November</option>
										<option value="12">Desember</option>
									</select>
									<select class="form-control pull-left" id="tanggal_lahir_yy"  style="margin-left: 20px; width: 100px;">
										<option value="1979">1979</option> 
										<option value="1980">1980</option> 
										<option value="1981">1981</option> 
										<option value="1982">1982</option> 
										<option value="1983">1983</option> 
										<option value="1984">1984</option> 
										<option value="1985">1985</option> 
										<option value="1986">1986</option> 
										<option value="1987">1987</option> 
										<option value="1988">1988</option> 
										<option value="1989">1989</option> 
										<option value="1990">1990</option>  
										<option value="1991">1991</option>  
										<option value="1992">1992</option>  
										<option value="1993">1993</option>  
										<option value="1994">1994</option>  
										<option value="1995">1995</option>  
										<option value="1996">1996</option>  
										<option value="1997">1997</option>  
										<option value="1998">1998</option>  
										<option value="1999">1999</option>  
										<option value="2000">2000</option>  
										<option value="2001">2001</option>  
										<option value="2002">2002</option>  
									</select> 
								</div>
								<div class="col-sm-4">
									<span class="btn-danger f_validate_error f_tanggal_lahir_er" style="display: none; padding: 6px;">
										Field ini harus diisi.
									</span>
								</div>
							</div>
							<div class="form-group">
								<label for="alamat_tinggal" class="col-sm-3 control-label">Alamat Tinggal</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="alamat_tinggal" placeholder="eg: Jl. Ciumbuleuit No. 1" required>
								</div>
								<div class="col-sm-4">
									<span class="btn-danger f_validate_error f_alamat_tinggal_er" style="display: none; padding: 6px;">
										Field ini harus diisi.
									</span>
									<script>
									$('body').on('keyup','#alamat_tinggal', function (){$('.f_alamat_tinggal_er').css('display','none')});
									</script>
								</div>
							</div>
							<div class="form-group">
								<label for="kota_tinggal" class="col-sm-3 control-label">Kota Tinggal</label>
								<div class="col-sm-5">
									<!-- <input type="text" class="form-control" id="kota_tinggal" placeholder="eg: Bandung" required> -->
									<select class="form-control pull-left" id="kota_tinggal">
										<option value="Bandung"> Bandung</option> 
										<option value="Karawang"> Karawang</option> 
										<option value="Purwakarta"> Purwakarta</option> 
										<option value="Subang"> Subang</option> 
										<option value="Pamanukan"> Pamanukan</option> 
										<option value="Cigugur"> Cigugur</option> 
										<option value="Cirebon"> Cirebon</option> 
										<option value="Indramayu"> Indramayu</option> 
										<option value="Tasikmalaya"> Tasikmalaya</option> 
										<option value="Garut"> Garut</option> 
									</select>
								</div>
								<div class="col-sm-4">
									<span class="btn-danger f_validate_error f_kota_tinggal_er" style="display: none; padding: 6px;">
										Field ini harus diisi.
									</span>
									<script>
									$('body').on('change','#kota_tinggal', function (){$('.f_kota_tinggal_er').css('display','none')});
									</script>
								</div>
							</div>
							<div class="form-group">
								<label for="no_handphone" class="col-sm-3 control-label">No. Handphone</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="no_handphone" placeholder="" style="text-indent: 25px;">
									<span style="  position: absolute; top: 7px; font-size: 14px;">
										+62
									</span>
									<script>
										$('#no_handphone').keyup(function () {
											if (this.value != this.value.replace(/[^0-9\.]/g, '')) {
												this.value = this.value.replace(/[^0-9\.]/g, '');
											}
										});
									</script>
								</div>
								<div class="col-sm-4">
									<span class="btn-danger f_validate_error f_no_handphone_er" style="display: none; padding: 6px;">
										Field ini harus diisi.
									</span>
									<script>
									$('body').on('keyup','#no_handphone', function (){$('.f_no_handphone_er').css('display','none')});
									</script>
								</div>
							</div>
							<div class="form-group">
								<label for="pekerjaan" class="col-sm-3 control-label">Pekerjaan</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="pekerjaan" placeholder="eg: Mahasiswa" required>
								</div>
								<div class="col-sm-4">
									<span class="btn-danger f_validate_error f_pekerjaan_er" style="display: none; padding: 6px;">
										Field ini harus diisi.
									</span>
									<script>
									$('body').on('keyup','#pekerjaan', function (){$('.f_pekerjaan_er').css('display','none')});
									</script>
								</div>
							</div>
							<div class="form-group">
								<label for="kegiatan_gereja" class="col-sm-3 control-label">Kegiatan Gereja</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="kegiatan_gereja" placeholder="eg: Kepala Mudika" required>
								</div>
								<div class="col-sm-4">
									<span class="btn-danger f_validate_error f_kegiatan_gereja_er" style="display: none; padding: 6px;">
										Field ini harus diisi.
									</span>
									<script>
									$('body').on('keyup','#kegiatan_gereja', function (){$('.f_kegiatan_gereja_er').css('display','none')});
									</script>
								</div>
							</div>
							<div class="form-group">
								<label for="hobi_bakat" class="col-sm-3 control-label">Hobi/Bakat</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="hobi_bakat" placeholder="eg: Bermain Gitar" required>
								</div>
								<div class="col-sm-4">
									<span class="btn-danger f_validate_error f_hobi_bakat_er" style="display: none; padding: 6px;">
										Field ini harus diisi.
									</span>
									<script>
										$('body').on('keyup','#hobi_bakat', function (){$('.f_hobi_bakat_er').css('display','none')});
									</script>
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
								<div class="col-sm-4">
									<span class="btn-danger f_validate_error f_paroki_er" style="display: none; padding: 6px;">
										Field ini harus diisi.
									</span>
									<script>
										$('body').on('click','#paroki', function (){$('.f_paroki_er').css('display','none')});
									</script>
								</div>
							</div>
							<div class="form-group">
								<label for="dekanat" class="col-sm-3 control-label">Dekanat</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="dekanat" placeholder="--" readonly>
								</div>
								<!-- <div class="col-sm-4">
									<span class="btn-danger f_validate_error f_dekanat_er" style="display: none; padding: 6px;">
										Field ini harus diisi.
									</span>
								</div> -->
							</div>

							<div class="form-group">
								<label for="jumlah_hari" class="col-sm-3 control-label">Jumlah Hari</label>
								<div class="col-sm-5">
									<div class="radio" style="float: left;">
										<label><input type="radio" name="jumlah_hari" id="jumlah_hari" value="1">Minggu</label>
									</div>
									<div class="radio" style="float: left; margin-left: 40px;">
										<label><input type="radio" name="jumlah_hari" id="jumlah_hari" value="2">Sabtu - Minggu</label>
									</div>
								</div>
								<div class="col-sm-4">
									<span class="btn-danger f_validate_error f_jumlah_hari_er" style="display: none; padding: 6px;">
										Field ini harus diisi.
									</span>
									<script>
										$('body').on('click','#jumlah_hari', function (){$('.f_jumlah_hari_er').css('display','none')});
									</script>
								</div>
							</div>

							<hr />

							<div class="form-group">
								<label for="" class="col-sm-3 control-label"></label>
								<div class="col-sm-5">
									<h3>Buat Akun BDYD</h3>
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="col-sm-3 control-label">Email</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="email" placeholder="email@email.com" required> 
								</div>
								<div class="col-sm-4">
									<span class="btn-danger f_validate_error f_email_er" style="display: none; padding: 6px;">
										Format field salah/belum diisi
									</span>
									<script>
										$('body').on('keyup','#email', function (){$('.f_email_er').css('display','none')});
									</script>
								</div>
							</div>
							<!-- <div class="form-group">
								<label for="password" class="col-sm-3 control-label">Password</label>
								<div class="col-sm-5">
									<input type="password" class="form-control" id="password" placeholder="Password" required>
								</div>
								<div class="col-sm-4">
									<span class="btn-danger f_validate_error f_password_er" style="display: none; padding: 6px;">
										Field ini harus diisi.
									</span>
									<script>
										$('body').on('keyup','#password', function (){$('.f_password_er').css('display','none')});
									</script>
								</div>
							</div>
							<div class="form-group">
								<label for="retype_password" class="col-sm-3 control-label">Re-type Password</label>
								<div class="col-sm-5">
									<input type="password" class="form-control" id="retype_password" placeholder="Re-type Password" required>
								</div>
								<div class="col-sm-4">
									<span class="btn-danger f_validate_error f_retype_password_er" style="display: none; padding: 6px;">
										Password tidak sama.
									</span>
									<script>
										$('body').on('keyup','#retype_password', function (){$('.f_retype_password_er').css('display','none')});
									</script>
								</div>
							</div> -->

							<hr />

							<div class="form-group">
								<label for="kesediaan_informasi" class="col-sm-3 control-label">Kesediaan Informasi</label>
								<div class="col-sm-6">
									<div class="checkbox" style="float: left; padding-top: 7px;">
										<label><input type="checkbox" name="kesediaan_informasi" id="kesediaan_informasi" checked="checked"> Ya, saya bersedia untuk diberikan informasi tentang acara BDYD.</label>
									</div> 
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-7">
									<button type="button" class="btn btn-warning btn-raised" id="f_send_pendaftaran" >Sign Up</button>
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

	$nama_lengkap 		= $('#nama_lengkap').val();  
	$nama_panggilan 	= $('#nama_panggilan').val();
	$jenis_kelamin 		= $('#jenis_kelamin:checked').val();
	$tempat_lahir 		= $('#tempat_lahir').val();
	$tanggal_lahir 		= $('#tanggal_lahir_dd option:selected').val()+'-'+$('#tanggal_lahir_mm option:selected').val()+'-'+$('#tanggal_lahir_yy option:selected').val();
	$alamat_tinggal 	= $('#alamat_tinggal').val();
	$kota_tinggal 		= $('#kota_tinggal option:selected').val();
	$no_handphone 		= $('#no_handphone').val();
	$pekerjaan 			= $('#pekerjaan').val();
	$kegiatan_gereja 	= $('#kegiatan_gereja').val();
	$hobi_bakat 		= $('#hobi_bakat').val();
	$dekanat 			= $('#dekanat').val();
	$paroki 			= $('#paroki_val').val();
	$jumlah_hari		= $('#jumlah_hari:checked').val();

	$email		= $('#email').val();
	$password 	= $('#password').val();

	// alert($nama_lengkap);
	// alert($nama_panggilan);
	// alert($jenis_kelamin);
	// alert($tempat_lahir);
	// alert($tanggal_lahir);
	// alert($alamat_tinggal);
	// alert($kota_tinggal);
	// alert($no_handphone);
	// alert($pekerjaan);
	// alert($kegiatan_gereja);
	// alert($hobi_bakat);
	// alert($dekanat);
	// alert($paroki);
	// alert($jumlah_hari);


	// $birdtype			= '1';
	// $status_aktivasi	= '0';
	// $status_peserta		= '0';
	// $status_bayar		= '0';
	// $days_count			= '0';


	var formData = new FormData(); 
	formData.append('nama_lengkap', $nama_lengkap);
	formData.append('nama_panggilan', $nama_panggilan);
	formData.append('jenis_kelamin', $jenis_kelamin);
	formData.append('tempat_lahir', $tempat_lahir);
	formData.append('tanggal_lahir', $tanggal_lahir);
	formData.append('alamat_tinggal', $alamat_tinggal);
	formData.append('kota_tinggal', $kota_tinggal);
	formData.append('no_handphone', $no_handphone);
	formData.append('pekerjaan', $pekerjaan);
	formData.append('kegiatan_gereja', $kegiatan_gereja);
	formData.append('hobi_bakat', $hobi_bakat);
	formData.append('dekanat', $dekanat);
	formData.append('paroki', $paroki);
	if($('#kesediaan_informasi:checked').length > 0){
		formData.append('kesediaan_informasi', '1'); 
	}else{
		formData.append('kesediaan_informasi', '0'); 
	} 
	formData.append('jumlah_hari', $jumlah_hari); 

	formData.append('email', $email);
	formData.append('password', 'password');

	// formData.append('birdtype', '1');
	// formData.append('status_aktivasi','0');
	// formData.append('status_peserta', '0');
	// formData.append('status_bayar', '0');
	// formData.append('days_count', '0');

	// if($('#password').val() != $('#retype_password').val()){
	// 	$('.f_retype_password_er').css('display','block');
	// }

	function validateEmail(email) {
   		var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
   		return re.test(email);	
	}

	if(
		($nama_lengkap != null) && ($nama_lengkap != '') &&
		($nama_panggilan != null) && ($nama_panggilan != '') &&
		($jenis_kelamin != null) && ($jenis_kelamin != '') &&
		($tempat_lahir != null) && ($tempat_lahir != '') &&
		($tanggal_lahir != null) && ($tanggal_lahir != '') &&
		($alamat_tinggal != null) && ($alamat_tinggal != '') &&
		($kota_tinggal != null) && ($kota_tinggal != '') &&
		($no_handphone != null) && ($no_handphone != '') &&
		($pekerjaan != null) && ($pekerjaan != '') &&
		($kegiatan_gereja != null) && ($kegiatan_gereja != '') &&
		($hobi_bakat != null) && ($hobi_bakat != '') &&
		($dekanat != null) && ($dekanat != '') &&
		($paroki != null) && ($paroki != '') &&
		($jumlah_hari != null) && ($jumlah_hari != '') &&
		($email != null) && ($email != '') && (validateEmail($email) != false)
		// ($password != null) && ($password != '') 
		// ($('#password').val() != $('#retype_password').val())
		){

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
	}else{ 
		if( ($nama_lengkap == null) || ($nama_lengkap == '') )		{$('.f_nama_lengkap_er').css('display','block')};
		if( ($nama_panggilan == null) || ($nama_panggilan == '') )	{$('.f_nama_panggilan_er').css('display','block')};
		if( ($jenis_kelamin == null) || ($jenis_kelamin == '') )	{$('.f_jenis_kelamir_er').css('display','block')};
		if( ($tempat_lahir == null) || ($tempat_lahir == '') )		{$('.f_tempat_lahir_er').css('display','block')};
		if( ($tanggal_lahir == null) || ($tanggal_lahir == '') )	{$('.f_tanggal_lahir_er').css('display','block')};
		if( ($alamat_tinggal == null) || ($alamat_tinggal == '') )	{$('.f_alamat_tinggal_er').css('display','block')};
		if( ($kota_tinggal == null) || ($kota_tinggal == '') )		{$('.f_kota_tinggal_er').css('display','block')};
		if( ($no_handphone == null) || ($no_handphone == '') )		{$('.f_no_handphone_er').css('display','block')};
		if( ($pekerjaan == null) || ($pekerjaan == '') )			{$('.f_pekerjaan_er').css('display','block')};
		if( ($kegiatan_gereja == null) || ($kegiatan_gereja == '') ){$('.f_kegiatan_gereja_er').css('display','block')};
		if( ($hobi_bakat == null) || ($hobi_bakat == '') )			{$('.f_hobi_bakat_er').css('display','block')};
		if( ($dekanat == null) || ($dekanat == '') )				{$('.f_dekanat_er').css('display','block')};
		if( ($paroki == null) || ($paroki == '') )					{$('.f_paroki_er').css('display','block')};
		if( ($jumlah_hari == null) || ($jumlah_hari == '') )		{$('.f_jumlah_hari_er').css('display','block')};
		if( ($email == null) || ($email == '') )					{$('.f_email_er').css('display','block')}; 

	}
 



});
</script>


@stop