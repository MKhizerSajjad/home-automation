<style type="text/css">
	.text-white{
		color: white;
	}
	.control-label{
		font-size: 12px;
	}
	.required{
		color: red;
	}
</style>

<?php
echo'
<div class="modal fade" id="add_device" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<form action="devices.php" class="form-horizontal" id="form" enctype="multipart/form-data" method="post" accept-charset="utf-8">
			<div class="modal-header bg bg-success">
				<h4 class="modal-title  text-white" id="mediumModalLabel"><i class="fa fa-plus"></i> Add Device </h4>
				<button type="button" class="close  text-white" data-dismiss="modal" aria-label="Close" > 
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body mt-lg">
					<div class="form-group">
						<div class="col-md-12">
							<label class="control-label">Device Name <span class="required">*</span></label>	
							<input type="text" class="form-control" required name="dev_name"/>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<label class="control-label">Room <span class="required">*</span></label>	
							<select class="form-control" required name="id_room">
					  			<option value="">Select</option>';
						  			$sql	= $conn->query("SELECT * FROM  rooms
													  WHERE room_status = '1'
													  ORDER BY room_name ASC");
					 						while($values = mysqli_fetch_array($sql)) {
						  						echo '<option value="'.$values['room_id'].'">'.$values['room_name'].'</option>';
					 						}
			  				echo'
				  			</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<label class="control-label">Mood <span class="required">*</span></label>	
							<select class="form-control" required name="id_cat">
					  			<option value="">Select</option>';
						  			$sql	= $conn->query("SELECT * FROM  moods_cat
													  WHERE cat_status = '1'
													  ORDER BY cat_name ASC");
					 						while($values = mysqli_fetch_array($sql)) {
						  						echo '<option value="'.$values['cat_id'].'">'.$values['cat_name'].'</option>';
					 						}
			  				echo'
				  			</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<label class="control-label">Status <span class="required">*</span></label>
							<div class="radio-inline">                                   
								<input type="radio" name="dev_status" value="1" checked>
								<label for="">Active</label>
								&nbsp; &nbsp;
								<input type="radio" name="dev_status" value="2">
								<label for="">Inactive</label>
							</div>
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-primary" name="submit_device">Submit</button>
			</div>
			</form>
		</div>
	</div>
</div>
';