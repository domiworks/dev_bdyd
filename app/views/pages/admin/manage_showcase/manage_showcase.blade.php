@extends('layouts.admin_layout')
@section('content')	
<div class="container-fluid">

	<div class="g-sm-12">
		<div class="row"> 
		</div>
		<div class="g-sm-10 g-sm-push-1"> 
			<div class="s_title_n_control">
				<h2 style="">
					Manage Showcase
					<button class="btn btn-success pull-right" id='new_location' data-toggle="modal" data-target=".pop_up_add_location" data-backdrop="static">
						<span class="glyphicon glyphicon-plus" style="margin-right: 5px;"></span>New Location
					</button>
				</h2>
				<!--<a href="index.php" class="btn btn-default" style="float: right; margin-top: 20px; margin-right: 10px;">Back</a> -->
			</div>
			<span class="clearfix"></span>
			<hr></hr>

			<div>
				<div class="panel panel-default">
					<div class="panel-body"> 
						<table class="table table-striped pull-left" style="">
							<thead>
								<tr>
									<th colspan="4">
										<select class="form-control input-sm" id='filter_combo' style="width: 130px;float: left;">
											<option value="-1">Semua</option>
											<option value="0">Furniture</option>
											<option value="1">Apartment</option>
											<option value="2">Hotel</option>
											<option value="3">House</option>
											<option value="4">Office</option>
											<option value="5">Others</option>
										</select>
										<!-- <button class="btn btn-primary btn-sm" id='filter_show' style="float: left; margin-left: 10px;">
											Filter
										</button>  -->
									</th>
								</tr>
							</thead>
							<thead>
								<tr>
									<th>
										Showcase Category
									</th>    
									<th>
										Location Name
									</th>    
									<th>
										Command
									</th>
									<th width="122">
										Deletion
									</th>
								</tr>
							</thead>
							<tbody class="f_tbody_location">
								@if(count($show)>0)
									@foreach($show as $key)
									<tr class="f_disabled" height="">
										<td> {{$key->id_category}} </td>   
										<td> {{$key->venue_name}} - {{$key->venue_city}} </td>   
										<td>
											<input type="hidden" value="">
											<button type="button" class="btn btn-primary edit_venue" data-toggle="modal" data-target=".pop_up_edit_location" data-backdrop="static">Edit Info</button>
											<input type="hidden" value="{{$key->id}}"> 
											@if($key->hide == 0)
												<button type="button" class="btn btn-warning f_enableDisable hide_show" style="width: 72px;">Hide</button> 
											@else
												<button type="button" class="btn btn-success f_enableDisable unhide_show" style="width: 72px;">Unhide</button>
											@endif
										</td>
										<td>
											<input type="hidden" value="{{$key->id}}">
											<button type="button" class="btn btn-danger f_delete_category" data-toggle="modal" data-target=".pop_up_delete_location">
												<span class="glyphicon glyphicon-warning-sign" style="margin-right: 10px;"></span>
												Delete
												<span class="glyphicon glyphicon-warning-sign" style="margin-left: 10px;"></span>
											</button>
										</td>
									</tr> 
									@endforeach
								@endif
								 
							</tbody>
						</table>


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
 
//tambah location
/*$('body').on('click','#f_add_new_location',function(){
	var new_location = 	'<tr class="f_disabled" height="">';
	new_location += 	'	<td>'+ $('#f_input_showcase').val() +'</td>   ';
	new_location += 	'	<td>'+ $('#f_input_venue_name').val() +' - '+ $('#f_input_city_name').val() +'</td>   ';
	new_location += 	'	<td>';
	new_location += 	'		<input type="hidden" value="">';
	new_location += 	'		<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".pop_up_edit_location">Edit Info</button>';
	new_location += 	'		<input type="hidden" value=""> ';
	new_location += 	'		<button type="button" class="btn btn-warning f_enableDisable" style="width: 72px;">Hide</button> ';
	new_location += 	'		<button type="button" class="btn btn-success f_enableDisable hidden" style="width: 72px;">Unhide</button> ';
	new_location += 	'	</td>';
	new_location += 	'	<td>';
	new_location += 	'		<input type="hidden" value="">';
	new_location += 	'		<button type="button" class="btn btn-danger f_delete_category" data-toggle="modal" data-target=".pop_up_delete_location">';
	new_location += 	'			<span class="glyphicon glyphicon-warning-sign" style="margin-right: 10px;"></span>';
	new_location += 	'			Delete';
	new_location += 	'			<span class="glyphicon glyphicon-warning-sign" style="margin-left: 10px;"></span>';
	new_location += 	'		</button>';
	new_location += 	'	</td>';
	new_location += 	'</tr>  ';
	$('.f_tbody_location').append(new_location);
});*/

