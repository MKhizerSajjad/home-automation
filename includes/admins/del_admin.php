<?php
require_once("../db_connection.php");
$sql  = $conn->query("DELETE FROM users 
										WHERE user_id = '".$_GET['del']."' LIMIT 1
						");
header("Location: ../../admins.php");
?>