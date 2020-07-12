<style type="text/css">
	.status{
		color: white;
		padding: 5px;
		font-size: 15px;
		border-radius: 5px;	}
</style>
<?php
//-----------------------------------------------------
$sql	= $conn->query("SELECT * FROM users 
											WHERE user_id = '".$_GET['id']."'
	");
//-----------------------------------------------------
($values = mysqli_fetch_array($sql));
echo'
<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="table-data__tool  bg bg-success" style="padding: 10px;">
			<div class="table-data__tool-left">
				<h3 class="title-5 modal-title  text-white"><i class="fa fa-edit"></i> Update Admin </h3>
			</div>
		</div>
		<form action="admins.php" class="form-horizontal tr-shadow" id="form" enctype="multipart/form-data" method="post" accept-charset="utf-8"  style="padding: 20px;";>';
					echo'
					<input type="hidden" class="form-control" name="user_id" value="'.$values['user_id'].'"/>
					<div class="form-group">
						<div class="col-md-12">
							<label class="control-label">Full Name <span class="required">*</span></label>	
							<input type="text" class="form-control" value="'.$values['user_fullname'].'" required name="user_fullname"/>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<label class="control-label">Phone <span class="required">*</span></label>	
							<input type="text" class="form-control" value="'.$values['user_phone'].'" required name="user_phone"/>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<label class="control-label">Email </label>	
							<input type="text" class="form-control" value="'.$values['user_email'].'" name="user_email"/>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<label class="control-label">Username <span class="required">*</span></label>	
							<input type="text" class="form-control" value="'.$values['user_name'].'" required name="user_name"/>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-12">
							<label class="control-label">Status <span class="required">*</span></label>
							<div class="radio-inline">                                   
								<input type="radio" name="user_status" value="1" ';if($values['user_status'] == 1) {echo'checked'; }echo'>
								<label for="">Active</label>
								&nbsp; &nbsp;
								<input type="radio" name="user_status" value="2" '; if($values['user_status'] == 2) {echo'checked'; }echo'>
								<label for="">Inactive</label>
							</div>
						</div>
					</div>
					<center>
						<button type="submit" class="btn btn-primary" name="update_adm">Update</button>
					</center>
				</div>
			</form>
	</div>

';
?>
