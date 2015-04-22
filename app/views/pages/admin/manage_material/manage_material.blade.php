@extends('layouts.admin_layout')
@section('content')	
<div class="container-fluid">
	<div class="g-sm-12">
		<div class="row">
			<ol class="breadcrumb">
				<li class="active">Material Category</li> 
			</ol>
		</div>
		<div class="g-sm-10 g-sm-push-1">
			<div class="s_title_n_control">
				<h2 style="">
					Material Category
					<button class="btn btn-success pull-right" data-toggle="modal" data-backdrop="static" data-target=".pop_up_add_category" >
						<span class="glyphicon glyphicon-plus" style="margin-right: 5px;"></span>New Category
					</button>
				</h2>
				<!--<a href="index.php" class="btn btn-default" style="float: right; margin-top: 20px; margin-right: 10px;">Back</a> -->
			</div>
			<span class="clearfix"></span>
			<hr></hr>

			<div>
				
				<div class="panel panel-default">
					<div class="panel-body">
						
						<!--<table class="table table-striped pull-left" style="width: 7%;">
							<thead>
								<tr>
									<th>
										Sequence
									</th>
								</tr>
							</thead>
							<tbody class="f_tbody_category_sequence"> 
							<?php
								$_i=0;
							?>
								@foreach($list_category as $category_key)
								
									<tr class="" height="51">
										<td>{{ $_i }}</td>
									</tr> 
							<?php
								$_i++;
							?>
								@endforeach
							</tbody>
						</table>-->
						<table class="table table-striped pull-left" id="sort" style="width: 90%;">
							<thead>
								<tr>
									<th>
										Material Name
									</th>   
									<th>
										Product List
									</th>
									<th>
										Command
									</th>
									<th width="122">
										Deletion
									</th>
								</tr>
							</thead>
							<tbody class="f_tbody_category">
								@foreach($list_category as $category_key)
									<tr class="f_disabled" height="51">
										<td> {{$category_key->name}} </td>  

										<td> 
											<a href="{{URL::to('admin/manage_material/product_list')}}/{{$category_key->id}} " class="btn btn-info">See Product List</a>
										</td>
										<td>
											<button type="button" class="btn btn-primary edit_category" data-toggle="modal" data-backdrop="static" data-target=".pop_up_edit_category">Edit Info</button>
											<input type="hidden" class='category_id' value="{{$category_key->id}}" />
											@if($category_key->hide == 0)
												<button type="button" class="btn btn-warning f_enableDisable hide_category" style="width: 72px;">Hide</button> 
												<!--<button type="button" class="btn btn-success f_enableDisable unhide_category hidden" style="width: 72px;">Unhide</button>-->
											@else
												<!--<button type="button" class="btn btn-warning f_enableDisable hide_category hidden" style="width: 72px;">Hide</button>-->
												<button type="button" class="btn btn-success f_enableDisable unhide_category" style="width: 72px;">Unhide</button> 
											@endif
										</td>
										<td>
											<input type="hidden" value="{{$category_key->id}}">
											<button type="button" class="btn btn-danger f_delete_category" data-toggle="modal" data-target=".pop_up_delete_category">
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

@include('pages.admin.manage_material.pop_up_add_category')
@include('pages.admin.manage_material.pop_up_edit_category')
@include('pages.admin.manage_material.pop_up_delete_category')


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
$("#sort tbody.f_tbody_category").sortable().disableSelection();
var fixHelper = function(e, ui) {
	ui.children().each(function() {
		$(this).width($(this).width());
	});
	return ui;
};
$("#sort tbody.f_tbody_category").sortable({
	helper: fixHelper
}).disableSelection();
var flag_update = true;
$('body').on('sortstart','.f_tbody_category',function(event,ui){
	$(this).attr('data-previndex', ui.item.index()+1);
});

$('body').on('sortstop','.f_tbody_category',function(event,ui){
	flag_update = true;
});
		
