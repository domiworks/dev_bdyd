<div class="modal fade pop_up_add_store_locator" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" id="addButton" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Add New Store Location</h4>
			</div>
			<form class="form-horizontal" role="form">
				<div class="modal-body" style="padding-top: 0px;">
					<div class="row">

							<style type="text/css">
							/* Set a size for our map container, the Google Map will take up 100% of this container */
							#map-canvas {
								height: 300px;
								width: 898px;
								position: relative !important;
								overflow: hidden !important;
								transform: translateZ(0px) translateZ(0px) !important;
								background-color: rgb(229, 227, 223) !important;
							}
							</style>

							<script type="text/javascript">
							var map;
							var coordArr;
								var tengahLaut = new google.maps.LatLng(4.625758360412755, 90.607679200000000000);

							function initialize() {
								var mapOptions = {
									zoom: 5,
									center: tengahLaut,
									mapTypeId: google.maps.MapTypeId.TERRAIN
								};
								map = new google.maps.Map(document.getElementById('map-canvas'),
									mapOptions);

								mapEdit = new google.maps.Map(document.getElementById('map-canvas-edit'),
									mapOptions);

							  // This event listener will call addMarker() when the map is clicked.
							  google.maps.event.addListener(map, 'click', function(event) {
							  	if(coordArr == null ){
							  		google.maps.event.trigger(map, 'resize');
							  	}else{
							  		coordArr.setMap(null);
							  		google.maps.event.trigger(map, 'resize');
							  	}
							  	addMarker(event.latLng);
							  	//alert(event.latLng);
							  	$('#f_get_coordinate').val(event.latLng);
							  }); 

							  google.maps.event.addListener(mapEdit, 'click', function(event) {
							  	if(coordArr == null ){
							  		google.maps.event.trigger(mapEdit, 'resize');
							  	}else{
							  		coordArr.setMap(null);
							  		google.maps.event.trigger(mapEdit, 'resize');
							  	}
							  	addMarkerEdit(event.latLng);
							  	//alert(event.latLng);
							  	$('#f_get_edit_coordinate').val(event.latLng);
							  });

							  setTimeout(function(){ google.maps.event.trigger(mapEdit, 'resize'); }, 2000);
							}


							function addMarker(location) {
								var marker = new google.maps.Marker({
									position: location,
									map: map
								});
								coordArr = marker;
							}

							function addMarkerEdit(location) {
								var marker = new google.maps.Marker({
									position: location,
									map: mapEdit
								});
								coordArr = marker;
							}

							google.maps.event.addDomListener(window, 'load', initialize);
							</script>
							<div id="map-canvas" style="margin-bottom: 30px; "></div>

							<div class="g-sm-6 g-sm-push-3">
								<div class="row">
									<div class="form-group">
										<label class="g-sm-3 control-label">Coordinate</label>
										<div class="g-sm-8">
											<input type="text" class="form-control" id="f_get_coordinate" readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="g-sm-3 control-label">Location Name</label>
										<div class="g-sm-8">
											<input type="text" id="f_location_name" class="form-control" placeholder="e.g. Cascade Bandung">
										</div>
									</div>
									<div class="form-group">
										<label class="g-sm-3 control-label">Address</label>
										<div class="g-sm-8">
											<textarea type="text" id="f_location_address" class="form-control" placeholder="e.g. Riau St. No. 23, Bandung, Indonesia"></textarea>
										</div>
									</div>
								</div>
							</div>
							


					</div>

				</div>
				<div class="modal-footer">
					<button id="f_add_new_store_location" type="button" class="btn btn-success add" data-dismiss="modal">Add</button>
					<button type="button" id="" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</form>
		</div>
	</div>
</div>