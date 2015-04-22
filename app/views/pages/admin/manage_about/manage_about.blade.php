@extends('layouts.admin_layout')
@section('content')	
<div class="container-fluid">
	<div class="row">
		<div class="g-lg-12">
			<div class="s_title_n_control">
				<h2 style="">
					Manage About
					<!--<button class="btn btn-success pull-right" data-toggle="modal" data-target=".pop_up_add_lookbook">
						<span class="glyphicon glyphicon-plus" style="margin-right: 5px;"></span>Add New Lookbook
					</button>-->
				</h2>
				<!--<a href="index.php" class="btn btn-default" style="float: right; margin-top: 20px; margin-right: 10px;">Back</a> -->
			</div>
			<span class="clearfix"></span>
			<hr></hr>

			<div class="row">
				<div class="g-xs-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							Who We Are Page Background
						</div>
						<div class="panel-body">

							<div class="form-horizontal" id="f_contact_phone">
								<div class="form-horizontal" id="f_contact_phone">
									<div class="form-group">
										<label class="g-xs-3 control-label">Image</label>
										<div class="g-xs-9">
										<img src="{{asset($bg_list->file_path)}}" id='promotional_pin_previewer' height="150" width="150" style="float: left;">  

											<input type="file" class="promotional_pin_chooser" style="margin-left: 30px; display: inline-block; width: 220px;" accept="image/*" >

											<button class="btn btn-success f_add_new_phone saveButton f_save_promotional_pin" style="margin-left: 30px; margin-top: 15px;">
												<span class="glyphicon glyphicon-floppy-save" style="margin-right: 5px;"></span>Save
											</button>
											<hr></hr>
											<button class="btn btn-danger f_delete_pin" style="margin-left: 30px;">
												<span class="glyphicon glyphicon glyphicon-remove" style="margin-right: 5px;"></span>Delete
											</button>
										</div> 
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="g-xs-6">
					<div class="g-xs-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								About Us Description
							</div>
							<div class="panel-body">

								<div class="form-horizontal" id="f_contact_phone">
									<div class="form-group" style="margin-bottom: 0px;"> 
										<button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target=".pop_up_about_us" data-backdrop="static" style="margin-left: auto; margin-right: auto; display: block;">
											Edit Description
										</button>
									</div>
								</div>

							</div>
						</div> 

					</div> 
					<div class="g-xs-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								Interior Consultant Service Description
							</div>
							<div class="panel-body">

								<div class="form-horizontal" id="f_contact_phone">
									<div class="form-group" style="margin-bottom: 0px;"> 
										<button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target=".pop_up_consultation" data-backdrop="static" style="margin-left: auto; margin-right: auto; display: block;">
											Edit Description
										</button>
									</div>
								</div>

							</div>
						</div> 

					</div> 
					<div class="g-xs-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								Custom Furniture Service Description
							</div>
							<div class="panel-body">

								<div class="form-horizontal" id="f_contact_phone">
									<div class="form-group" style="margin-bottom: 0px;"> 
										<button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target=".pop_up_custom_interior" data-backdrop="static" style="margin-left: auto; margin-right: auto; display: block;">
											Edit Description
										</button>
									</div>
								</div>

							</div>
						</div> 

					</div> 
					<div class="g-xs-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								Ready Furniture Service Description
							</div>
							<div class="panel-body">

								<div class="form-horizontal" id="f_contact_phone">
									<div class="form-group" style="margin-bottom: 0px;"> 
										<button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target=".pop_up_ready_furniture" data-backdrop="static" style="margin-left: auto; margin-right: auto; display: block;">
											Edit Description
										</button>
									</div>
								</div>

							</div>
						</div> 

					</div>
				</div>

			</div>
		</div>
	</div>
</div>
</div>

<div class="f_loader_container hidden">
	<div class="s_tbl">
		<div class="s_cell">
			<div class="spinner">
				<div class="rect1"></div>
				<div class="rect2"></div>
				<div class="rect3"></div>
				<div class="rect4"></div>
				<div class="rect5"></div>
			</div>
		</div>
	</div>
</div> 

@include('pages.admin.manage_about.pop_up_about_us')
@include('pages.admin.manage_about.pop_up_consultation')
@include('pages.admin.manage_about.pop_up_custom_interior')
@include('pages.admin.manage_about.pop_up_ready_furniture')

<script>  
	$(".f_about_us_txt_area").jqte();
	$(".f_cosultation_txt_area").jqte();
	$(".f_custom_furniture_txt_area").jqte();
	$(".f_ready_furniture_txt_area").jqte();


