<?php 
include "../dbconnection.php";

$sql = "SELECT * FROM `coupon_code`";
$result = $conn->query($sql);
if($result->num_rows > 0){
	?>
	<table class="table table-striped mt-3 text-center"> 	
		<thead>
			<tr>
				<th>Id</th>
				<th>Code</th>
				<th>Type</th>			
				<th>Value</th>
				<th>Min Value</th>
				<th>Added</th>
				<th>expire</th>
				<th>Action</th>
			</tr>
		</thead>
		<?php while($row = $result->fetch_assoc()){  ?>		
			<tbody>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['coupon_code']; ?></td>
					<td><?php echo $row['coupon_type']; ?></td>
					<td><?php echo $row['coupon_value']; ?></td>
					<td><?php echo $row['cart_min_value']; ?></td>				
					<td><?php echo $row['added_on']; ?></td>
					<td><?php echo $row['expire_on']; ?></td>
					<td><button class="btn btn-primary" id="update_coupon"  data-id = "<?php echo $row['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>			
						<button class="btn btn-danger mx-2" id="delete_coupon"  data-id = "<?php echo $row['id']; ?>"><i class="fa fa-trash " aria-hidden="true"></i></button>
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
		if(isset($_POST['add_coupon'])){
			$code = $_POST['code'];
			$type = $_POST['type'];
			$value = $_POST['value'];
			$min_value = $_POST['min_value'];
			$added = $_POST['added'];
			$expire = $_POST['expire'];
			$status = $_POST['status'];

			$sql = "INSERT INTO `coupon_code`(`coupon_code`, `coupon_type`, `coupon_value`, `cart_min_value`, `added_on`, `expire_on`, `status`) VALUES ('$code', '$type', '$value', '$min_value', '$added', '$expire', '$status')";

			$result = $conn->query($sql);
		}

		if(isset($_POST['update_coupon'])){
			$id = $_POST['id'];
			$code = $_POST['code'];
			$code = $_POST['code'];
			$type = $_POST['type'];
			$value = $_POST['value'];
			$min_value = $_POST['min_value'];
			$added = $_POST['added'];
			$expire = $_POST['expire'];

			$sql = "UPDATE `coupon_code` SET `coupon_code`='$code', `coupon_type`='$type', `coupon_value`='$value', `cart_min_value`='$min_value', `added_on`='$added', `expire_on`='$expire' WHERE id ='$id'";
			$result = $conn->query($sql);
		}


		 ?>