<?php 
include "../dbconnection.php";

$sql = "SELECT * FROM `delivery_boy`";
$result = $conn->query($sql);
if($result->num_rows > 0){
	?>
	<table class="table table-striped mt-3 text-center"> 	
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>			
				<th>Mobile</th>
				<th>Added On</th>
				<th>Action</th>
			</tr>
		</thead>
		<?php while($row = $result->fetch_assoc()){  ?>		
			<tbody>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['mobile']; ?></td>
					<td><?php echo $row['added_on']; ?></td>
					<td><button class="btn btn-primary" id="update_delivery_boy"  data-id = "<?php echo $row['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>			
						<button class="btn btn-danger mx-2" id="delete_delivery_boy"  data-id = "<?php echo $row['id']; ?>"><i class="fa fa-trash " aria-hidden="true"></i></button>
						<?php if($row['status'] == 1) {?>			
							<button type ="submit" class=" btn btn-success" id="deliveryboy_change_status" data-id = "<?php echo $row['id']; ?>" value="active"><i class="fa fa-check-circle" aria-hidden="true"></i></button>
						<?php }else{ ?>
							<button class=" btn btn-danger" id="deliveryboy_change_status" data-id = "<?php echo $row['id']; ?>" value="deactive"><i class="fa fa-times-circle" aria-hidden="true"></i></button> </td>
						<?php } ?>			
					</tr>
				</tbody>
			<?php } } ?>
		</table>

		<?php 
		if(isset($_POST['add_delivery_boy'])){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$mobile = $_POST['mobile'];
			$added = $_POST['added'];
			$status = $_POST['status'];
			$sql = "INSERT INTO `delivery_boy`(`name`, `email`, `password`, `mobile`, `added_on`, `status`) VALUES ('$name', '$email', '$password', '$mobile', '$added', '$status')";
			$result = $conn->query($sql);
		}
		if(isset($_POST['delete_delivery_boy'])){
			$deleteid = $_POST['deleteid'];
			$sql = "DELETE FROM `delivery_boy` WHERE id = '$deleteid'";
			$result = $conn->query($sql);
		}
		if(isset($_POST['deliveryboy_change_status'])){ 
			$id = $_POST['id'];
			$type = $_POST['type'];	
			if($type == "active" ){
				$sql = "UPDATE `delivery_boy` SET status = '0' WHERE id = '$id'";
				$result = $conn->query($sql);	
			}else if($type == "deactive"){
				$sql1 = "UPDATE `delivery_boy` SET status = '1' WHERE id = '$id'";
				$result1 = $conn->query($sql1);
			}
		}
		if(isset($_POST['update_deliveryboy_action'])){
			$id = $_POST['id'];
			$name = $_POST['name'];
			$email = $_POST['email'];	
			$mobile = $_POST['mobile'];
			$added = $_POST['added'];
			$sql = "UPDATE `delivery_boy` SET `name`='$name',`email`='$email', `mobile`='$mobile',`added_on`='$added' WHERE id='$id'";
			$result = $conn->query($sql);
		}
		?>