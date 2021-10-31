<?php
include "../dbconnection.php";
if (isset($_POST['update_delivery_boy'])) {
	$id = $_POST['editid'];
	$edit_sql = "SELECT * FROM `delivery_boy` WHERE id = '$id'";
	$result1 = $conn->query($edit_sql);
	if($result1->num_rows > 0){
		while($row = $result1->fetch_assoc()){
			?> 
			<div class="modal-body">
				<h4 class="text-center mb-3"> Update Delivery Boy</h4>
				<form id="update_delivery_boy_form" method ="POST" autocomplete="off">
					<div class="form-group">
						<label>Name</label>
						<input type="text" id="up_name" class="form-control" placeholder="Enter Name" value="<?php echo $row['name']; ?>">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" id="up_email" class="form-control" placeholder="Enter Email" value="<?php echo $row['email']; ?>">
					</div>					
					<div class="form-group">
						<label>Mobile</label>
						<input type="number" id="up_mobile" class="form-control" placeholder="Enter Mobile" value="<?php echo $row['mobile']; ?>">
					</div>
					<div class="form-group">
						<label>Added On</label>
						<input type="date" id="up_added" class="form-control" placeholder="Enter Date" value="<?php echo $row['added_on']; ?>">
					</div>
					<div class="form-group">				
						<input type="hidden" id="status" value="1">
					</div>
					<div class="form-group">				
						<input type="hidden" id="up_id" value="<?php echo $row['id']; ?>">
					</div>
					<div id="alert"></div>			
					<div class="d-flex justify-content-end">
						<button type="submit" id="update_deliveryboy_action" class="btn btn-primary mr-2" data-dismiss="modal">Submit</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</form>         
			</div> 

			<?php
		}
	}
}
?> 


