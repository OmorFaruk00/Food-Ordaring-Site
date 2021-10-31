<div class="text-info mt-3 d-flex justify-content-between">
	<h2 class="ml-3"> All Coupon Code</h2>
	<div id="alert_msg" style="height: 10px;"></div>
	<button class="btn btn-info" data-toggle="modal" data-target="#Add_modal">Add Coupon</button>
</div>
<div id="show_data"></div>


<!-- Modal -->
<div class="modal fade" id="Add_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">      
			<div class="modal-body">
				<h4 class="text-center mb-3"> UpdateCoupon </h4>
				<form id="add_delivery_boy_form" method ="POST" autocomplete="off">
					<div class="form-group">
						<label>Coupon Code</label>
						<input type="text" id="code" class="form-control" placeholder="Enter Code">
					</div>
					<div class="form-group">
						<label>Coupon Type</label>
						<input type="text" id="type" class="form-control" placeholder="Enter Type">
					</div>
					<div class="form-group">
						<label>Coupon Value</label>
						<input type="number" id="value" class="form-control" placeholder="Enter Value">
					</div>
					<div class="form-group">
						<label>Min Value</label>
						<input type="number" id="min_value" class="form-control" placeholder="Enter Value">
					</div>
					<div class="form-group">
						<label>Added On</label>
						<input type="date" id="added" class="form-control" placeholder="Enter Date">
					</div>
					<div class="form-group">
						<label>Expire On</label>
						<input type="date" id="expire" class="form-control" placeholder="Enter Date">
					</div>
					<div class="form-group">				
						<input type="hidden" id="status" value="1">
					</div>
					<div id="alert"></div>			
					<div class="d-flex justify-content-end">
						<div id="error_msg" style="height:10px"></div>
						<button type="submit" id="add_coupon" class="btn btn-primary mr-2" data-dismiss="modal">Submit</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</form>        
			</div>      
		</div>
	</div>
</div>
<!-- Update delivery boy modal -->
<div class="modal fade" id="update_coupon_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content"  id="update_modal">  
			
		</div>
	</div>
</div>
<script src="js/coupon_code.js"></script>