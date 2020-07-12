<?php 
//----------------Room insert record----------------------
if(isset($_POST['submit_room'])) { 
	$sql  = $conn->query("SELECT room_name 
										FROM rooms
										WHERE
										room_name = '".($_POST['room_name'])."' LIMIT 1");
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
		header("Location: rooms.php");
		exit();
//--------------------------------------
	} else { 
//------------------------------------------------
	$sql  = $conn->query("INSERT INTO rooms (
														room_status		, 
														room_name 					
													  )
	   											VALUES(
														'".$_POST['room_status']."'		, 
														'".$_POST['room_name']."'							
													  )
						");
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
		header("Location: rooms.php");
		exit();
//--------------------------------------
	} // end checker
//--------------------------------------
} 
//----------------Room Update reocrd----------------------
if(isset($_POST['update_room'])) { 
//------------------------------------------------
$sql  = $conn->query("UPDATE rooms SET  
											room_status		= '".$_POST['room_status']."'
										,   room_name		= '".$_POST['room_name']."'   
   										WHERE room_id		= '".$_POST['room_id']."'
									");
}


if(isset($_POST['del_room'])) { 
//------------------------------------------------
$sql  = $conn->query("DELETE FROM rooms 
										WHERE room_id = '".$_GET['del']."' LIMIT 1
						");
header("Location: rooms.php");
}