$('body').on('sortupdate','.f_tbody_category',function(event,ui){
	if(flag_update){
		flag_update = false;
		var newIndex = ui.item.index()+1;
		var oldIndex = $(this).attr('data-previndex');
		$(this).removeAttr('data-previndex');
		var id = ui.item.find('.category_id').val();
		
		$data ={
			'id':id, 
			'from':oldIndex,
			'to':newIndex
		};
			
		$.ajax({
			type: 'PUT',
			url:"{{URL('admin/edit_category_order')}}",
			data: $data,
			success: function(response){
				//alert(response);
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert(errorThrown);
			}
		});
	}	
});

var f_cek_image;  
 
//tambah kategori
/*$('body').on('click','#f_add_new_category',function(){
	var new_category = '<tr class="f_disabled" height="51">';
	new_category += 	'	<td>'+ $('#f_input_category_name').val()+'</td>';   
	new_category += 	'	<td>'; 
	new_category += 	'		<a href="{{URL::to('admin/manage_material/product_list')}}" class="btn btn-info">See Product List</a>';
	new_category += 	'	</td>';
	new_category += 	'	<td>';
	new_category += 	'		<input type="hidden" value="">';
	new_category += 	'		<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".pop_up_edit_category">Edit Info</button>';
	new_category += 	'		<input type="hidden" value=""> ';
	new_category += 	'		<button type="button" class="btn btn-warning f_enableDisable" style="width: 72px;">Hide</button> ';
	new_category += 	'		<button type="button" class="btn btn-success f_enableDisable hidden" style="width: 72px;">Unhide</button> ';
	new_category += 	'	</td>';
	new_category += 	'	<td>';
	new_category += 	'		<input type="hidden" value="">';
	new_category += 	'		<button type="button" class="btn btn-danger f_delete_category" data-toggle="modal" data-target=".pop_up_delete_category">';
	new_category += 	'			<span class="glyphicon glyphicon-warning-sign" style="margin-right: 10px;"></span>';
	new_category += 	'			Delete';
	new_category += 	'			<span class="glyphicon glyphicon-warning-sign" style="margin-left: 10px;"></span>';
	new_category += 	'		</button>';
	new_category += 	'	</td>';
	new_category += 	'</tr> ';
 
	 
	$('.f_tbody_category').append(new_category);
});*/


//delete
$('body').on('click','.f_delete_this_picture',function(){
	$(this).closest('.form-group').remove(); 
});



