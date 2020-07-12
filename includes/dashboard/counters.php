<?php
echo'
<div class="row">';
//-----------------------------------------------------
$sql	= $conn->query("SELECT COUNT(user_id) as no FROM users");
($values = mysqli_fetch_array($sql));
//-----------------------------------------------------
echo'
		<div class="col-sm-6 col-lg-3">
			<div class="overview-item overview-item--c1">
				<div class="overview__inner">
					<div class="overview-box clearfix">
						<div class="icon">
							<i class="fas fa-users"></i>
						</div>
						<div class="text">
							<h2>'.$values['no'].'</h2>
							<span>Users</span>
						</div>
					</div>
				</div>
			</div>
		</div>';
//-----------------------------------------------------
$sql	= $conn->query("SELECT COUNT(id) as no FROM modes");
($values = mysqli_fetch_array($sql));
//-----------------------------------------------------
		echo'
		<div class="col-sm-6 col-lg-3">
			<div class="overview-item overview-item--c2">
				<div class="overview__inner">
					<div class="overview-box clearfix">
						<div class="icon">
							<i class="fa fa-expand-arrows-alt"></i>
						</div>
						<div class="text">
							<h2>'.$values['no'].'</h2>
							<span>Moods</span>
						</div>
					</div>
				</div>
			</div>
		</div>';
//-----------------------------------------------------
$sql	= $conn->query("SELECT COUNT(dev_id) as no FROM devices");
($values = mysqli_fetch_array($sql));
//-----------------------------------------------------
		echo'
		<div class="col-sm-6 col-lg-3">
			<div class="overview-item overview-item--c3">
				<div class="overview__inner">
					<div class="overview-box clearfix">
						<div class="icon">
							<i class="fas fa-server"></i>
						</div>
						<div class="text">
							<h2>'.$values['no'].'</h2>
							<span>Devices</span>
						</div>
					</div>
				</div>
			</div>
		</div>';
//-----------------------------------------------------
$sql	= $conn->query("SELECT COUNT(room_id) as no FROM rooms");
($values = mysqli_fetch_array($sql));
//-----------------------------------------------------
		echo'
		<div class="col-sm-6 col-lg-3">
			<div class="overview-item overview-item--c4">
				<div class="overview__inner">
					<div class="overview-box clearfix">
						<div class="icon">
							<i class="fas fa-hotel"></i>
						</div>
						<div class="text">
							<h2>'.$values['no'].'</h2>
							<span>Rooms</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
';
?>