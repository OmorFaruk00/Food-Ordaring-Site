<?php 
include "../dbconnection.php";

$sql = "SELECT * FROM `category`";
$result = $conn->query($sql);
if($result->num_rows > 0){
 ?>
 <table class="table table-striped mt-3 text-center"> 	
	<thead>
		<tr>
			<th>Id</th>
			<th>Category</th>
			<th>Order Number</th>
			<th>Added Date</th>
			<th>Action</th>
		</tr>
	</thead>
	<?php while($row = $result->fetch_assoc()){  ?>	
	
	<tbody>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['category']; ?></td>
			<td><?php echo $row['order_number']; ?></td>
			<td><?php echo $row['added_on']; ?></td>
			<td><button class="btn btn-primary" id="edit_category"  data-id = "<?php echo $row['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>			
			<button class="btn btn-danger mx-2" id="delete_category"  data-id = "<?php echo $row['id']; ?>"><i class="fa fa-trash " aria-hidden="true"></i></button>
			<?php if($row['status'] == 1) {?>			
			<button type ="submit" class=" btn btn-success" id="change_status" data-id = "<?php echo $row['id']; ?>" value="active"><i class="fa fa-check-circle" aria-hidden="true"></i></button>
			<?php }else{ ?>
			<button class=" btn btn-danger" id="change_status" data-id = "<?php echo $row['id']; ?>" value="deactive"><i class="fa fa-times-circle" aria-hidden="true"></i></button> </td>
			<?php } ?>			
		</tr>
	</tbody>
<?php } } ?>
</table>

<?php 
if(isset($_POST['add_category'])){
	$category = $_POST['category'];
	$order_num = $_POST['order'];
	$added_on = $_POST['added'];
	$status = $_POST['status'];
	$sql = "INSERT INTO `category`(`category`, `order_number`, `status`, `added_on`) VALUES ('$category', '$order_num', '$status', '$added_on')";
	$result = $conn->query($sql);	
}
if(isset($_POST['delete_category'])){
	$deleteid = $_POST['deleteid'];
	$sql = "DELETE FROM `category` WHERE id = '$deleteid'";
	$result = $conn->query($sql);
}
// Change Status
if(isset($_POST['status_change'])){
	$id = $_POST['id'];
	$type = $_POST['type'];	
	if($type == "active" ){
	$sql = "UPDATE `category` SET status = '0' WHERE id = '$id'";
	$result = $conn->query($sql);	
    }else if($type == "deactive"){
    	$sql1 = "UPDATE `category` SET status = '1' WHERE id = '$id'";
	$result1 = $conn->query($sql1);
    }
}

 ?>




