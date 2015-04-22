@extends('layouts.admin_layout')
@section('content')	
<div class="container-fluid">
<input type='hidden' value='{{$id_category}}' id='current_category_id' />
	<div class="g-sm-12">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="{{URL::to('admin/manage_material')}}">Material Category</a></li> 
				<li class="active">Product List</li> 
			</ol>
		</div>
		<div class="g-sm-10 g-sm-push-1"> 
			<div class="s_title_n_control">
				<h2 style="">
					Product List
					<button id='add_product' class="btn btn-success pull-right" data-toggle="modal" data-target=".pop_up_add_product" data-backdrop="static">
						<span class="glyphicon glyphicon-plus" style="margin-right: 5px;"></span>New Product
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
									<th>
										Product Name
									</th>    
									<th>
										Image
									</th>    
									<th>
										Command
									</th>
									<th width="122">
										Deletion
									</th>
								</tr>
							</thead>
							<tbody class="f_tbody_product">
								@foreach($list_product as $key_product)
									<tr class="f_disabled" height="87">
										<td> {{$key_product->name}} </td>   
										<td>
											<img src="{{asset($key_product->photo_path)}}" height="70" width="70">
										</td>   
										<td>
											<button type="button" class="btn btn-primary edit_product_but" data-toggle="modal" data-backdrop="static" data-target=".pop_up_edit_product">Edit Info</button>
											<input type="hidden" value="{{$key_product->id}}" /> 
											@if($key_product->hide == 0)
												<button type="button" class="btn btn-warning f_enableDisable hide_product" style="width: 72px;">Hide</button> 
											@else
												<button type="button" class="btn btn-success f_enableDisable unhide_product" style="width: 72px;">Unhide</button>
											@endif
										</td>
										<td>
											<input type="hidden" value="{{$key_product->id}}" />
											<button type="button" class="btn btn-danger f_delete_category" data-toggle="modal" data-target=".pop_up_delete_product">
												<span class="glyphicon glyphicon-warning-sign" style="margin-right: 10px;"></span>
												Delete
												<span class="glyphicon glyphicon-warning-sign" style="margin-left: 10px;"></span>
											</button>
										</td>
									</tr> 
								@endforeach
							</tbody>
						</table>


					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@include('pages.admin.manage_material.pop_up_add_product')
@include('pages.admin.manage_material.pop_up_edit_product')
@include('pages.admin.manage_material.pop_up_delete_product')



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


<script> 
 
 
//tambah produk
/*$('body').on('click','#f_add_new_product',function(){

	var new_product = 	'<tr class="f_disabled" height="87">';
	new_product += 		'	<td>'+ $('#f_input_prodname').val() +'</td>  '; 
	new_product += 		'	<td>';
	new_product += 		'		<img src="" height="70" width="70">';
	new_product += 		'	</td> ';  
	new_product += 		'	<td>';
	new_product += 		'		<input type="hidden" value="">';
	new_product += 		'		<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".pop_up_edit_product">Edit Info</button>';
	new_product += 		'		<input type="hidden" value=""> ';
	new_product += 		'		<button type="button" class="btn btn-warning f_enableDisable" style="width: 72px;">Hide</button> ';
	new_product += 		'		<button type="button" class="btn btn-success f_enableDisable hidden" style="width: 72px;">Unhide</button> ';
	new_product += 		'	</td>';
	new_product += 		'	<td>';
	new_product += 		'		<input type="hidden" value="">';
	new_product += 		'		<button type="button" class="btn btn-danger f_delete_category" data-toggle="modal" data-target=".pop_up_delete_product">';
	new_product += 		'			<span class="glyphicon glyphicon-warning-sign" style="margin-right: 10px;"></span>';
	new_product += 		'			Delete';
	new_product += 		'			<span class="glyphicon glyphicon-warning-sign" style="margin-left: 10px;"></span>';
	new_product += 		'		</button>';
	new_product += 		'	</td>';
	new_product += 		'</tr> '; 
	$('.f_tbody_product').append(new_product);
});*/


//delete
/*$('body').on('click','.f_delete_this_picture',function(){
	$(this).closest('.form-group').remove(); 
});*/



var f_cek_image; 

var new_product_photo = '';

