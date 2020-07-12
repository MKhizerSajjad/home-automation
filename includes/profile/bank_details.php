  <?php
  echo'
  <div id="bank" class="tab-pane ">
	<section class="panel panel-pvs-shadow mt-lg">
		<header class="panel-heading panel-featured-primary pvs-heading-tran">
			<div class="pull-right">
				<a href="#add_account" class="modal-with-move-anim btn btn-xs btn-primary">
					<i class="fa fa-plus-square"></i> Add Account
				</a>
			</div>
			<h2 class="panel-title">List Of Bank Details</h2>
		</header>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-bordered table-condensed table-striped mb-none">
					<thead>
						<tr>
							<th>#</th>
							<th>Bank Name</th>
							<th>Account Name</th>
							<th>Branch</th>
							<th>Employee</th>
							<th>Account TYpe</th>
							<th>Account No</th>
							<th>Status </th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>';
						//-----------------------------------------------------
						// $sqllms	= $dblms->querylms("SELECT a.id, a.status, a.id_emply, a.id_bank, a.branch, a.account_name,
						// 								   a.account_no, a.account_type,
						// 								   b.bank_id, b.bank_name,
						// 								   e.emply_id, e.emply_name
								     
						// 		   					FROM ".EMPLOYEES_BANKACCOUNTS." a
						// 							INNER JOIN ".BANKS." b ON b.bank_id = a.id_bank
						// 							INNER JOIN ".EMPLOYEES." e ON e.emply_id = a.id_emply
						// 		   					WHERE a.id_campus = '".$_SESSION['userlogininfo']['LOGINCAMPUS']."'
						// 							AND   a.id_emply = '".$_GET['id']."' 
						// 		   					ORDER BY a.account_name ASC ");
						// $srno = 0;
						// //-----------------------------------------------------
						// while($rowsvalues = mysqli_fetch_array($sqllms)) {
						//-----------------------------------------------------
						// $srno++;
						//-----------------------------------------------------
						echo '
						<tr>
							
						</tr>';
//-----------------------------------------------------
// }
//-----------------------------------------------------
echo '
					</tbody>
				</table>
			</div>
		</div>
	</section>
  </div>
  ';
  ?>