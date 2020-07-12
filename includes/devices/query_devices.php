<?php 
//----------------insert record----------------------
if(isset($_POST['submit_device'])) { 
	$sql  = $conn->query("SELECT * 
								FROM devices
								WHERE dev_name = '".($_POST['dev_name'])."'
								AND   id_room  = '".($_POST['id_room'])."'
								AND   id_cat   = '".($_POST['id_cat'])."'
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
		header("Location: devices.php");
		exit();
//--------------------------------------
	} else { 
//--------------------------------------
	$sql  = $conn->query("INSERT INTO devices (
												dev_status , 
												dev_name   ,
												id_room	   ,
												id_cat	 					
											)
	   										VALUES(
												'".$_POST['dev_status']."'	, 
												'".$_POST['dev_name']."'	,
												'".$_POST['id_room']."'		,
												'".$_POST['id_cat']."'				
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
		header("Location: devices.php");
		exit();
//--------------------------------------
	} // end checker
//--------------------------------------
} 
//----------------Mood Update reocrd----------------------
if(isset($_POST['update_dev'])) { 
//------------------------------------------------
$sql  = $conn->query("UPDATE devices SET  
											dev_status	= '".$_POST['dev_status']."'
										,	dev_name	= '".$_POST['dev_name']."'
										,   id_room		= '".$_POST['id_room']."'
										,   id_cat		= '".$_POST['id_cat']."'
   									WHERE   dev_id		= '".$_POST['dev_id']."'
   						");

//--------------------------------------
			// $_SESSION['msg']['title'] 	= 'Successfully';
			// $_SESSION['msg']['text'] 	= 'Record Successfully Updated.';
			// $_SESSION['msg']['type'] 	= 'success';
			header("Location: devices.php");
			exit();
//--------------------------------------
	}
