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
	// include composer autoload
	require '../../vendor/autoload.php';
	// import the Intervention Image Manager Class
	use Intervention\Image\ImageManager;
	// create an image manager instance with favored driver
	$manager = new ImageManager();
	// to finally create image instances
	$manager->make('../../view/img/face/'.$number.'.png')->resize(275, 320)->save('../../view/img/face/'.$number.'.png');
?>