$('body').on('change','.f_pic_identity',function (evt) {
	f_cek_image = $(this).prev().val();  
	var i = 0, len = this.files.length, img, reader, file;
	for ( ; i < len; i++ ) {
		file = this.files[i];
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

function f_imageRawSrc(source){
	$('#'+f_cek_image).attr('src',source);
}
function f_imageRawFileSize(source){
	$('.'+f_cek_image).text(" " + (((source)/1024)/1024).toFixed(2) + " MB" );
}


</script>
<!--engine-->
<script>
	function get_category(){
		$.ajax({
			type: 'GET',
			url: "{{url('admin/category')}}",
			success: function(response){
				var material_list='';
				$.each(response,function(){
					material_list+='<tr class="f_disabled" height="51">';
					material_list+='<td>'+$(this)[0].name+' </td>  ';
					material_list+='<td> ';
					material_list+='<a href="{{URL::to("admin/manage_material/product_list")}}/'+$(this)[0].id+'" class="btn btn-info">See Product List</a>';
					material_list+='</td>';
					material_list+='<td>';
					material_list+='<button type="button" class="btn btn-primary edit_category" data-toggle="modal" data-target=".pop_up_edit_category">Edit Info</button>';
					material_list+='<input type="hidden" value="'+$(this)[0].id+'"> ';
					if($(this)[0].hide == 0){
						material_list+='<button type="button" class="btn btn-warning f_enableDisable hide_category" style="width: 72px;">Hide</button> ';
					}
					else{
						material_list+='<button type="button" class="btn btn-success f_enableDisable unhide_category" style="width: 72px;">Unhide</button> ';
					}
					material_list+='</td>';
					material_list+='<td>';
					material_list+='<input type="hidden" value="'+$(this)[0].id+'">';
					material_list+='<button type="button" class="btn btn-danger f_delete_category" data-toggle="modal" data-target=".pop_up_delete_category">';
					material_list+='<span class="glyphicon glyphicon-warning-sign" style="margin-right: 10px;"></span>';
					material_list+='Delete';
					material_list+='<span class="glyphicon glyphicon-warning-sign" style="margin-left: 10px;"></span>';
					material_list+='</button>';
					material_list+='</td>';
					material_list+='</tr> ';
				});
				
				$('.f_tbody_category').html(material_list);
				
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert(errorThrown);
			}
		});
	}
	
	
	$('body').on('click','#f_add_new_category',function(){
	$('.f_spinner_load').css('opacity','1');
		$new_category = $('#f_input_catname').val();
		$.ajax({
			type: 'POST',
			url: "{{url('admin/add_category')}}",
			data:{
				'category_name':$new_category
			},
			success: function(response){
				$('.f_spinner_load').css('opacity','0');
				$('.modal').modal('hide');
				$(document).ready(fadingInfo(response,'btn-success')); 
				// alert(response);
				get_category();
			},
			error: function(jqXHR, textStatus, errorThrown){
				$('.f_spinner_load').css('opacity','0');
				// alert(errorThrown);
			}
		});
	});
	
	//edit
	$('body').on('click','.edit_category',function(){
		$id = $(this).next().val();
		$.ajax({
			type: 'GET',
			url: "{{url('admin/one_category')}}/"+$id,
			success: function(response){
				$('#f_edit_catname').val(response.name);
				$('#edit_category_id').val(response.id);
				
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert(errorThrown);
			}
		});
		
	});
	
	$('body').on('click','#f_edit_category',function(){
		$id = $(this).prev().val();
		
		$.ajax({
			type: 'PUT',
			url: "{{url('admin/edit_category')}}/"+$id,
			data:{
				'name':$('#f_edit_catname').val()
			},
			success: function(response){
				alert(response);
				get_category();
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert(errorThrown);
			}
		});	
	});
	//hide
	$('body').on('click','.hide_category',function(){
		$id = $(this).prev().val();
		
		$.ajax({
			type: 'PUT',
			url: "{{url('admin/hide_category')}}/"+$id,
			data:{
				'hide':1
			},
			success: function(response){
				alert(response);
				get_category();
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert(errorThrown);
			}
		});	
	});
	
	$('body').on('click','.unhide_category',function(){
		$id = $(this).prev().val();
		
		$.ajax({
			type: 'PUT',
			url: "{{url('admin/hide_category')}}/"+$id,
			data:{
				'hide':0
			},
			success: function(response){
				alert(response);
				get_category();
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert(errorThrown);
			}
		});	
	});
	
	$('body').on('click','.f_delete_category',function(){
		$id = $(this).prev().val();
		
		$('#delete_category_id').val($id);
		
	});
	
	$('body').on('click','#f_delete_category',function(){
		$('.f_spinner_load').css('opacity','1');
		$id = $(this).prev().val();
		
		$.ajax({
			type: 'DELETE',
			url: "{{url('admin/delete_category')}}/"+$id,
			success: function(response){
				$('.f_spinner_load').css('opacity','0');
				$('.modal').modal('hide');
				$(document).ready(fadingInfo(response,'btn-danger')); 
				// alert(response);
				get_category();
			},
			error: function(jqXHR, textStatus, errorThrown){
				$('.f_spinner_load').css('opacity','0');
				// alert(errorThrown);
			}
		});	
	});
	
</script>


@stop
