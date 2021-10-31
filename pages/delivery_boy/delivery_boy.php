<div class="text-info mt-3 d-flex justify-content-between">
	<h2 class="ml-3"> Delivery Boy Detailes</h2>
	<div id="alert_msg" style="height: 10px;"></div>
	<button class="btn btn-info" data-toggle="modal" data-target="#Add_DeliveryBoy_modal">Add Delivery Boy</button>
</div>
<div id="show_deliveryboy_data"></div>


<!-- Modal -->
<div class="modal fade" id="Add_DeliveryBoy_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">      
			<div class="modal-body">
				<h4 class="text-center mb-3"> Add Delivery Boy</h4>
				<form id="add_delivery_boy_form" method ="POST" autocomplete="off">
					<div class="form-group">
						<label>Name</label>
						<input type="text" id="name" class="form-control" placeholder="Enter Name">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" id="email" class="form-control" placeholder="Enter Email">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" id="password" class="form-control" placeholder="Enter Password">
					</div>
					<div class="form-group">
						<label>Mobile</label>
						<input type="number" id="mobile" class="form-control" placeholder="Enter Mobile">
					</div>
					<div class="form-group">
						<label>Added On</label>
						<input type="date" id="added" class="form-control" placeholder="Enter Date">
					</div>
					<div class="form-group">				
						<input type="hidden" id="status" value="1">
					</div>
					<div id="alert"></div>			
					<div class="d-flex justify-content-end">
						<div id="error_msg" style="height:10px"></div>
						<button type="submit" id="add_delivery_boy" class="btn btn-primary mr-2" data-dismiss="modal">Submit</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</form>        
			</div>      
		</div>
	</div>
</div>
<!-- Update delivery boy modal -->
<div class="modal fade" id="update_delivery_boy_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content"  id="deliveryboy_modal">  
			
		</div>
	</div>
</div>
<script src="js/delivery_boy.js"></script>