</script>

<!--engine about-->
<script>
	$('body').on('click','.save_about_us',function(){
		$('.f_spinner_load').css('opacity','1');
		var about_us = $('.f_about_us_txt_area').val();
		$.ajax({
			type: 'PUT',
			url: "{{url('admin/edit_about_us')}}",
			data:{
				'about_us':about_us
			},
			success: function(response){
				$('.modal').modal('hide');
				$(document).ready(fadingInfo('Information saved','btn-success')); 

				$('.f_spinner_load').css('opacity','0');
			//alert(response);
		},
		error: function(jqXHR, textStatus, errorThrown){
			$('.f_spinner_load').css('opacity','0');
			alert(errorThrown);
		}
	});
	});

	$('body').on('click','.consul_save',function(){
		$('.f_spinner_load').css('opacity','1');
		var desc = $('.f_cosultation_txt_area').val();
		$.ajax({
			type: 'PUT',
			url: "{{url('admin/edit_consultation')}}",
			data:{
				'desc':desc
			},
			success: function(response){
				$('.modal').modal('hide');
				$(document).ready(fadingInfo('Information saved','btn-success')); 

				$('.f_spinner_load').css('opacity','0');
				//alert(response);
			},
			error: function(jqXHR, textStatus, errorThrown){
				$('.f_spinner_load').css('opacity','0');
				alert(errorThrown);
			}
		});
	});	

	$('body').on('click','.custom_furniture_save',function(){
		$('.f_spinner_load').css('opacity','1');
		var desc = $('.f_custom_furniture_txt_area').val();
		$.ajax({
			type: 'PUT',
			url: "{{url('admin/edit_custom_furniture')}}",
			data:{
				'desc':desc
			},
			success: function(response){
				$('.modal').modal('hide');
				$(document).ready(fadingInfo('Information saved','btn-success')); 

				$('.f_spinner_load').css('opacity','0');
				//alert(response);
			},
			error: function(jqXHR, textStatus, errorThrown){
				$('.f_spinner_load').css('opacity','0');
				alert(errorThrown);
			}
		});
	});

	$('body').on('click','.ready_furniture_save',function(){
		$('.f_spinner_load').css('opacity','1');
		var desc = $('.f_ready_furniture_txt_area').val();
		$.ajax({
			type: 'PUT',
			url: "{{url('admin/edit_ready_furniture')}}",
			data:{
				'desc':desc
			},
			success: function(response){
				$('.modal').modal('hide');
				$(document).ready(fadingInfo('Information saved','btn-success')); 

				$('.f_spinner_load').css('opacity','0');
				//alert(response);
			},
			error: function(jqXHR, textStatus, errorThrown){
				$('.f_spinner_load').css('opacity','0');
				alert(errorThrown);
			}
		});
	});

	// upload who we are image background
	var promotional_pin_image = '';
	$('body').on('change','.promotional_pin_chooser',function(){
		var i = 0, len = this.files.length, img, reader, file;
		for ( ; i < len; i++ ) {
			file = this.files[i];
			promotional_pin_image = file;
			if (!!file.type.match(/image.*/)) {
				if ( window.FileReader ) {
					reader = new FileReader();
					reader.onloadend = function (e) {
						$('#promotional_pin_previewer').attr('src',e.target.result);
					};
					reader.readAsDataURL(file);
				}
			}
		}
	});
	
	$('body').on('click','.f_save_promotional_pin',function(){
		//alert(promotional_pin_image);
		$fd = new FormData();
		$fd.append('promotional_pin',promotional_pin_image);
		
		$.ajax({
			type: 'POST',
			url: "{{url('admin/add_wwa_bg')}}",
			processData:false,
			contentType: false,
			data:$fd,
			success: function(response){
				$(document).ready(fadingInfo('Promotional pin added','btn-success')); 
				//alert(response);
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert(errorThrown);
			}
		});
		
		//ajax post
	});
	
	
	$('body').on('click','.f_delete_pin',function(){
		$.ajax({
			type: 'DELETE',
			url: "{{url('admin/delete_wwa_bg')}}",
			success: function(response){
				$(document).ready(fadingInfo('Promotional pin deleted','btn-danger')); 
				//alert(response);
				$('#promotional_pin_previewer').attr('src','');
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert(errorThrown);
			}
		});
		
		//ajax post
	});
</script>

@stop