$('body').on('change','.f_pic_identity',function (evt) {
	f_cek_image = $(this).prev().val();  
	var i = 0, len = this.files.length, img, reader, file;
	for ( ; i < len; i++ ) {
		file = this.files[i];
		new_product_photo = file;
		if (!!file.type.match(/image.*/)) {
			if ( window.FileReader ) {
				reader = new FileReader();
				reader.onloadend = function (e) { 
					f_imageRawSrc(e.target.result, file.fileName);
					f_imageRawFileSize(escape(file.size));
				};
				reader.readAsDataURL(file);
			}
		}
	} 
});

$('body').on('change','.f_pic_identity',function (evt) {
	f_cek_image = $(this).prev().val();  
	var i = 0, len = this.files.length, img, reader, file;
	for ( ; i < len; i++ ) {
		file = this.files[i];
		new_product_photo = file;
		if (!!file.type.match(/image.*/)) {
			if ( window.FileReader ) {
				reader = new FileReader();
				reader.onloadend = function (e) { 
					f_imageRawSrc(e.target.result, file.fileName);
					f_imageRawFileSize(escape(file.size));
				};
				reader.readAsDataURL(file);
			}
		}
	} 
});
var edit_photo_product = '';
$('body').on('change','#edit_photo_product_chooser',function(){
	var i = 0, len = this.files.length, img, reader, file;
	for ( ; i < len; i++ ) {
		file = this.files[i];
		edit_photo_product = file;
		if (!!file.type.match(/image.*/)) {
			if ( window.FileReader ) {
				reader = new FileReader();
				reader.onloadend = function (e) { 
					$('#f_product_img_edit').attr('src',e.target.result);
					$('.edit_image_size').text(" " + (((escape(file.size))/1024)/1024).toFixed(2) + " MB" );
				};
				reader.readAsDataURL(file);
			}
		}
	} 
});

function f_imageRawSrc(source){
	$('#'+f_cek_image).attr('src',source);
}

function f_imageRawFileSize(source){
	$('.'+f_cek_image).text(" " + (((source)/1024)/1024).toFixed(2) + " MB" );
}


</script>

