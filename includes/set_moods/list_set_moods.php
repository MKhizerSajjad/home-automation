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
				<h3 class="title-5 m-b-35">Modes List</h3>
			</div>
			<div class="table-data__tool-right">
				<button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#add_admin">
					<i class="fa fa-plus"></i>Add Mode
				</button>
			</div>
		</div>
	</div>
	<div class="table-responsive table-responsive-data2">
		<table class="table table-data2">
			<thead>
				<tr class="bg bg-success">
					<th>Sr#</th>
					<th>Mood</th>
					<th>Room</th>
					<th style="width: 70px;">Actions</th>
				</tr>
			</thead>
			<tbody>';
//-----------------------------------------------------
$sql	= $conn->query("SELECT * FROM modes m
											INNER JOIN moods_cat c ON c.cat_id  = m.id_cat  
											INNER JOIN rooms     r ON r.room_id = m.id_room
											WHERE c.cat_status = '1'
											AND   r.room_status = '1'
						");
$srno = 0;
//-----------------------------------------------------
while($values = mysqli_fetch_array($sql)) {
//-----------------------------------------------------
$srno++;
//-----------------------------------------------------
echo '
				<tr class="tr-shadow">
					<td>'.$srno.'</td>
					<td>'.$values['cat_name'].'</td>
					<td>'.$values['room_name'].'</td>
					<td style="width: 70px;">
						<div class="table-data-feature">';
							
							$sqldev	= $conn->query("SELECT * FROM devices 
																		WHERE id_cat = '".$values['id_cat']."'
																		AND id_room = '".$values['id_room']."'
																		AND dev_status = '1'
													");
							echo'
							<button class="item btn btn-success" data-toggle="tooltip" data-placement="top" title="';
							while($dev_values = mysqli_fetch_array($sqldev)) 
							{echo'
								'.$dev_values['dev_name'].',
							';}
							echo'
								">
								<i class="zmdi zmdi-eye"></i>
							</button>
							<a href="set_moods.php?id='.$values['id'].'" data-toggle="tooltip" data-placement="top" title="Edit">
								<button class="item btn btn-primary">
									<i class="zmdi zmdi-edit"></i>
								</button>
							</a>
							&nbsp;
							<a href="includes/set_moods/del_set_mood.php?del='.$values['id'].'" data-toggle="tooltip" data-placement="top" title="Delete">
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
	</div>
';
?>