<div class="modal fade pop_up_edit_store_locator" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" id="addButton" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Edit Store Location</h4>
			</div>
			<form class="form-horizontal" role="form">
				<div class="modal-body" style="padding-top: 0px;">
					<div class="row">

							<style type="text/css">
							/* Set a size for our map container, the Google Map will take up 100% of this container */
							#map-canvas-edit {
								height: 300px;
								width: 100%;
							}
							</style>
							<script type="text/javascript">
							</script>
							<div class="g-xs-12" id="map-canvas-edit" style="margin-bottom: 30px;"></div>

							<div class="g-sm-6 g-sm-push-3">
								<div class="row">
									<div class="form-group">
										<label class="g-sm-4 control-label">Coordinate</label>
										<div class="g-sm-8">
											<input type="text" class="form-control" id="f_get_edit_coordinate" readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="g-sm-4 control-label">Location Name</label>
										<div class="g-sm-8">
											<input type="text" id="f_edit_location_name" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label class="g-sm-4 control-label">Address</label>
										<div class="g-sm-8">
											<textarea type="text" id="f_edit_location_address" class="form-control"></textarea>
										</div>
									</div>
								</div>
							</div>
							


					</div>

				</div>
				<div class="modal-footer">
					<input type="hidden" id="idEdit">
					<button id="f_edit_new_store_location" type="button" class="btn btn-success edit">Edit</button>
					<button type="button" id="" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</form>
		</div>
	</div>
</div>