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
require_once("includes/moods_cat/query_moods_cat.php");
//-----------------------------------------------
include_once("includes/header.php");
include_once("includes/header-top.php");
//-----------------------------------------------
echo'
<title>Moods Category </title>


<body class="animsition">
	<div class="page-wrapper">
		';
		//--------------------------------
		include_once("includes/aside.php");
		include_once("includes/modals/moods_cat/mood_cat_add.php");
		// include_once("in0.cludes/modals/moods/mood_update.php");
		//--------------------------------
		echo'
		<div class="page-container">
			<div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						';
						//--------------------------------
						if(isset($_GET['id'])){
							include_once("includes/moods_cat/update_mood_cat.php");
						}
						else{
							include_once("includes/moods_cat/list_moods_cat.php");
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
