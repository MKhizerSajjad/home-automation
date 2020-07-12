<?php 
//----------------insert record----------------------
if(isset($_POST['submit_mode'])) { 
	$sql  = $conn->query("SELECT * 
								FROM modes
								WHERE id_room  = '".($_POST['id_room'])."'
								LIMIT 1
						");

	if(mysqli_num_rows($sql)) {
//--------------------------------------
		// $_SESSION['msg']['title'] 	= 'Error';
		// $_SESSION['msg']['text'] 	= 'Record Already Exists';
		// $_SESSION['msg']['type'] 	= 'error';
		echo'
		<div class="alert alert-danger">
			<b>Record Already Exists.</b>
		</div>
		';
		header("Location: set_moods.php");
		exit();
//--------------------------------------
	} else { 
//--------------------------------------
	$sql  = $conn->query("INSERT INTO modes (
												id_cat 	, 
												id_room   						
											)
	   										VALUES(
												'".$_POST['id_cat']."'	, 
												'".$_POST['id_room']."'				
										    )"
							);
//--------------------------------------

//--------------------------------------
		// $_SESSION['msg']['title'] 	= 'Successfully';
		// $_SESSION['msg']['text'] 	= 'Record Successfully Added.';
		// $_SESSION['msg']['type'] 	= 'success';
		echo'
		<div class="alert alert-success">
			<b>Record Already Exists.</b>
		</div>
		';
		header("Location: set_moods.php");
		exit();
//--------------------------------------
	} // end checker
//--------------------------------------
} 
//----------------Update reocrd----------------------
if(isset($_POST['update_mode'])) { 
//------------------------------------------------
$sql  = $conn->query("UPDATE modes SET  
											id_cat		= '".$_POST['id_cat']."'
										,   id_room		= '".$_POST['id_room']."'
   									WHERE   id			= '".$_POST['id']."'
   						");

//--------------------------------------
			$_SESSION['msg']['title'] 	= 'Successfully';
			$_SESSION['msg']['text'] 	= 'Record Successfully Updated.';
			$_SESSION['msg']['type'] 	= 'success';
			header("Location: set_moods.php", true, 301);
			exit();
//--------------------------------------
	}
