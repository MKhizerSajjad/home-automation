<?php 
//----------------insert record----------------------
if(isset($_POST['submit_admin'])) { 
	$sql  = $conn->query("SELECT * 
								FROM admins
								WHERE user_phone = '".($_POST['user_phone'])."'
								AND   user_phone  = '".($_POST['user_phone'])."'
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
		header("Location: admins.php");
		exit();
//--------------------------------------
	} else { 
//--------------------------------------
	$sql  = $conn->query("INSERT INTO users (
												user_status 	, 
												user_name   	,
												user_fullname	,
												user_email		,
												user_phone		,
												user_pass 					
											)
	   										VALUES(
												'".$_POST['user_status']."'		, 
												'".$_POST['user_name']."'		,
												'".$_POST['user_fullname']."'	,
												'".$_POST['user_email']."'		, 
												'".$_POST['user_phone']."'		,
												'".$_POST['user_pass']."'		
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
		header("Location: admins.php");
		exit();
//--------------------------------------
	} // end checker
//--------------------------------------
} 
//----------------Update reocrd----------------------
if(isset($_POST['update_adm'])) { 
//------------------------------------------------
$sql  = $conn->query("UPDATE users SET  
											user_status		= '".$_POST['user_status']."'
										,   user_name		= '".$_POST['user_name']."'
										,   user_fullname	= '".$_POST['user_fullname']."'
										,   user_email		= '".$_POST['user_email']."'
										,   user_phone		= '".$_POST['user_phone']."'
   									WHERE  user_id			= '".$_POST['user_id']."'
   						");

//--------------------------------------
			$_SESSION['msg']['title'] 	= 'Successfully';
			$_SESSION['msg']['text'] 	= 'Record Successfully Updated.';
			$_SESSION['msg']['type'] 	= 'success';
			header("Location: admins.php", true, 301);
			exit();
//--------------------------------------
	}
