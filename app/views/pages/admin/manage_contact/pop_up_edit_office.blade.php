<div class="modal fade pop_up_edit_office" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" id="addButton" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Edit Office</h4>
				<svg width='30px' height='30px' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="f_spinner_load" style="top: 12px; left: 434px; position: absolute; opacity: 0;"><rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='242424' transform='rotate(0 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='242424' transform='rotate(30 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.08333333333333333s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='242424' transform='rotate(60 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.16666666666666666s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='242424' transform='rotate(90 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.25s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='242424' transform='rotate(120 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.3333333333333333s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='242424' transform='rotate(150 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.4166666666666667s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='242424' transform='rotate(180 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.5s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='242424' transform='rotate(210 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.5833333333333334s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='242424' transform='rotate(240 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.6666666666666666s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='242424' transform='rotate(270 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.75s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='242424' transform='rotate(300 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.8333333333333334s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='242424' transform='rotate(330 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.9166666666666666s' repeatCount='indefinite'/></rect></svg>
			</div>
			<form class="form-horizontal" id='detail_office' role="form">
				<div class="modal-body">
					<div class="row">
						<div class="g-sm-12"><!-- g-sm-5 --> 
							<div class="form-group">
								<label class="g-sm-4 control-label">Office Name</label>
								<div class="g-sm-5">
									<input id="f_edit_office_name" type="text" name='office_name' class="form-control" value="">	
								</div> 
							</div> 
							<div class="form-group">
								<label class="g-sm-4 control-label">Office Address</label>
								<div class="g-sm-5">
									<input id="f_edit_office_address" type="text" name='office_address' class="form-control" value="">	
								</div> 
							</div> 
							<div class="form-group">
								<label class="g-sm-4 control-label">Telephone</label>
								<div class="g-sm-5">
									<input id="f_edit_office_phone" type="text" name='office_phone' class="form-control" value="">	
								</div> 
							</div> 
							<div class="form-group">
								<label class="g-sm-4 control-label">Fax</label>
								<div class="g-sm-5">
									<input id="f_edit_office_fax" type="text" name='office_fax' class="form-control" value="">	
								</div> 
							</div> 
							<div class="form-group">
								<label class="g-sm-4 control-label">Email Address</label>
								<div class="g-sm-5">
									<input id="f_edit_office_email" type="text" name='office_email' class="form-control" value="">	
								</div> 
							</div>  
							<hr></hr>
							<div class="form-group">
								<label class="g-sm-4 control-label">Business Days</label>
								<div class="g-sm-5">
									<input id="f_edit_office_day" type="text" name='office_day' class="form-control" value="">	
								</div> 
							</div> 
							<div class="form-group">
								<label class="g-sm-4 control-label">Closed Days</label>
								<div class="g-sm-5">
									<input id="f_edit_office_closed" type="text" name='office_closed' class="form-control" value="">	
								</div> 
							</div> 
						</div> 
					</div>  

				</div>
				<div class="modal-footer">
					<input type='hidden' id='office_id'>
					<button id="f_edit_office" type="button" class="btn btn-success" data-dismiss="modal">Save</button>
					<button type="button" id="" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</form>
		</div>
	</div>
</div>