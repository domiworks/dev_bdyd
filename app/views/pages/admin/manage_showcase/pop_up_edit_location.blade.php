<div class="modal fade pop_up_edit_location" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" id="addButton" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Edit Location</h4>
				<svg width='30px' height='30px' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="f_spinner_load" style="top: 12px; left: 434px; position: absolute; opacity: 0;"><rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='242424' transform='rotate(0 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='242424' transform='rotate(30 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.08333333333333333s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='242424' transform='rotate(60 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.16666666666666666s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='242424' transform='rotate(90 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.25s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='242424' transform='rotate(120 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.3333333333333333s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='242424' transform='rotate(150 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.4166666666666667s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='242424' transform='rotate(180 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.5s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='242424' transform='rotate(210 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.5833333333333334s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='242424' transform='rotate(240 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.6666666666666666s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='242424' transform='rotate(270 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.75s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='242424' transform='rotate(300 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.8333333333333334s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='242424' transform='rotate(330 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.9166666666666666s' repeatCount='indefinite'/></rect></svg>
			</div>
			<form class="form-horizontal" role="form">
				<div class="modal-body">
					<div class="row">
						<div class="g-sm-12"><!-- g-sm-5 -->

							<div class="form-group">
								<label class="g-sm-4 control-label">Showcase Category</label>
								<div class="g-sm-5">
									<select id="f_edit_showcase" class="form-control" style="width: 140px;float: left;">
										<option value="0">Furniture</option>
										<option value="1">Apartment</option>
										<option value="2">Hotel</option>
										<option value="3">House</option>
										<option value="4">Office</option>
										<option value="5">Others</option>
									</select>
								</div> 
							</div> 
							<div class="form-group">
								<label class="g-sm-4 control-label">Venue Name</label>
								<div class="g-sm-5">
									<input type="hidden" value="">
									<input id="f_edit_venue_name" type="text" class="form-control" value="">	
								</div> 
							</div> 
							<div class="form-group">
								<label class="g-sm-4 control-label">City Name</label>
								<div class="g-sm-5">
									<input type="hidden" value="">
									<input id="f_edit_city_name" type="text" class="form-control" value="">	
								</div> 
							</div> 
						</div> 
					</div> 

					<div class="row">
						<div class="g-sm-12">
							<div class="panel panel-default"> 
								<div class="panel-body">
									<div class="g-sm-10 f_picture_edit_container"><!-- g-sm-5 -->  
										<!--<div class="form-group">
											<label class="g-sm-3 control-label">Picture</label>
											<div class="g-sm-3">
												<img id="tambahImg0" src="" width="156" height="100">	
											</div>
											<div class="g-sm-5">
												<input type="hidden" value="tambahImg0">
												<input type="file" class="f_pic_identity" value="" accept="image/*">	
												<div style="margin-top: 10px; display: block; float: left;"><b>File Size:</b><span class="tambahImg0"></span></div>	
											</div>
											<div class="g-sm-1">
												<input type="hidden" value="tambahImg0">
												<button type="button" class="btn btn-danger f_delete_this_picture">
													<span class="glyphicon glyphicon-remove"></span> 
												</button>
											</div>
										</div>-->

									</div>
									<div class="g-sm-2  "><!-- g-sm-5 --> 
										<div class="form-group"> 
											<div class="g-sm-12">
												<button type="button" class="btn btn-sm btn-success f_add_new_edit_picture">
													<span class="glyphicon glyphicon-plus" style="margin-right: 5px;"></span>
													New Picture
												</button>
											</div>
										</div>

									</div>

								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<input type='hidden' id='edit_showcase_id' />
					<button id="f_edit_location" type="button" class="btn btn-success" data-dismiss="modal">Save</button>
					<button type="button" id="" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</form>
		</div>
	</div>
</div>