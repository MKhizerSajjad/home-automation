<style type="text/css">
	.status{
		color: white;
		padding: 5px;
		font-size: 15px;
		border-radius: 5px;	}
</style>
<?php
//-----------------------------------------------------
$sql	= $conn->query("SELECT * FROM moods_cat 
											WHERE cat_id = '".$_GET['id']."'
	");
$srno = 0;
//-----------------------------------------------------
($values = mysqli_fetch_array($sql));
echo'
<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="table-data__tool  bg bg-success" style="padding: 10px;">
			<div class="table-data__tool-left">
				<h3 title-5 modal-title text-white" style="color: white;"><i class="fa fa-edit"></i> Update Mood Category </h3>
			</div>
		</div>
		<form action="moods_cat.php" class="form-horizontal tr-shadow" id="form" enctype="multipart/form-data" method="post" accept-charset="utf-8"  style="padding: 20px;";>';
					echo'
					<input type="hidden" class="form-control" name="cat_id" value="'.$values['cat_id'].'"/>
					<div class="form-group row">
						<div colspan="2" class="col-md-2">
							<label class="control-label">Room Name <span class="required">*</span></label>	
						</div>
						<div class="col-md-8">
							<input type="text" class="form-control" required name="cat_name" value="'.$values['cat_name'].'"/>
						</div>
					</div>

					<div class="form-group row">
						<div colspan="2" class="col-md-2">
							<label class="control-label">Status <span class="required">*</span></label>
						</div>
						<div class="col-md-8">
							<div class="radio-inline">                                   
								<input type="radio" name="cat_status" value="1" ';
								if($values['cat_status'] == 1) 
								{echo'checked'; }echo'>
								<label for="">Active</label>
								&nbsp; &nbsp;
								<input type="radio" name="cat_status" value="2" '; if($values['cat_status'] == 2) {echo'checked'; }echo'>
								<label for="">Inactive</label>
							</div>
						</div>
					</div>
					<center>
						<button type="submit" class="btn btn-primary" name="update_cat">Update</button>
					</center>
				</div>
			</form>
	</div>
</div>


';
?>
