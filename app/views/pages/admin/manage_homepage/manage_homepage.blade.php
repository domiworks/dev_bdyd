@extends('layouts.admin_layout')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="g-lg-12">
			<div class="s_title_n_control">
				<h2 style="">
					Manage Homepage
					<!--<button class="btn btn-success pull-right" data-toggle="modal" data-target=".pop_up_add_lookbook">
						<span class="glyphicon glyphicon-plus" style="margin-right: 5px;"></span>Add New Lookbook
					</button>-->
				</h2>
				<!--<a href="index.php" class="btn btn-default" style="float: right; margin-top: 20px; margin-right: 10px;">Back</a> -->
			</div>
			<span class="clearfix"></span>
			<hr></hr>

			<div class="row">
				<div class="g-lg-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							Homepage Slideshow Background
						</div>
						<div class="panel-body">
							
							<div class="form-horizontal" id="f_contact_phone">
								<div class="form-group" style="margin-bottom: 0px;"> 
									<button type="button" id='edit_slideshow_' class="btn btn-success" data-toggle="modal" data-target=".pop_up_edit_slideshow" data-backdrop="static" style="margin-left: auto; margin-right: auto; display: block;">
										Edit Slideshow
									</button>
								</div>
							</div>

						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							Homepage Catchphrase
						</div>
						<div class="panel-body">
							
							<div class="form-horizontal" id="f_contact_phone">
								<div class="form-group">
									<label class="g-xs-3 control-label">Current Sentence</label>
									<div class="g-xs-7">
										<div class="form-control-static" id="current_phrase">{{$phrase}}</div>
									</div>
									<div class="g-xs-2"> 
									</div>
								</div>
								<div class="form-group">
									<label class="g-xs-3 control-label">New Sentence</label>
									<div class="g-xs-9">
										<textarea class="form-control f_new_sentence"></textarea>
									</div>  
									<label class="g-xs-3 control-label"> </label> 
									<div class="g-xs-7">
										<button class="btn btn-success f_add_new_sentence saveButton">
											<span class="glyphicon glyphicon-floppy-save" style="margin-right: 5px;"></span>Save
										</button>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>
				<div class="g-lg-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							Promotional Pin
						</div>
						<div class="panel-body">
							
							<div class="form-horizontal" id="f_contact_phone">
								<div class="form-group">
									<label class="g-xs-3 control-label">Image</label>
									<div class="g-xs-9">
										<img src="{{asset($promotional_pin)}}" id='promotional_pin_previewer' height="150" width="150" style="float: left;">  

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



@include('pages.admin.manage_homepage.pop_up_edit_slideshow')


<script> 

$(".f_new_sentence").jqte();

var f_cek_image;

var image_count = 0;
var image_array = [];
 
//SLIDESHOW BACKGROUND
//tambah
var tambah = 0;
$('body').on('click','.f_add_new_picture',function(){
	var new_picture = '<div class="form-group">';
	new_picture += '	<label class="g-sm-3 control-label">Picture</label>';
	new_picture += '	<div class="g-sm-3">';
	new_picture += '		<img class="slide_preview" src="" width="156" height="100" />';	
	new_picture += '	</div>';
	new_picture += '	<div class="g-sm-5">';
	new_picture += '	<input type="hidden" class="image_no" value="'+tambah+'"/>';
	new_picture += '		<input type="file" class="f_pic_identity" value="" accept="image/*" />';	
	new_picture += '		<div style="margin-top: 10px; display: block; float: left;"><b>File Size:</b><span class="file_size"></span></div>';	
	new_picture += '	</div>';
	new_picture += '	<div class="g-sm-1">';
	new_picture += '	<input type="hidden" class="image_no" value="'+tambah+'"/>';
	new_picture += '		<button type="button" class="btn btn-danger f_delete_this_picture">';
	new_picture += '			<span class="glyphicon glyphicon-remove"></span>'; 
	new_picture += '		</button>';
	new_picture += '	<input type="hidden" value="0" />';
	new_picture += '	</div>';
	new_picture += '</div>';
	tambah = tambah + 1;
	$('.f_picture_container').append(new_picture);
});