<script>
	function get_product_list(){
		$id = $('#current_category_id').val();
		$.ajax({
			type: 'GET',
			url: "{{url('admin/get_products')}}/"+$id ,
			success: function(response){
				var new_product ='';
				$.each(response,function(){
					new_product += 	'<tr class="f_disabled" height="87">';
					new_product += 		'	<td>'+ $(this)[0].name +'</td>  '; 
					new_product += 		'	<td>';
					new_product += 		'		<img src="{{asset("/")}}'+ $(this)[0].photo_path +'" height="70" width="70">';
					new_product += 		'	</td> ';  
					new_product += 		'	<td>';
					new_product += 		'		<button type="button" class="btn btn-primary edit_product_but" data-toggle="modal" data-target=".pop_up_edit_product">Edit Info</button>';
					new_product += 		'		<input type="hidden" value="'+ $(this)[0].id +'"> ';
					if($(this)[0].hide == 0){
						new_product += 		'		<button type="button" class="btn btn-warning f_enableDisable hide_product" style="width: 72px;">Hide</button> ';
					}
					else{
						new_product += 		'		<button type="button" class="btn btn-success f_enableDisable unhide_product" style="width: 72px;">Unhide</button> ';
					}
					new_product += 		'	</td>';
					new_product += 		'	<td>';
					new_product += 		'		<input type="hidden" value="'+ $(this)[0].id +'">';
					new_product += 		'		<button type="button" class="btn btn-danger f_delete_category" data-toggle="modal" data-target=".pop_up_delete_product">';
					new_product += 		'			<span class="glyphicon glyphicon-warning-sign" style="margin-right: 10px;"></span>';
					new_product += 		'			Delete';
					new_product += 		'			<span class="glyphicon glyphicon-warning-sign" style="margin-left: 10px;"></span>';
					new_product += 		'		</button>';
					new_product += 		'	</td>';
					new_product += 		'</tr> '; 
				});
				$('.f_tbody_product').html(new_product);
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert(errorThrown);
			}
		});
		
	}

	$('body').on('click','#add_product',function(){
		new_product_photo = '';
		$.ajax({
			type: 'GET',
			url: "{{url('admin/one_category')}}/"+$('#current_category_id').val(),
			success: function(response){
				$('#current_category_name').text(response.name);
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert(errorThrown);
			}
		});
	});
	
	$('body').on('click','#f_add_new_product',function(){
		$('.f_spinner_load').css('opacity','1');
		$name=$('#f_input_prodname').val();
		$id_category = $('#current_category_id').val();
		$fd = new FormData();
		
		$fd.append('product_name',$name);
		$fd.append('product_photo',new_product_photo);
		
		$.ajax({
			type: 'POST',
			url: "{{url('admin/add_product')}}/"+$id_category,
			processData:false,
			contentType:false,
			data:$fd,
			success: function(response){
		$('.f_spinner_load').css('opacity','0');
				$('.modal').modal('hide');
				$(document).ready(fadingInfo(response,'btn-success')); 
				// alert(response);
				get_product_list();
			},
			error: function(jqXHR, textStatus, errorThrown){
		$('.f_spinner_load').css('opacity','0');
				alert(errorThrown);
			}
		});
		
	});
	
	//edit
	
	$('body').on('click','.edit_product_but',function(){
		$id = $(this).next().val();
		$.ajax({
			type: 'GET',
			url: "{{url('admin/one_category')}}/"+$('#current_category_id').val(),
			success: function(response){
				$('#edit_current_category').text(response.name);
					$.ajax({
						type: 'GET',
						url: "{{url('admin/get_one_product')}}/"+$id,
						success: function(response){
							edit_photo_product = '';
							
							$('#f_edit_prodname').val(response.name);
							$('#edit_product_id').val(response.id);
							$('#f_product_img_edit').attr('src',"{{asset('/')}}"+response.photo_path);
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
	
	$('body').on('click','#f_edit_product',function(){
		$('.f_spinner_load').css('opacity','1');
		$id = $(this).prev().val();
		$name=$('#f_edit_prodname').val();
		
		$fd = new FormData();
		
		$fd.append('product_name',$name);
		$fd.append('product_photo',edit_photo_product);
		
		$.ajax({
			type: 'POST',
			url: "{{url('admin/edit_product')}}/"+$id,
			processData:false,
			contentType:false,
			data:$fd,
			success: function(response){
				$('.f_spinner_load').css('opacity','0');
				$('.modal').modal('hide');
				$(document).ready(fadingInfo(response,'btn-success')); 
				//alert(response);
				get_product_list();
			},
			error: function(jqXHR, textStatus, errorThrown){
				$('.f_spinner_load').css('opacity','0');
				alert(errorThrown);
			}
		});
	});
	
	//hide
	
	$('body').on('click','.hide_product',function(){
		$id = $(this).prev().val();
		$.ajax({
			type: 'PUT',
			url: "{{url('admin/hide_product')}}/"+$id,
			data:{
				'hide':1
			},
			success: function(response){
				$(document).ready(fadingInfo(response,'btn-warning')); 
				//alert(response);
				get_product_list();
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert(errorThrown);
			}
		});
	});
	
	$('body').on('click','.unhide_product',function(){
		$id = $(this).prev().val();
		$.ajax({
			type: 'PUT',
			url: "{{url('admin/hide_product')}}/"+$id,
			data:{
				'hide':0
			},
			success: function(response){
				$(document).ready(fadingInfo(response,'btn-success')); 
				//alert(response);
				get_product_list();
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert(errorThrown);
			}
		});
	});
	
	//delete
	$('body').on('click','.f_delete_category',function(){
		$('#delete_product_id').val($(this).prev().val());
	});
	
	$('body').on('click','#f_delete_product',function(){
		$('.f_spinner_load').css('opacity','1');
		$id = $(this).prev().val();
		$.ajax({
			type: 'DELETE',
			url: "{{url('admin/delete_product')}}/"+$id,
			success: function(response){
				$('.f_spinner_load').css('opacity','0');
				$('.modal').modal('hide');
				$(document).ready(fadingInfo(response,'btn-danger')); 
				//alert(response);
				get_product_list();
			},
			error: function(jqXHR, textStatus, errorThrown){
				$('.f_spinner_load').css('opacity','0');
				alert(errorThrown);
			}
		});
	});
</script>

@stop
