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
require_once("includes/header-top.php");
require_once("includes/header.php");
//--------------------------------
echo'
<title>Dashboard</title>


<body class="animsition">
	<div class="page-wrapper">';
		//--------------------------------
			require_once("includes/aside.php");
		//--------------------------------
		echo'
			<div class="page-container">';
		echo'
			<div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
			';
		//--------------------------------
			require_once("includes/dashboard/counters.php");
			require_once("includes/dashboard/moods.php");
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
		</div>
		</div>
';
}
?>