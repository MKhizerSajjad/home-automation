<?php
require_once("../db_connection.php");
$sql  = $conn->query("DELETE FROM rooms 
										WHERE room_id = '".$_GET['del']."' LIMIT 1
						");
header("Location: ../../rooms.php");
?>