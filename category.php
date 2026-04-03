<?php
header('Content-Type: text/plain; charset=utf-8');
include "db.php";
$q = strtolower($_GET["q"]);
if (!$q) return;
$db->query("SELECT * FROM category_details");
  while ($line = $db->fetchNextObject()) {
  
  	if (strpos(strtolower($line->category_name), $q) !== false) {
		echo "$line->category_name\n";
	
 }
 }

?>