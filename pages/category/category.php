<div class="text-info mt-3 d-flex justify-content-between" onload="show_category()">
	<h2 class="ml-3">All Categories</h2>
	<div id="alert_msg" style="height: 10px;"></div>
	<button class="btn btn-info" data-toggle="modal" data-target="#add_category_modal">Add Category</button>
</div>
<div id="show_data"></div>


<!-- Modal -->
<div class="modal fade" id="add_category_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">      
			<div class="modal-body">
				<h4 class="text-center mb-3"> Add Category</h4>
				<form id="add_category_form" method ="POST" autocomplete="off">
					<div class="form-group">
						<label>Category</label>
						<input type="text" id="category_name" class="form-control"  placeholder="Category Name" required>
					</div>
					<div class="form-group">
						<label>Order Number</label>
						<input type="number" id="order" class="form-control"placeholder="Order Number"  required >
					</div>
					<div class="form-group">
						<label>Added On</label>
						<input type="date" id="added_on" class="form-control" placeholder="add_date" required >
					</div>
					<div class="form-group">				
						<input type="hidden" id="status" value="1">
					</div>			
					<div class="d-flex justify-content-end">
						<div id="error_msg" style="height:10px"></div>
						<button type="submit" id="add_category" class="btn btn-primary mr-2" data-dismiss="modal">Submit</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>

				</form>        
			</div>      
		</div>
	</div>
</div>

<!-- Update category modal -->
<div class="modal fade" id="update_category_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content"  id="modal">      
			
		</div>
	</div>
</div>
<script src="js/category.js"></script>