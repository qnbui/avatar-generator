<?php
	$save = str_replace('data:image/png;base64,', '', $_POST['#photo'] );
	file_put_contents( '../../view/img/face/image.png', base64_decode( $save ) );
?>