//delete
$('body').on('click','.f_delete_this_picture',function(){
	$exist = $(this).next().val();
	
	if($exist == 1){
		$id = $(this).prev().val();
		//ajax delete
		$.ajax({
			type: 'DELETE',
			url: "{{url('admin/slideshow')}}/"+$id,
			success: function(response){
				//alert(response);
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert(errorThrown);
			}
		});
	}
	else{
		$idx = $(this).prev().val();
		image_array[$idx] = '';
		//alert($idx);
	}
	
	$(this).closest('.form-group').remove();
	
	//ajax delete image
	
	
});



$('body').on('change','.f_pic_identity',function (evt) {
	var current_object = $(this);
	var i = 0, len = this.files.length, img, reader, file;
	for ( ; i < len; i++ ) {
		file = this.files[i];
		image_array[image_count]=file;
		image_count++;
		if (!!file.type.match(/image.*/)) {
			if ( window.FileReader ) {
				reader = new FileReader();
				reader.onloadend = function (e) {
					current_object.parent().prev().children('.slide_preview').attr('src',e.target.result);
					current_object.next().children('.file_size').text(" " + (((file.size)/1024)/1024).toFixed(2) + " MB" );
				};
				reader.readAsDataURL(file);
			}
		}
	}
});
</script>

<!--engine homepage-->
<script>
	$('body').on('click','.f_add_new_sentence',function(){
		var phrase = $('.f_new_sentence').val();
		$.ajax({
			type: 'PUT',
			url: "{{url('admin/edit_catchphrase')}}",
			data:{
				'phrase':phrase
			},
			success: function(response){
				$.ajax({
					type: 'GET',
					url: "{{url('admin/catchphrase')}}",
					success: function(response2){
						$('#current_phrase').html(response2);
						$('#current_phrase').html(response2);
						$(document).ready(fadingInfo('Catchphrase saved','btn-success')); 

						//alert(response);
						
					},
					error: function(jqXHR, textStatus, errorThrown){
						alert(errorThrown);
					}
				});
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert(errorThrown);
			}
		});
	});
	
	//slide show
	
	$('body').on('click','#edit_slideshow_',function(){
		var image_count = 0;
		var image_array = [];

		var tambah = 0;
		get_slideshow();
	});
	
	$('body').on('click','#f_save_slideshow',function(){
		$('.f_spinner_load').css('opacity','1');
		$formData = new FormData();
		
		$formData.append('count',image_count);
		
		for($i=0;$i<image_count;$i++){
			$formData.append('slide'+$i,image_array[$i]);
		}
		
		//ajax upload slideshow
		$.ajax({
			type: 'POST',
			url: "{{url('admin/slideshow')}}",
			data:$formData,
			processData:false,
			contentType: false,
			success: function(response){
				$('.f_spinner_load').css('opacity','0');
				get_slideshow(); 
				$('.modal').modal('hide'); 
				$(document).ready(fadingInfo('Home background saved','btn-success')); 
				//alert(response);
			},
			error: function(jqXHR, textStatus, errorThrown){
				$('.f_spinner_load').css('opacity','0');
				alert(errorThrown);
			}
		});
		
		
		
	});
	
	function get_slideshow(){
		$.ajax({
			type: 'GET',
			url: "{{url('admin/slideshow')}}",
			success: function(response){
				var div_slide = '';
				$.each(response,function(){
					div_slide+='<div class="form-group">';
					div_slide+='<label class="g-sm-3 control-label">Picture</label>';
					div_slide+='<div class="g-sm-3">';
					div_slide+='	<img class="slide_preview" src="{{asset("/")}}'+$(this)[0].file_path+'" width="156" height="100" />';
					div_slide+='</div>';
					div_slide+='<div class="g-sm-5">';
					div_slide+='</div>';
					div_slide+='<div class="g-sm-1">';
					div_slide+='<input type="hidden" value ='+$(this)[0].id+' />';
					div_slide+='<button type="button" class="btn btn-danger f_delete_this_picture">';
					div_slide+='<span class="glyphicon glyphicon-remove"></span>';
					div_slide+='</button>';
					div_slide+='<input type="hidden" value="1" />';
					div_slide+='</div>';
					div_slide+='</div> ';
				});
				
				$('.f_picture_container').html(div_slide);
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert(errorThrown);
			}
		});
	}
	
	
	//promotional pin
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
			url: "{{url('admin/update_promotional_pin')}}",
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
			url: "{{url('admin/delete_promotional_pin')}}",
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
