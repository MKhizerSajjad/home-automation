<?php
require_once("../db_connection.php");
$sql  = $conn->query("DELETE FROM modes 
										WHERE id = '".$_GET['del']."' LIMIT 1
						");
header("Location: ../../set_moods.php");
?>