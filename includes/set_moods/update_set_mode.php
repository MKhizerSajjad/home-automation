<style type="text/css">
	.status{
		color: white;
		padding: 5px;
		font-size: 15px;
		border-radius: 5px;	}
</style>
<?php
//-----------------------------------------------------
$sql	= $conn->query("SELECT * FROM modes 
											WHERE id = '".$_GET['id']."'
	");
//-----------------------------------------------------
($values = mysqli_fetch_array($sql));
echo'
<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="table-data__tool  bg bg-success" style="padding: 10px;">
			<div class="table-data__tool-left">
				<h3 class="title-5 modal-title  text-white"><i class="fa fa-edit"></i> Update Device </h3>
			</div>
		</div>
		<form action="set_moods.php" class="form-horizontal tr-shadow" id="form" enctype="multipart/form-data" method="post" accept-charset="utf-8"  style="padding: 20px;"
		background-color: white;>';
					// <input type="text" name="room_id" id="room_id" value="id:'.$_POS['id'].'">
					echo'
					<input type="hidden" class="form-control" name="id" value="'.$values['id'].'"/>

					<div class="form-group row">
						<div colspan="2" class="col-md-2">
							<label class="control-label">Room <span class="required">*</span></label>	
						</div>
						<div class="col-md-8">
							<select class="form-control" required name="id_room">
					  			<option value="">Select</option>';
						  			$sql	= $conn->query("SELECT * FROM  rooms
													  WHERE room_status = '1'
													  ORDER BY room_name ASC");
						  			while($val_room = mysqli_fetch_array($sql)) {
						  				if($val_room['room_id'] == $values['id_room']) { 
							  				echo '<option value="'.$val_room['room_id'].'" selected>'.$val_room['room_name'].'</option>';
						  				} else { 
							  				echo '<option value="'.$val_room['room_id'].'">'.$val_room['room_name'].'</option>';
						  				}
					 				 }
			  				echo'
				  			</select>
						</div>
					</div>

					<div class="form-group row">
						<div colspan="2" class="col-md-2">
							<label class="control-label">Mood <span class="required">*</span></label>	
						</div>
						<div class="col-md-8">
							<select class="form-control" required name="id_cat">
					  			<option value="">Select</option>';
						  			$sql	= $conn->query("SELECT * FROM  moods_cat
													  WHERE cat_status = '1'
													  ORDER BY cat_name ASC");
						  			while($val_mood = mysqli_fetch_array($sql)) {
						  				if($val_mood['cat_id'] == $values['id_cat']) { 
							  				echo '<option value="'.$val_mood['cat_id'].'" selected>'.$val_mood['cat_name'].'</option>';
						  				} else { 
							  				echo '<option value="'.$val_mood['cat_id'].'">'.$val_mood['cat_name'].'</option>';
						  				}
					 				 }
			  				echo'
				  			</select>
						</div>
					</div>

					<center>
						<button type="submit" class="btn btn-primary" name="update_mode">Update</button>
					</center>
				</div>
			</form>
	</div>
</div>


';
?>
