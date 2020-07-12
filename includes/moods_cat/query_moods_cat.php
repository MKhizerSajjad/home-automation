<?php 
//----------------mood insert record----------------------
if(isset($_POST['submit_mood'])) { 
	$sql  = $conn->query("SELECT cat_name 
										FROM moods_cat
										WHERE cat_name = '".($_POST['cat_name'])."' 
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
		header("Location: moods_cat.php");
		exit();
//--------------------------------------
	} else { 
//--------------------------------------
	$sql  = $conn->query("INSERT INTO moods_cat (
												cat_status , 
												cat_name 					
											)
	   										VALUES(
												'".$_POST['cat_status']."'	, 
												'".$_POST['cat_name']."'							
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
		header("Location: moods_cat.php");
		exit();
//--------------------------------------
	} // end checker
//--------------------------------------
} 
//----------------Mood Update reocrd----------------------
if(isset($_POST['update_cat'])) { 
//------------------------------------------------
$sql  = $conn->query("UPDATE moods_cat SET  
											cat_status		= '".$_POST['cat_status']."'
										,   cat_name		= '".$_POST['cat_name']."'
   									WHERE   cat_id			= '".$_POST['cat_id']."'
   						");

//--------------------------------------
			$_SESSION['msg']['title'] 	= 'Successfully';
			$_SESSION['msg']['text'] 	= 'Record Successfully Updated.';
			$_SESSION['msg']['type'] 	= 'success';
			header("Location: moods_cat.php", true, 301);
			exit();
//--------------------------------------
	}
