@extends('layouts.admin_layout')
@section('content')	
<div class="container-fluid">

	<div class="g-sm-12"> 
		<div class="s_title_n_control">
			<h2 style="">
				Manage Showcase 
			</h2> 
		</div>
		<span class="clearfix"></span>
		<hr></hr>

		<div class="row">

			<div class="g-sm-6"> 
				<div class="panel panel-default">
					<div class="panel-body"> 
					<button class="btn btn-success" data-toggle="modal" data-target=".pop_up_add_office"  data-backdrop="static">
						<span class="glyphicon glyphicon-plus" style="margin-right: 5px;"></span>New Office
					</button>
						<table class="table table-striped pull-left" style="">
							
							<thead>
								<tr>
									<th>
										Office Name
									</th>      
									<th>
										Command
									</th>
									<th width="122">
										Deletion
									</th>
								</tr>
							</thead>
							<tbody class="f_tbody_office">
								@foreach($list_offices as $key)
									<tr class="f_disabled" height="">
										<td> {{$key->name}} </td>    
										<td>
											<input type="hidden" value="{{$key->id}}" />
											<button type="button" class="btn btn-primary office_detail" data-toggle="modal" data-target=".pop_up_edit_office" data-backdrop="static" data-backdrop="static">Edit Info</button> 
										</td>
										<td>
											<input type="hidden" value="{{$key->id}}" />
											<button type="button" class="btn btn-danger f_delete_category" data-toggle="modal" data-target=".pop_up_delete_office">
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

			<div class="g-sm-6"> 
				<div class="panel panel-default">
					<div class="panel-body"> 
						<table class="table table-striped pull-left" style="">
							
							<thead>
								<tr>
									<th>
										Full Name
									</th>    
									<th>
										Email
									</th>    
									<th>
										Phone
									</th>
									<th>
										Date
									</th>
									<th>
										View
									</th>
								</tr>
							</thead>
							<tbody class="f_tbody_email"> 
								@foreach($list_messages as $key_messages)
									<tr class="f_disabled" height="">
										<td> {{$key_messages->full_name}} </td>   
										<td> {{$key_messages->email_from}} </td>   
										<td> {{$key_messages->phone}} </td>   
										<td> {{$key_messages->created_at}} </td>   
										<td>
											<input type="hidden" value="{{$key_messages->id}}" />
											<button type="button" class="btn btn-success detail_message" data-toggle="modal" data-target=".pop_up_view_email">
												<span class="glyphicon glyphicon-eye-open"></span>
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

@include('pages.admin.manage_contact.pop_up_view_email')
@include('pages.admin.manage_contact.pop_up_add_office')
@include('pages.admin.manage_contact.pop_up_edit_office')
@include('pages.admin.manage_contact.pop_up_delete_office') 


<script> 

//tambah office
$('body').on('click','#f_add_new_office',function(){
	var new_office = 	'<tr class="f_disabled" height="">';
	new_office += 	'	<td>'+ $('#f_input_office_name').val() +'</td>    ';
	new_office += 	'	<td>';
	new_office += 	'		<input type="hidden" value="" />';
	new_office += 	'		<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".pop_up_edit_office" data-backdrop="static">Edit Info</button> ';
	new_office += 	'	</td>';
	new_office += 	'	<td>';
	new_office += 	'		<input type="hidden" value="" />';
	new_office += 	'		<button type="button" class="btn btn-danger f_delete_category" data-toggle="modal" data-target=".pop_up_delete_office">';
	new_office += 	'			<span class="glyphicon glyphicon-warning-sign" style="margin-right: 10px;"></span>';
	new_office += 	'			Delete';
	new_office += 	'			<span class="glyphicon glyphicon-warning-sign" style="margin-left: 10px;"></span>';
	new_office += 	'		</button>';
	new_office += 	'	</td>';
	new_office += 	'</tr>  '; 
	$('.f_tbody_office').append(new_office);
});  
 
</script>
<!--engine contact-->

