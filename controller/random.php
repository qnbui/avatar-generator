<?php

 if (isset($_POST("rand"))) {


function hairs(){
    $imagesDir = glob('../view/img/hairs', GLOB_ONLYDIR);
    $randhairs = $imagesDir[array_rand($imagesDir)];
    $images = glob($randhairs . '/*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}', GLOB_BRACE);
    $randomImagehairs = $images[array_rand($images)];
    echo '<img src="'.$randomImagehairs.'" class="image">';
}


function eyes(){
    $imagesDir = glob('../view/img/eyes', GLOB_ONLYDIR);
    $randeyes = $imagesDir[array_rand($imagesDir)];
    $images = glob($randeyes . '/*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}', GLOB_BRACE);
    $randomImageyes = $images[array_rand($images)];
    echo '<img src="'.$randomImageyes.'" class="image">';
}


function nose(){
    $imagesDir = glob('../view/img/nose', GLOB_ONLYDIR);
    $randnose = $imagesDir[array_rand($imagesDir)];
    $images = glob($randnose . '/*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}', GLOB_BRACE);
    $randomImagenose = $images[array_rand($images)];
    echo '<img src="'.$randomImagenose.'" class="image">';
}


function mouth(){
    $imagesDir = glob('../view/img/mouth', GLOB_ONLYDIR);
    $randmouth = $imagesDir[array_rand($imagesDir)];
    $images = glob($randmouth . '/*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}', GLOB_BRACE);
    $randomImagemouth = $images[array_rand($images)];
    echo '<img src="'.$randomImagemouth.'" class="image">';
}
};