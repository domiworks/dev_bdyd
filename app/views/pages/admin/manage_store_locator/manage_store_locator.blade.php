@extends('layouts.admin_layout')
@section('content')	
<div class="container-fluid">
	<div class="row">
		<div class="g-lg-12">
			<div class="s_title_n_control">
				<h2 style="">
					Manage Store Locator
					<button class="btn btn-success pull-right f_add_map" data-toggle="modal" data-target=".pop_up_add_store_locator">
						<span class="glyphicon glyphicon-plus" style="margin-right: 5px;"></span>Add New Store
					</button>
				</h2>
				<!--<a href="index.php" class="btn btn-default" style="float: right; margin-top: 20px; margin-right: 10px;">Back</a> -->
			</div>
			<span class="clearfix"></span>
			<hr></hr>

			<div class="row">
				<div class="g-lg-12">
					<div class="panel panel-default">
						
						<div class="panel-heading">
							About FRUNK
						</div>
						<div class="panel-body" style="padding-top: 0px;">
							<table class="table">
								<thead>
									<tr>
										<th>
											Coordinate
										</th>
										<th>
											Location Name
										</th>
										<th>
											Address
										</th>
										<th>
											Command
										</th>
									</tr>
								</thead>
								<tbody class="f_tbody_store_locator">
									@if($hasil != null)
										@foreach($hasil as $key)
											<tr>
												<td>
													{{$key->coordinate}}
												</td>
												<td>
													{{$key->name}}
												</td>
												<td>
													{{$key->alamat}}
												</td>
												<td>
													<input type="hidden" value="{{$key->id}}">
													<button class="btn btn-warning btn-sm ed2"  data-toggle="modal" data-target=".pop_up_edit_store_locator">Edit</button>
													<input type="hidden" value="{{$key->id}}">
													<button class="btn btn-danger btn-sm del2"  data-toggle="modal" data-target=".pop_up_delete_store_locator">Delete</button>
												</td>
											</tr>
										@endforeach
									@elseif($hasil == null)
										<tr>
											<td colspan="4"> No Data Found </td>
										</tr>
									@endif
								</tbody>
							</table>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>

@include('pages.admin.manage_store_locator.pop_up_add_store_locator')
@include('pages.admin.manage_store_locator.pop_up_edit_store_locator')
@include('pages.admin.manage_store_locator.pop_up_delete_store_locator')

<script>

$("#sort tbody.f_tbody_product").sortable().disableSelection();
var fixHelper = function(e, ui) {
	ui.children().each(function() {
		$(this).width($(this).width());
	});
	return ui;
};
$("#sort tbody.f_tbody_product").sortable({
	helper: fixHelper
}).disableSelection();

$('body').on('click','.f_enableDisable',function(){
	$(this).addClass('hidden');
	$(this).siblings('.f_enableDisable').removeClass('hidden');
});

$('body').on('click','.del2',function(){
	$id = $(this).prev().val();
	$('#idDel').val($id);
});


$('body').on('click','.del',function(){
	$id = $(this).prev().val();
	$.ajax({
		type: 'DELETE',
		url: '{{URL::route('valen.deleteStoreLocat')}}',
		data: {
				'id' : $id},
		success: function(response) {
			if (response['code'] != 204) {
				//gagal..maka..
				alert("gagal");
			} else {
				alert('berhasil');
				location.reload();
			}
		},
		error: function(xhr, textStatus, errorThrown) {
			alert("readyState: " + xhr.readyState+"\nstatus: " + xhr.status);
			alert("responseText: " + xhr.responseText);
		}
	}, 'json');
});

$('body').on('click','.edit',function(){
	$id = $(this).prev().val();
	$coor = $('#f_get_edit_coordinate').val();
	$name = $('#f_edit_location_name').val();
	$add = $('#f_edit_location_address').val();
	$.ajax({
		type: 'PUT',
		url: '{{URL::route('valen.editStoreLocat')}}',
		data: {
				'id' : $id,
				'coordinate' :$coor,
				'name' : $name,
				'address' : $add
				},
		success: function(response) {
			if (response['code'] != 200) {
				//gagal..maka..
				alert("gagal");
			} else {
				alert('berhasil');
				//location.reload();
			}
		},
		error: function(xhr, textStatus, errorThrown) {
			alert("readyState: " + xhr.readyState+"\nstatus: " + xhr.status);
			alert("responseText: " + xhr.responseText);
		}
	}, 'json');
});

$('body').on('click','.ed2',function(){
	$id = $(this).prev().val();
	$('#f_get_edit_coordinate').html("");
	$('#f_edit_location_name').html("");
	$('#f_edit_location_address').html("");
	$.ajax({
		type: 'GET',
		url: '{{URL::route('valen.getDetailStoreLocat')}}',
		data: {
				'id' : $id
				},
		success: function(response) {
			if (response['code'] != 200) {
				//gagal..maka..
				alert("gagal");
			} else 
			{
			
				$('#f_get_edit_coordinate').val(response['messages']['0'].coordinate);
				$('#f_edit_location_name').val(response['messages']['0'].name);
				$('#f_edit_location_address').val(response['messages']['0'].alamat);
				$('#idEdit').val($id);
			}
		},
		error: function(xhr, textStatus, errorThrown) {
			alert("readyState: " + xhr.readyState+"\nstatus: " + xhr.status);
			alert("responseText: " + xhr.responseText);
		}
	}, 'json');
});

$('body').on('click','.add',function(){
	$coor = $('#f_get_coordinate').val();
	$name = $('#f_location_name').val();
	$add = $('#f_location_address').val();
	$.ajax({
		type: 'POST',
		url: '{{URL::route('valen.addStoreLocat')}}',
		data: {
				'coordinate' :$coor,
				'name' : $name,
				'address' : $add
				},
		success: function(response) {
			if (response['code'] != 201) {
				//gagal..maka..
				alert(response['code']);
			} else {
				alert('berhasil');
				location.reload();
			}
		},
		error: function(xhr, textStatus, errorThrown) {
			alert("readyState: " + xhr.readyState+"\nstatus: " + xhr.status);
			alert("responseText: " + xhr.responseText);
		}
	}, 'json');
});

$('.pop_up_store_locator').on('hidden.bs.modal',function(e){
	location.reload() ;
});

</script>



@stop
