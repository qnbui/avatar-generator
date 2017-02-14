<!DOCTYPE html>

<html>
    
<head>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../view/css/style.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="utf-8"/>
    <title>Face_Generator_Solo</title>
    
</head>
    
<body>
    
    <div style="background-color: #0e0c0d">
        
        <div class="container">
            
            <div class="row"> 
                
                <img class="col s2" src="../../view/img/Rainbow_Zombies.png" />

                <form action="controller/php/random.php" method="post">
                    <button name="rand" type="submit" id="random" class="col s3 offset-s2 red waves-effect waves-light btn">Aléatoire</button>
                </form>

                
                <a id="download" class="col s3 offset-s2 blue waves-effect waves-light btn" onclick="avatar()"><span style="vertical-align: super">Télécharger</span> <i class="material-icons">system_update_alt</i></a>
            
            </div>
            
        </div>
        
    </div>
    
    <div class="container">
        
    <div class="col s6">

<?php

 if (isset($_POST["rand"])) {



    $imagesDir = glob('../../view/img/hairs', GLOB_ONLYDIR);
    $randhairs = $imagesDir[array_rand($imagesDir)];
    $images = glob($randhairs . '/*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}', GLOB_BRACE);
    $randomImagehairs = $images[array_rand($images)];
    echo '<img style="display: block; width: 100%" src="'.$randomImagehairs.'" class="image">';




    $imagesDir = glob('../../view/img/eyes', GLOB_ONLYDIR);
    $randeyes = $imagesDir[array_rand($imagesDir)];
    $images = glob($randeyes . '/*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}', GLOB_BRACE);
    $randomImageyes = $images[array_rand($images)];
    echo '<img style="display: block; width: 100%" src="'.$randomImageyes.'" class="image">';




    $imagesDir = glob('../../view/img/nose', GLOB_ONLYDIR);
    $randnose = $imagesDir[array_rand($imagesDir)];
    $images = glob($randnose . '/*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}', GLOB_BRACE);
    $randomImagenose = $images[array_rand($images)];
    echo '<img style="display: block; width: 100%" src="'.$randomImagenose.'" class="image">';




    $imagesDir = glob('../../view/img/mouth', GLOB_ONLYDIR);
    $randmouth = $imagesDir[array_rand($imagesDir)];
    $images = glob($randmouth . '/*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}', GLOB_BRACE);
    $randomImagemouth = $images[array_rand($images)];
    echo '<img style="display: block; width: 100%" src="'.$randomImagemouth.'" class="image">';

}; ?>
        </div>
        
    </div>
        
</body>
    
</html>
