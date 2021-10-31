<?php 
include "../dbconnection.php";

$sql = "SELECT * FROM `user`";
$result = $conn->query($sql);
if($result->num_rows > 0){ ?> 
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
					<td>					
						<?php if($row['status'] == 1) {?>			
							<button type ="submit" class=" btn btn-success" id="user_status" data-id = "<?php echo $row['id']; ?>" value="active"><i class="fa fa-check-circle" aria-hidden="true"></i></button>
						<?php }else{ ?>
							<button class=" btn btn-danger" id="user_status" data-id = "<?php echo $row['id']; ?>" value="deactive"><i class="fa fa-times-circle" aria-hidden="true"></i></button> </td>
						<?php } ?>			
					</tr>
				</tbody>
			<?php } } ?>
		</table>
		<?php 
		if(isset($_POST['user_status'])){ 
			$id = $_POST['id'];
			$type = $_POST['type'];	
			if($type == "active" ){
				$sql = "UPDATE `user` SET status = '0' WHERE id = '$id'";
				$result = $conn->query($sql);	
			}else if($type == "deactive"){
				$sql1 = "UPDATE `user` SET status = '1' WHERE id = '$id'";
				$result1 = $conn->query($sql1);
			}
		}

		?>