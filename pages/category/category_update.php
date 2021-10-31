<?php 
include "../dbconnection.php";
if (isset($_POST['edit'])) {
	$id = $_POST['editid'];
	$edit_sql = "SELECT * FROM `category` WHERE id = '$id'";
	$result1 = $conn->query($edit_sql);
	if($result1->num_rows > 0){
		while($row = $result1->fetch_assoc()){
			?>
			<div class="modal-body">
				<h4 class="text-center mb-3"> Update Category</h4>
				<form id="add_category_form" method ="POST" autocomplete="off">
					<div class="form-group">
						<label>Category</label>
						<input type="text" id="update_category_name" class="form-control" placeholder="Category Name" value="<?php echo $row['category']; ?>">
					</div>
					<div class="form-group">
						<label>Order Number</label>
						<input type="number" id="update_order" class="form-control" placeholder="Order Number" value="<?php echo $row['order_number']; ?>" >
					</div>
					<div class="form-group">
						<label>Added On</label>
						<input type="date" id="update_added_on" class="form-control" placeholder="add_date" value="<?php echo $row['added_on']; ?>">
					</div>
					<div class="form-group">				
						<input type="hidden" id="update_id" value="<?php echo $row['id']; ?>">
					</div>			
					<div class="d-flex justify-content-end">
						<div id="error_msg" style="height:10px"></div>
						<button type="submit" id="update_category" class="btn btn-primary mr-2" data-dismiss="modal">Submit</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</form>        
			</div>
			<?php
		}
	}
}
?>
<?php 
if(isset($_POST['category_update'])){
	$id = $_POST['id'];
	$category = $_POST['category'];
	$order_num = $_POST['order'];
	$added_on = $_POST['added'];	
	echo $sql = "UPDATE `category` SET `category`='$category',`order_number`='$order_num',`added_on`='$added_on' WHERE id ='$id'";	
	$result = $conn->query($sql);	
}
?>