<script>
	function get_offices(){
		$.ajax({
			type: 'GET',
			url: "{{url('admin/office_list')}}",
			success: function(response2){
				var office_div='';
				$.each(response2,function(){
					office_div+='<tr class="f_disabled" height="">';
					office_div+='<td>'+$(this)[0].name+'</td>'; 
					office_div+='<td>';
					office_div+='<input type="hidden" value="'+$(this)[0].id+'" />';
					office_div+='<button type="button" class="btn btn-primary office_detail" data-toggle="modal" data-target=".pop_up_edit_office" data-backdrop="static">Edit Info</button> ';
					office_div+='</td>';
					office_div+='<td>';
					office_div+='<input type="hidden" value="'+$(this)[0].id+'" />';
					office_div+='<button type="button" class="btn btn-danger f_delete_category" data-toggle="modal" data-target=".pop_up_delete_office">';
					office_div+='<span class="glyphicon glyphicon-warning-sign" style="margin-right: 10px;"></span>';
					office_div+='Delete';
					office_div+='<span class="glyphicon glyphicon-warning-sign" style="margin-left: 10px;"></span>';
					office_div+='</button>';
					office_div+='</td>';
					office_div+='</tr>'; 
				});
						
				$('.f_tbody_office').html(office_div);
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert(errorThrown);
			}
		});
	}
	
	$('body').on('click','.add_new_office',function(){
		$('.f_spinner_load').css('opacity','1');
		$data = $('#add_office_form').serialize();
		$.ajax({
			type: 'POST',
			url: "{{url('admin/add_office')}}",
			data:$data,
			success: function(response){
				$('.f_spinner_load').css('opacity','0');
				$('.modal').modal('hide');
				$(document).ready(fadingInfo(response,'btn-success')); 
				// alert(response);
				get_offices();
			},
			error: function(jqXHR, textStatus, errorThrown){
				$('.f_spinner_load').css('opacity','0');
				alert(errorThrown);
			}
		});
	});
	
	$('body').on('click','.office_detail',function(){
		$id = $(this).prev().val();
		$.ajax({
			type: 'GET',
			url: "{{url('admin/detail_office')}}/"+$id,
			success: function(response){
				$('#office_id').val(response.id);
				$('#f_edit_office_name').val(response.name);
				$('#f_edit_office_address').val(response.address);
				$('#f_edit_office_phone').val(response.phone);
				$('#f_edit_office_fax').val(response.fax);
				$('#f_edit_office_email').val(response.email);
				$('#f_edit_office_day').val(response.business_day);
				$('#f_edit_office_closed').val(response.closed_day);
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert(errorThrown);
			}
		});
	});
	
	//edit office
	
	$('body').on('click','#f_edit_office',function(){
		$('.f_spinner_load').css('opacity','1');
		$id = $(this).prev().val();
		$data = $('#detail_office').serialize();
		$.ajax({
			type: 'PUT',
			url: "{{url('admin/edit_office')}}/"+$id,
			data:$data,
			success: function(response){
				$('.f_spinner_load').css('opacity','0');
				$('.modal').modal('hide');
				$(document).ready(fadingInfo(response,'btn-success')); 
				get_offices();
				// alert(response);
			},
			error: function(jqXHR, textStatus, errorThrown){
				$('.f_spinner_load').css('opacity','0');
				alert(errorThrown);
			}
		});
	});
	
	//delete
	$('body').on('click','.f_delete_category',function(){
		$('#hidAddId').val($(this).prev().val());
	});
	
	$('body').on('click','.del_office',function(){
		$('.f_spinner_load').css('opacity','1');
		$id = $(this).prev().val();
		$.ajax({
			type: 'DELETE',
			url: "{{url('admin/delete_office')}}/"+$id,
			success: function(response){
		$('.f_spinner_load').css('opacity','0');
				$('.modal').modal('hide');
				$(document).ready(fadingInfo(response,'btn-danger')); 
				get_offices();
				// alert(response);
			},
			error: function(jqXHR, textStatus, errorThrown){
		$('.f_spinner_load').css('opacity','0');
				alert(errorThrown);
			}
		});
	});
	
	//message
	$('body').on('click','.detail_message',function(){
		$id = $(this).prev().val();
		$.ajax({
			type: 'GET',
			url: "{{url('admin/detail_message')}}/"+$id,
			success: function(response){
				$('#message_name').text(response.full_name);
				$('#message_date').text(response.created_at)
				$('#message_email').text(response.email_from)
				$('#message_phone').text(response.phone)
				$('#message_subject').text(response.subject)
				$('#message_content').text(response.messages)
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert(errorThrown);
			}
		});
	})
	
</script>


@stop
