<?php
session_start();
error_reporting(0);
include ("includes/db_connection.php");
//-----------------------------------------------
require_once("includes/db_connection.php");
//-----------------------------------------------
require_once("includes/db_connection.php");
//-----------------------------------------------
require_once("includes/admins/query_admins.php");
//------------------------------------------------
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
<label>Full Name</label>
<input class="au-input au-input--full" type="text" name="user_fullname" placeholder="Full Name" required>
</div>
<div class="form-group">
<label>Phone</label>
<input class="au-input au-input--full" type="text" name="user_phone" placeholder="Phone" required>
</div>
<div class="form-group">
<label>Email</label>
<input class="au-input au-input--full" type="text" name="user_email" placeholder="Email" required>
</div>
<div class="form-group">
<label>Username</label>
<input class="au-input au-input--full" type="text" name="user_name" placeholder="Username" required>
</div>
<div class="form-group">
<label>Password</label>
<input class="au-input au-input--full" type="password" name="user_pass" placeholder="Password" required>
</div>
<input type="hidden" name="user_status" value="1" required>
<button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="submit_admin">sign Up</button>
</form>
<div class="register-link">
<p>
Already have an account?
<a href="login.php">Log In Here</a>
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
			// ---------------------
			echo'
</html>
';
?>