//get showcases
function get_showcases(){
	$category = $('#filter_combo option:selected').val();
	$.ajax({
		type: 'GET',
		url: "{{url('admin/showcase')}}/"+$category,
		success: function(response){
			var loc_div ='';
			$.each(response,function(){
				loc_div+='<tr class="f_disabled" height="">';
				loc_div+='<td> '+$(this)[0].id_category+' </td>   ';
				loc_div+='<td> '+$(this)[0].venue_name+' - '+$(this)[0].venue_city+' </td>   ';
				loc_div+='<td>';
				loc_div+='<input type="hidden" value="">';
				loc_div+='<button type="button" class="btn btn-primary edit_venue" data-toggle="modal" data-target=".pop_up_edit_location" data-backdrop="static">Edit Info</button>';
				loc_div+='<input type="hidden" value="'+$(this)[0].id+'"> ';
				if($(this)[0].hide== 0){
					loc_div+='	<button type="button" class="btn btn-warning f_enableDisable hide_show" style="width: 72px;">Hide</button> ';
				}
				else{
					loc_div+='	<button type="button" class="btn btn-success f_enableDisable unhide_show" style="width: 72px;">Unhide</button>';
				}

				loc_div+='</td>';
				loc_div+='<td>';
				loc_div+='<input type="hidden" value="'+$(this)[0].id+'">';
				loc_div+='<button type="button" class="btn btn-danger f_delete_category" data-toggle="modal" data-target=".pop_up_delete_location">';
				loc_div+='<span class="glyphicon glyphicon-warning-sign" style="margin-right: 10px;"></span>';
				loc_div+='Delete';
				loc_div+='<span class="glyphicon glyphicon-warning-sign" style="margin-left: 10px;"></span>';
				loc_div+='</button>';
				loc_div+='</td>';
				loc_div+='</tr> ';
			});
			$('.f_tbody_location').html(loc_div);
		},
		error: function(jqXHR, textStatus, errorThrown){
			alert(errorThrown);
		}
	});
}

//SLIDESHOW add LOCATION
//tambah


var tambah = 0;

$('body').on('click','#new_location',function(){
	tambah = 0;
	image_array = [];
	image_count = 0;
});

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

//SLIDESHOW edit LOCATION

var image_array = [];
var image_count = 0;

