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
<div class="modal fade" id="add_farmer" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header bg bg-success">
				<h4 class="modal-title  text-white" id="mediumModalLabel"><i class="fa fa-plus"></i> Add Farmer </h4>
				<button type="button" class="close  text-white" data-dismiss="modal" aria-label="Close" > 
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="#" class="form-horizontal" id="form" enctype="multipart/form-data" method="post" accept-charset="utf-8">
					<div class="form-group" >
						<div class="row">
							<!-- <div class="col-md-1"></div> -->
							<label class="col-sm-3 control-label">Photo <span class="required">*</span></label>
							<div class="col-md-9">
								<input type="file" class="form-control" required name="farm_photo" value=""/>
							</div>
						</div>
					</div>
					<div class="form-group" >
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<label class="control-label">Full Name <span class="required">*</span></label>
									<input type="text" class="form-control" required name="farm_name" value=""/>
								</div>
								<div class="col-md-6">
									<label class="control-label">CNIC <span class="required">*</span></label>
									<input type="number" class="form-control" required name="farm_cnic" value=""/>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group" >
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<label class="control-label">Phone <span class="required">*</span></label>
									<input type="number" class="form-control" required name="farm_phone" value=""/>
								</div>
								<div class="col-md-6">
									<label class="control-label">Farmer Referral  <span class="required">*</span></label>
									<input type="text" class="form-control" required name="farm_referral" value=""/>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group" >
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<label class="control-label"> Address <span class="required">*</span></label>
									<input type="text" class="form-control" required name="farm_add" value=""/>
								</div>
								<div class="col-md-6">
									<label class="control-label">Field Address <span class="required">*</span></label>
									<input type="text" class="form-control" required name="field_add" value=""/>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group" >
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<label class="control-label">Password <span class="required">*</span></label>
									<input type="password" class="form-control" required name="farm_pass" value=""/>
								</div>
								<div class="col-md-6">
									<label class="control-label">Confirm Password <span class="required">*</span></label>
									<input type="password" class="form-control" required name="cnfrm_pass" value=""/>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group" >
						<div class="col-md-12">
							<div class="col-md-12">
								<label class="control-label">Status <span class="required">*</span></label>
								<div class="radio-inline">
									<input type="radio" name="farm_status" value="1" checked>
									<label for="">Active</label>
								&nbsp; &nbsp;
									<input type="radio" name="farm_status" value="2">
									<label for="">Inactive</label>
								</div>
							</div>
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-primary" name="submit_farmer">Submit</button>
			</div>
			</form>
		</div>
	</div>
</div>
';