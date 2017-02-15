<?php
	include"PDO.php";
	$query = $dbh->query("SELECT head.id_face FROM head");
	$result = $query->fetchAll();
	print_r($result);
	$number = count($result);
	$number = ++$number;
	$save = str_replace('data:image/png;base64,', '', $_POST['#photo']);
	file_put_contents( "../../view/img/face/$number.png", base64_decode($save));
	$req = $dbh->query("INSERT INTO head (face) VALUES ('view/img/face/".$number.".png')");
	echo "toto";
?>