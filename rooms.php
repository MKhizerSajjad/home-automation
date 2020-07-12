<?php
session_start();
if(!isset($_SESSION['user_name'])) {
		header("Location: login.php");
		exit;
	}
else{
//-----------------------------------------------
require_once("includes/db_connection.php");
//-----------------------------------------------
require_once("includes/rooms/query_rooms.php");
//-----------------------------------------------
include_once("includes/header.php");
include_once("includes/header-top.php");
//-----------------------------------------------
echo'
<title>Rooms </title>


<body class="animsition">
	<div class="page-wrapper">
		';
		//--------------------------------
		include_once("includes/aside.php");
		include_once("includes/modals/rooms/room_add.php");
		//--------------------------------
		echo'
		<div class="page-container">
			<div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						';
						//--------------------------------
						if(isset($_GET['id'])){
							include_once("includes/rooms/update_room.php");
						}
						else{
							include_once("includes/rooms/list_rooms.php");
						}
						//--------------------------------
						echo'
					</div>
				</div>
			</div>
			';
			// ---------------------
			require_once("includes/footer.php");
			require_once("includes/rights.php");
			// ---------------------
			echo'
		</div>
';
}
?>
