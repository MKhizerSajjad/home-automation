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



<div class="modal fade" id="add_mood" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<form action="moods_cat.php" class="form-horizontal" id="form" enctype="multipart/form-data" method="post" accept-charset="utf-8">
			<div class="modal-header bg bg-success">
				<h4 class="modal-title  text-white" id="mediumModalLabel"><i class="fa fa-plus"></i> Add Mood Category</h4>
				<button type="button" class="close  text-white" data-dismiss="modal" aria-label="Close" > 
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body mt-lg">
					<div class="form-group">
						<div class="col-md-12">
							<label class="control-label">Category Name <span class="required">*</span></label>	
							<input type="text" class="form-control" required name="cat_name" value=""/>
						</div>
					</div>
					<div class="form-group" >
						<div class="col-md-12">
							<label class="control-label">Status <span class="required">*</span></label>
							<div class="radio-inline">                                   
								<input type="radio" name="cat_status" value="1" checked>
								<label for="">Active</label>
								&nbsp; &nbsp;
								<input type="radio" name="cat_status" value="2">
								<label for="">Inactive</label>
							</div>
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-primary" name="submit_mood">Submit</button>
			</div>
			</form>
		</div>
	</div>
</div>