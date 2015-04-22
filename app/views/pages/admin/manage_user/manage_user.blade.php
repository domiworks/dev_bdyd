@extends('layouts.admin_layout')
@section('content')	
<div class="container-fluid">
	<div class="row">
		<div class="g-lg-10 g-lg-push-1">
			<div class="s_title_n_control">
				<h2 style="">
					Manage User
					<button class="btn btn-success pull-right" data-toggle="modal" data-target=".pop_up_add_user">
						<span class="glyphicon glyphicon-plus" style="margin-right: 5px;"></span>Add New User
					</button>
				</h2>
				<!--<a href="index.php" class="btn btn-default" style="float: right; margin-top: 20px; margin-right: 10px;">Back</a> -->
			</div>

			<span class="clearfix"></span>
			<hr></hr>

			<div class="panel panel-default">
				<div class="panel-body">
					<div class="row">
						<div class="g-lg-12">
							<table class="table table-striped">
								<thead>
									<tr> 
										<th>
											Username
										</th>
										<th>
											Command
										</th>
									</tr>
								</thead>
								<tbody class="f_tbody_user">
									@foreach($user_list as $user_key)
										<tr> 
											<td>
												{{$user_key->username}}
											</td>
											<td>
 												<button id="edUsButton" class="btn btn-warning btn-sm edUs" type="button"  data-toggle="modal" data-target=".pop_up_edit_password" data-backdrop="static" style="float: left;">Edit Password</button>
												<input type='hidden' value='{{$user_key->id}}' />
												<button id="delUserButton" type="button" class="btn btn-danger btn-sm delUs" data-toggle="modal" data-target=".pop_up_delete_user" style="float: left; margin-left: 5px;">Delete</button>
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
</div>
</div>

@include('pages.admin.manage_user.pop_up_add_user')
@include('pages.admin.manage_user.pop_up_edit_user')
@include('pages.admin.manage_user.pop_up_edit_password')
@include('pages.admin.manage_user.pop_up_delete_user')


<script>

/*$('body').on('click','#f_add_new_user',function(){
	var new_user = 	'<tr>';
	new_user += 	'	<td>';
	new_user += 	''+ $('#f_get_username').val() +'';
	new_user += 	'	</td>';
	new_user += 	'	<td>';
	new_user += 	'		<button id="edUsButton" class="btn btn-warning btn-sm edUs" type="button"  data-toggle="modal" data-target=".pop_up_edit_user">Edit</button>';
	new_user += 	'		<button id="delUserButton" type="button" class="btn btn-danger btn-sm delUs" data-toggle="modal" data-target=".pop_up_delete_user">Delete</button>';
	new_user += 	'	</td>';
	new_user += 	'</tr>';
 
	$('.f_tbody_user').append(new_user);
});  */

</script>

<!--engine user-->

<script>
	function get_user_list(){
		
		$.ajax({
			type: 'GET',
			url: "{{url('admin/user_list')}}",
			success: function(response){
				var user_list = '';
				$.each(response,function(){
					user_list+='<tr>'; 
					user_list+='<td>';
					user_list+=$(this)[0].username;
					user_list+='</td>';
					user_list+='<td>';
					user_list+='<button id="edUsButton" class="btn btn-warning btn-sm edUs" type="button"  data-toggle="modal" data-target=".pop_up_edit_password">Edit Password</button>';
					user_list+='<input type="hidden" value="'+$(this)[0].id+'" />';
					user_list+='<button id="delUserButton" type="button" class="btn btn-danger btn-sm delUs" data-toggle="modal" data-target=".pop_up_delete_user">Delete</button>';
					user_list+='</td>';
					user_list+='</tr>';
				});
				
				$('.f_tbody_user').html(user_list);
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert(errorThrown);
			}
		});
	}
	
	$('body').on('click','#f_add_new_user',function(){
	$('.f_spinner_load').css('opacity','1');
		$username = $('#f_get_username').val();
		$password = $('#f_get_password').val();
		
		$.ajax({
			type: 'POST',
			url: "{{url('admin/add_new_user')}}",
			data:{
				'username':$username,
				'password':$password
			},
			success: function(response){
				$('.f_spinner_load').css('opacity','0');
				$('.modal').modal('hide');
				$(document).ready(fadingInfo(response,'btn-success')); 
				//alert(response);
				get_user_list();
			},
			error: function(jqXHR, textStatus, errorThrown){
				$('.f_spinner_load').css('opacity','0');
				alert(errorThrown);
			}
		});
	});
	
	$('body').on('click','#edUsButton',function(){
		$('#user_id').val($(this).next().val());
	});
	
	$('body').on('click','#f_add_edit_user_password',function(){
		$('.f_spinner_load').css('opacity','1');
		$old_password = $('#f_get_old_password').val();
		$new_password = $('#f_get_new_password').val();
		$re_password = $('#f_get_retype_password').val();
		$id = $(this).prev().val();
		if($new_password == $re_password){
			$.ajax({
				type: 'PUT',
				url: "{{url('admin/update_password')}}/"+$id,
				data:{
					'password':$old_password,
					'new_password':$new_password
				},
				success: function(response){
					if(response != 0){
						$('.f_spinner_load').css('opacity','0');
						$('.f_wrong_old_password').addClass('hidden'); 
						$('.modal').modal('hide');
						$(document).ready(fadingInfo('Password changed','btn-success')); 
					}else{ 
						$('.f_spinner_load').css('opacity','0');
						$('.f_wrong_old_password').removeClass('hidden');
					}
				},
				error: function(jqXHR, textStatus, errorThrown){
					alert(errorThrown); 
					$('.f_spinner_load').css('opacity','0'); 
				}
			});
		}
		
	});
	
	$('body').on('click','#delUserButton',function(){
		$('#idDelUser').val($(this).prev().val());
	});
	
	$('body').on('click','#yes_delete_user',function(){
		$('.f_spinner_load').css('opacity','1');
		$id = $(this).prev().val();
		$.ajax({
			type: 'DELETE',
			url: "{{url('admin/delete_user')}}/"+$id,
			success: function(response){
				$('.f_spinner_load').css('opacity','0');
				$('.modal').modal('hide');
				$(document).ready(fadingInfo(response + 'has been deleted','btn-success')); 
				// alert(response);
				get_user_list();
			},
			error: function(jqXHR, textStatus, errorThrown){
				$('.f_spinner_load').css('opacity','0');
				alert(errorThrown);
			}
		});
		
	});
</script>

@stop
