<style type="text/css">
	.status{
		color: white;
		padding: 5px;
		font-size: 15px;
		border-radius: 5px;	}
</style>
<?php
echo'
<div class="row">
	<div class="col-md-10>
		<div class="table-data__tool">
			<div class="table-data__tool-left">
				<h3 class="title-5 m-b-20 m-l-20">List Admins</h3>
			</div>
			<div class="table-data__tool-right">
				
			</div>
			
		</div>
	</div>
	<div class="table-responsive table-responsive-data2">
		<table class="table table-data2">
			<thead>
				<tr class="bg bg-success">
					<th class="text-center" style="width: 40px;">Sr#</th>
					<th>Username</th>
					<th>Full Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th class="text-center" style="width: 40px;">Status</th>
				</tr>
			</thead>
			<tbody>';
//-----------------------------------------------------
$sql	= $conn->query("SELECT * FROM users");
$srno = 0;
//-----------------------------------------------------
while($values = mysqli_fetch_array($sql)) {
//-----------------------------------------------------
$srno++;
//-----------------------------------------------------
echo '
				<tr class="tr-shadow">
					<td>'.$srno.'</td>
					<td>'.$values['user_name'].'</td>
					<td>'.$values['user_fullname'].'</td>
					<td>'.$values['user_email'].'</td>
					<td>'.$values['user_phone'].'</td>
					<td>';
						if($values['user_status'] == 1)
						{
							echo'<span class="status bg bg-info">Active</span>';
						}
						else if($values['user_status'] == 2){
							echo'<span class="status bg bg-danger">Inactive</span>';
						}
						else{}
					echo'
					</td>
				</tr>
				<tr class="spacer"></tr>';
			}
			echo'
			</tbody>
		</table>
	</div>
	</div>
';
?>