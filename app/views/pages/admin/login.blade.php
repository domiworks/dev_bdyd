@extends('layouts.admin_login_layout')
@section('content')	
<div class="container">
	<div class="row">
		<div class="g-sm-6 g-sm-push-3">
			<div class="s_tbl" style="height: 70vh;">
				<div class="s_cell">
					<form class="form-horizontal" action='{{url("admin/login_m")}}' method='post'>
						<div class="panel panel-default">
							<div class="panel-heading">Admin Panel Login Form</div>
							<div class="panel-body">
								<div class="form-group">
									<label class="g-sm-3 control-label">
										Username
									</label>
									<div class="g-sm-7">
										<input type="text" name='username' class="form-control" id="username" />
									</div>
								</div>
								<div class="form-group">
									<label class="g-sm-3 control-label">
										Password
									</label>
									<div class="g-sm-7">
										<input type="password" name='password' class="form-control" id="password" />
									</div>
								</div>
								<div class="form-group">
									<label class="g-sm-3 control-label">

									</label>
									<div class="g-sm-7">
										<input type="submit" class="btn btn-success logInAdm" value="Log In">
									</div>
								</div>
							</div>
						</div>
					</form>

				</div> 
			</div> 
		</div>
	</div>
</div>
<script>
</script>
@stop
