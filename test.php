

<?php
$imagesDir = glob('view/img/eyes', GLOB_ONLYDIR);
$randomfolder = $imagesDir[array_rand($imagesDir)];
$images = glob($randomfolder . '/*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}', GLOB_BRACE);
$randomImage = $images[array_rand($images)];
echo '<img src="'.$randomImage.'" class="image">';
?>
