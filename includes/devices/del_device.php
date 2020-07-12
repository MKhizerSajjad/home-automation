<?php
require_once("../db_connection.php");
$sql  = $conn->query("DELETE FROM devices 
										WHERE dev_id = '".$_GET['del']."' LIMIT 1
						");
header("Location: ../../devices.php");
?>