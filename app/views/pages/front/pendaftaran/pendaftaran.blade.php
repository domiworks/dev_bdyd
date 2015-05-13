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



			{{-- $mytime = Carbon\Carbon::now(); --}}
			<br />
			{{-- $mytime->toDateTimeString(); --}}


				
				<h2>Pendaftaran</h2>  
				<form class="form-horizontal">

					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="email" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" id="password" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="nama_lengkap" class="col-sm-2 control-label">Nama Lengkap</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="nama_lengkap" placeholder="text">
						</div>
					</div>
					<div class="form-group">
						<label for="nama_panggilan" class="col-sm-2 control-label">Nama Panggilan</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="nama_panggilan" placeholder="text">
						</div>
					</div>
					<div class="form-group">
						<label for="jenis_kelamin" class="col-sm-2 control-label">Jenis Kelamin</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="jenis_kelamin" placeholder="text">
						</div>
					</div>
					<div class="form-group">
						<label for="tempat_lahir" class="col-sm-2 control-label">Tempat Lahir</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="tempat_lahir" placeholder="text">
						</div>
					</div>
					<div class="form-group">
						<label for="tanggal_lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="tanggal_lahir" placeholder="text">
						</div>
					</div>
					<div class="form-group">
						<label for="alamat_tinggal" class="col-sm-2 control-label">Alamat Tinggal</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="alamat_tinggal" placeholder="text">
						</div>
					</div>
					<div class="form-group">
						<label for="kota_tinggal" class="col-sm-2 control-label">Kota Tinggal</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="kota_tinggal" placeholder="text">
						</div>
					</div>
					<div class="form-group">
						<label for="no_hp" class="col-sm-2 control-label">No. Handphone</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="no_hp" placeholder="text">
						</div>
					</div>
					<div class="form-group">
						<label for="pekerjaan" class="col-sm-2 control-label">Pekerjaan</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="pekerjaan" placeholder="text">
						</div>
					</div>
					<div class="form-group">
						<label for="kegiatan_gereja" class="col-sm-2 control-label">Kegiatan Gereja</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="kegiatan_gereja" placeholder="text">
						</div>
					</div>
					<div class="form-group">
						<label for="hobi_bakat" class="col-sm-2 control-label">Hobi Bakat</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="hobi_bakat" placeholder="text">
						</div>
					</div>
					<div class="form-group">
						<label for="paroki" class="col-sm-2 control-label">Paroki</label>
						<div class="col-sm-5"> 
							<select class="form-control" id="paroki" selected> 
								<option value="0">-- pilih paroki --</option>
								@foreach($all_paroki as $paroki) 
								<option value="{{$paroki->nama_paroki}}" data-dekanat="{{$paroki->nama_dekanat}}">{{$paroki->nama_paroki}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="dekanat" class="col-sm-2 control-label">Dekanat</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="dekanat" placeholder="--" readonly>
						</div>
					</div>
					<!-- <div class="form-group">
						<label for="inputtext3" class="col-sm-2 control-label">birdtype</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputtext3" placeholder="text">
						</div>
					</div>
					<div class="form-group">
						<label for="inputtext3" class="col-sm-2 control-label">status aktivasi</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputtext3" placeholder="text">
						</div>
					</div>
					<div class="form-group">
						<label for="inputtext3" class="col-sm-2 control-label">status peserta</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputtext3" placeholder="text">
						</div>
					</div>
					<div class="form-group">
						<label for="inputtext3" class="col-sm-2 control-label">status bayar</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputtext3" placeholder="text">
						</div>
					</div> -->
					<div class="form-group">
						<label for="kesediaan_informasi" class="col-sm-2 control-label">Kesediaan Informasi</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="kesediaan_informasi" placeholder="text">
						</div>
					</div>
					<!-- <div class="form-group">
						<label for="inputtext3" class="col-sm-2 control-label">days count</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputtext3" placeholder="text">
						</div>
					</div> -->





					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<div class="checkbox">
								<label>
									<input type="checkbox"> Remember me
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="button" class="btn btn-default" id="f_send_pendaftaran">Sign Up</button>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="button" class="btn btn-default" id="asdsadasd">dsasadsdaasd Up</button>
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
      $('#dekanat').val($( this ).data('dekanat'));
    });
    

  });
  

$('body').on('click', '#f_send_pendaftaran', function() { 
	// $fullname = $('#fullname').val(); 
	// $email_address = $('#email_address').val(); 
	// $subject = $('#subject').val(); 
	// $description = $('#description').val(); 


	var formData = new FormData();
	 formData.append('fullname', 'fullname'); 
	// formData.append('email_address', $email_address); 
	// formData.append('subject', $subject); 
	// formData.append('description', $description); 


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


@stop