<?php
require_once("../db_connection.php");
$sql  = $conn->query("DELETE FROM moods_cat 
										WHERE cat_id = '".$_GET['del']."' LIMIT 1
						");
header("Location: ../../moods_cat.php");
?>