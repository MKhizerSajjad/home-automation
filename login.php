<?php
session_start();
error_reporting(0);
include ("includes/db_connection.php");
//-----------------------------------------------
require_once("includes/db_connection.php");
//-----------------------------------------------
require_once("includes/header.php");
//--------------------------------
echo'
<title>Login</title>
<body class="animsition">
<div class="page-wrapper">
<div class="page-content--bge5">
<div class="container">
<div class="login-wrap">
<div class="login-content">
<div class="login-logo">
	<h2>Smart Home Automation</h2>
</div>
<div class="login-form">
<form action="#" method="post">
<div class="form-group">
<label>Email Address</label>
<input class="au-input au-input--full" type="text" name="email" placeholder="Email" required>
</div>
<div class="form-group">
<label>Password</label>
<input class="au-input au-input--full" type="password" name="password" placeholder="Password" required>
</div>
<button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="login">sign in</button>
</form>
';
	if(isset($_POST['login']))
	{

		$user = $_POST['email'];
		$pass = $_POST['password'];
		$query = "SELECT * FROM users WHERE user_name='$user' AND user_pass ='$pass' Limit 1";
		$data = mysqli_query($conn, $query);
		 $total = mysqli_num_rows($data);			
		if($total == 1)	
		{
			$_SESSION['user_name'] = $user;
			echo "successfull";
			header("location: index.php");
			
		}
		else{
			echo'
			<div class="alert alert-danger">
				<b>LogIn Failed</b>
			</div>';
		}

	}
echo'

<div class="register-link">
<p>
Don\'t you have account?
<a href="signup.php">Sign Up Here</a>
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
';
// ---------------------
			require_once("includes/footer.php");
			require_once("includes/rights.php");
			// ---------------------
			echo'
</html>
';
?>
