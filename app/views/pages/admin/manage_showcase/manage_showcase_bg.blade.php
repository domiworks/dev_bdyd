@extends('layouts.admin_layout')
@section('content')	
<div class="container-fluid">

	<div class="g-sm-12">
		<div class="row"> 
		</div>
		<div class="g-sm-10 g-sm-push-1"> 
			<div class="s_title_n_control">
				<h2 style="">
					Manage Showcase Background
					<!-- <button class="btn btn-success pull-right" id='new_location' data-toggle="modal" data-target=".pop_up_add_location" data-backdrop="static">
						<span class="glyphicon glyphicon-plus" style="margin-right: 5px;"></span>New Location
					</button> -->
				</h2>
			</div>
			<span class="clearfix"></span>
			<hr></hr>

			<div>
				<div class="panel panel-default">
					<div class="panel-body">  
						<?php
						for ($i = 0; $i < 3; $i++) {
							?> 
							<div class="g-xs-4"> 
								<div class="form-horizontal" id="f_contact_phone">
									<div class="form-group" style="margin-bottom: 0px;">
										<label class="g-xs-3 control-label">Image {{$bg_list[$i]->subtype}}</label>
										<div class="g-xs-9">
											<img src="{{asset($bg_list[$i]->file_path)}}" class='promotional_pin_previewer view_{{$bg_list[$i]->subtype}}' height="150" width="150" style="float: left;">  

											<input type="file" class="showcase_bg_chooser" style="margin-left: 30px; display: inline-block; width: 130px;" accept="image/*" >
											<input type="hidden" class='category_id' value="{{$bg_list[$i]->subtype}}" />
											<button class="btn btn-success f_add_new_phone saveButton f_save_showcase_bg" style="margin-left: 30px; margin-top: 15px;">
												<span class="glyphicon glyphicon-floppy-save" style="margin-right: 5px;"></span>Save
											</button> 
											<!-- <button class="btn btn-danger f_delete_bg" style="margin-left: 30px; margin-top: 13px;">
												<span class="glyphicon glyphicon glyphicon-remove" style="margin-right: 5px;"></span>Delete
											</button> -->
										</div> 
									</div>
								</div>
							</div>
							<?php
						}
						?>
						<span class="clearfix"></span>
						<hr></hr>
						<span class="clearfix"></span>
						<?php
						for ($i = 3; $i < 6; $i++) {
							?>
							<div class="g-xs-4"> 
								<div class="form-horizontal" id="f_contact_phone">
									<div class="form-group">
										<label class="g-xs-3 control-label">Image {{$bg_list[$i]->subtype}}</label>
										<div class="g-xs-9">
											<img src="{{asset($bg_list[$i]->file_path)}}" class='promotional_pin_previewer view_{{$bg_list[$i]->subtype}}' height="150" width="150" style="float: left;">  

											<input type="file" class="showcase_bg_chooser" style="margin-left: 30px; display: inline-block; width: 130px;" accept="image/*" >
											<input type="hidden" class='category_id' value="{{$bg_list[$i]->subtype}}" />
											<button class="btn btn-success f_add_new_phone saveButton f_save_showcase_bg" style="margin-left: 30px; margin-top: 15px;">
												<span class="glyphicon glyphicon-floppy-save" style="margin-right: 5px;"></span>Save
											</button> 
											<!-- <button class="btn btn-danger f_delete_bg" style="margin-left: 30px; margin-top: 13px;">
												<span class="glyphicon glyphicon glyphicon-remove" style="margin-right: 5px;"></span>Delete
											</button> -->
										</div> 
									</div>
								</div>
							</div>
							<?php
						}
						?>

						 
						 
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

@include('pages.admin.manage_showcase.pop_up_add_location')
@include('pages.admin.manage_showcase.pop_up_edit_location')
@include('pages.admin.manage_showcase.pop_up_delete_location')


<script> 

	//promotional pin
	//var temp_view_image = '';
	var temp_container_image = new Array('','','','','','');
	$('body').on('change','.showcase_bg_chooser',function(){ 
		$subtype = $(this).next().val();
		var viewSubtype = '.view_' + $(this).next().val();
		//alert($subtype);
		var i = 0, len = this.files.length, img, reader, file;
		for ( ; i < len; i++ ) {
			file = this.files[i];
			temp_container_image[$subtype] = file;
			if (!!file.type.match(/image.*/)) {
				if ( window.FileReader ) {
					reader = new FileReader();
					reader.onloadend = function (e) {
						$(viewSubtype).attr('src',e.target.result);
					};
					reader.readAsDataURL(file);
				}
			}
		}
	});
	
	$('body').on('click','.f_save_showcase_bg',function(){
		//alert(temp_container_image);
		$subtype = $(this).prev().val(); 
		//alert(idc);
		$fd = new FormData();
		$fd.append('promotional_pin',temp_container_image[$subtype]);
		
		$.ajax({
			type: 'POST',
			url: "{{url('admin/add_showcase_bg')}}/"+$subtype,
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
	
	
	$('body').on('click','.f_delete_bg',function(){
		$subtype = $(this).siblings('.category_id').val(); 
		$.ajax({
			type: 'DELETE',
			url: "{{url('admin/delete_showcase_bg')}}/"+$subtype,
			success: function(response){
				$(document).ready(fadingInfo('Promotional pin deleted','btn-danger')); 
				//alert(response);
				$(this).siblings('.promotional_pin_previewer').attr('src','');
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert(errorThrown);
			}
		});
		
		//ajax post
	});
	</script>


	@stop
