<?php
$query = $dbh->query("SELECT * FROM head ORDER BY id_face DESC LIMIT 0,5 ");
	$result = $query->fetchAll();
?>