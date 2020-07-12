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
	<div class="col-md-12">

		
		<div class="table-data__tool">
			<div class="table-data__tool-left">
				<h3 class="title-5 m-b-35">Rooms List</h3>
			</div>
			<div class="table-data__tool-right">
				<button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#add_room">
					<i class="fa fa-plus"></i>Add Room
				</button>
			</div>
		</div>
			
	</div>
</div>
	<div class="table-responsive table-responsive-data2">
		<table class="table table-data2">
			<thead>
				<tr class="bg bg-success">
					<th class="text-center" style="width: 40px;">Sr#</th>
					<th>Room Name</th>
					<th class="text-center" style="width: 40px;">Status</th>
					<th class="text-center" style="width: 60px;">Actions</th>
				</tr>
			</thead>
			<tbody>';
//-----------------------------------------------------
$sql	= $conn->query("SELECT * FROM rooms");
$srno = 0;
//-----------------------------------------------------
while($values = mysqli_fetch_array($sql)) {
//-----------------------------------------------------
$srno++;
//-----------------------------------------------------
echo'
				<tr class="tr-shadow">
					<td class="text-center">'.$srno.'</td>
					<td>'.$values['room_name'].'</td>
					<td class="text-center">';
						if($values['room_status'] == 1)
						{
							echo'<span class="status bg bg-info">Active</span>';
						}
						else if($values['room_status'] == 2){
							echo'<span class="status bg bg-danger">Inactive</span>';
						}
					echo'
					</td>
					<td class="text-center">
						<div class="table-data-feature">
							<a href="rooms.php?id='.$values['room_id'].'" data-toggle="tooltip" data-placement="top" title="Edit">
								<button class="item btn btn-primary">
									<i class="zmdi zmdi-edit"></i>
								</button>
							</a>
							&nbsp;&nbsp;&nbsp;
							<a href="includes/rooms/del_room.php?del='.$values['room_id'].'" data-toggle="tooltip" data-placement="top" title="Delete">
								<button class="item btn btn-danger" name="del_room">
									<i class="zmdi zmdi-delete"></i>
								</button
							</a>
						</div>
					</td>
				</tr>
				<tr class="spacer"></tr>';
			}
			echo'
			</tbody>
		</table>
	</div>
';
?>