//tambah
var tambah = 0;
$('body').on('click','.f_add_new_edit_picture',function(){
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
	$('.f_picture_edit_container').append(new_picture);
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
				// alert(response);
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

//add new location

$('body').on('click','#f_add_new_location',function(){
	$('.f_spinner_load').css('opacity','1');
	$category = $('#f_input_showcase option:selected').val();
	$venue_name = $('#f_input_venue_name').val();
	$city_name = $('#f_input_city_name').val();
	
	$formData = new FormData();
		
	$formData.append('category',$category);
	$formData.append('name',$venue_name);
	$formData.append('city',$city_name);
	
	$formData.append('count',image_count);
		
		
	for($i=0;$i<image_count;$i++){
		$formData.append('image'+$i,image_array[$i]);
	}
	$.ajax({
		type: 'POST',
		url: "{{url('admin/showcase')}}",
		data:$formData,
		processData:false,
		contentType: false,
		success: function(response){		
			$('.f_spinner_load').css('opacity','0');
			$('.modal').modal('hide');
			$(document).ready(fadingInfo('location ' + response + ' added','btn-success')); 
			//alert(response);
			get_showcases();
		},
		error: function(jqXHR, textStatus, errorThrown){		
			$('.f_spinner_load').css('opacity','0');
			alert(errorThrown);
		}
	});
});

function get_detail_showcase($id){

	$.ajax({
		type: 'GET',
		url: "{{url('admin/showcaseId')}}/"+$id,
		success: function(response){
			//alert(response);
			$('#f_edit_showcase').val(response.id_category);
			$('#f_edit_venue_name').val(response.venue_name);
			$('#f_edit_city_name').val(response.venue_city);
			$('#edit_showcase_id').val(response.id);
			//ajax get photo
			$.ajax({
				type: 'GET',
				url: "{{url('admin/showcase_photo')}}/"+$id,
				success: function(response){
					var photo_div = '';
					$.each(response,function(){
						photo_div+='<div class="form-group">';
						photo_div+='<label class="g-sm-3 control-label">Picture</label>';
						photo_div+='<div class="g-sm-3">';
						photo_div+='<img src="{{asset("/")}}'+$(this)[0].file_path+'" width="156" height="100">';	
						photo_div+='</div>';
						photo_div+='<div class="g-sm-5">';
						//photo_div+='<input type="hidden" value="tambahImg0">';
						//photo_div+='<input type="file" class="f_pic_identity" value="" accept="image/*">';	
						//photo_div+='<div style="margin-top: 10px; display: block; float: left;"><b>File Size:</b><span class="tambahImg0"></span></div>';	
						photo_div+='</div>';
						photo_div+='<div class="g-sm-1">';
						photo_div+='<input type="hidden" value="'+$(this)[0].id+'">';
						photo_div+='<button type="button" class="btn btn-danger f_delete_this_picture">';
						photo_div+='<span class="glyphicon glyphicon-remove"></span>'; 
						photo_div+='</button>';
						photo_div+='<input type="hidden" value="1" />'
						photo_div+='</div>';
						photo_div+='</div>';
					});
					$('.f_picture_edit_container').html(photo_div)
					
				},
				error: function(jqXHR, textStatus, errorThrown){
					alert(errorThrown);
				}
			});
			//$('#f_picture_edit_container')
			
		},
		error: function(jqXHR, textStatus, errorThrown){
			alert(errorThrown);
		}
	});
}

//edit
$('body').on('click','.edit_venue',function(){
	tambah = 0;
	image_array = [];
	image_count = 0;
	
	$id = $(this).next().val();
	
	//alert($id);
	
	//ajax view 1 showcase
	get_detail_showcase($id);
});

$('body').on('click','#f_edit_location',function(){	
	$('.f_spinner_load').css('opacity','1');
	$category = $('#f_edit_showcase option:selected').val();
	$venue_name = $('#f_edit_venue_name').val();
	$city_name = $('#f_edit_city_name').val();
	$id = $(this).prev().val();
	
	$formData = new FormData();
		
	$formData.append('category',$category);
	$formData.append('name',$venue_name);
	$formData.append('city',$city_name);
	
	$formData.append('count',image_count);

	for($i=0;$i<image_count;$i++){
		$formData.append('image'+$i,image_array[$i]);
	}
	$.ajax({
		type: 'POST',
		url: "{{url('admin/edit_showcase')}}/"+$id,
		data:$formData,
		processData:false,
		contentType: false,
		success: function(response){
			$('.f_spinner_load').css('opacity','0');
			$('.modal').modal('hide');
			$(document).ready(fadingInfo(response,'btn-success')); 
			// alert(response);
			get_showcases();
		},
		error: function(jqXHR, textStatus, errorThrown){
			$('.f_spinner_load').css('opacity','0');
			// alert(errorThrown);
		}
	});
});


//delete edit_photo

//hide
$('body').on('click','.hide_show',function(){
	$id = $(this).prev().val();
	$.ajax({
		type: 'PUT',
		url: "{{url('admin/hide_showcase')}}/"+$id,
		data:{
			'hide':1
		},
		success: function(response){
			$(document).ready(fadingInfo(response,'btn-warning')); 
			// alert(response);
			get_showcases();
		},
		error: function(jqXHR, textStatus, errorThrown){
			// alert(errorThrown);
		}
	});
});
//unhide
$('body').on('click','.unhide_show',function(){
	$id = $(this).prev().val();
	$.ajax({
		type: 'PUT',
		url: "{{url('admin/hide_showcase')}}/"+$id,
		data:{
			'hide':0
		},
		success: function(response){
			$(document).ready(fadingInfo(response,'btn-success')); 
			// alert(response);
			get_showcases();
		},
		error: function(jqXHR, textStatus, errorThrown){
			// alert(errorThrown);
		}
	});
});

//filter
// $('body').on('click','#filter_show',function(){
// 	get_showcases();
//});
$( "#filter_combo" ).change(function() {
	get_showcases();
});

//delete
$('body').on('click','.f_delete_category',function(){

	$id = $(this).prev().val();
	$('#delLbId').val($id);
	
});

$('body').on('click','.delLbPo',function(){
	$('.f_spinner_load').css('opacity','1');
	$id = $('#delLbId').val();
	$.ajax({
		type: 'DELETE',
		url: "{{url('admin/showcase')}}/"+$id,
		success: function(response){
			$('.f_spinner_load').css('opacity','0');
			$('.modal').modal('hide');
			$(document).ready(fadingInfo(response,'btn-danger')); 
			// alert(response);
			get_showcases();
		},
		error: function(jqXHR, textStatus, errorThrown){
			$('.f_spinner_load').css('opacity','0');
			// alert(errorThrown);
		}
	});
});



</script>


@stop
