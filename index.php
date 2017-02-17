<?php include 'model/pdo.php'; ?>
<!DOCTYPE html>

<html>

<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.css"/>
    <link rel="stylesheet" type="text/css" href="view/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="view/css/slick-theme.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.css"/>
    <link rel="stylesheet" href="view/css/style.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="utf-8"/>
    <title>Face_Generator_Solo</title>

</head>

<body>

<div id="fb-root"></div>
<script>
    (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.8";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

 <img id="logo" src="view/img/Rainbow_Zombies.png" />

    <div>

        <div class="container">

            <div class="row">

                <form action="controller/php/random.php" method="post">
                    <button name="rand" type="submit" id="random" class="col s3 offset-s2 red waves-effect waves-light btn">Aléatoire</button>
                </form>


                <a id="download" class="col s3 offset-s2 blue waves-effect waves-light btn" onclick="avatar()"><span style="vertical-align: super">Télécharger</span> <i class="material-icons">system_update_alt</i></a>

            </div>

        </div>

    </div>


<div style="margin-top: 6em" class="container">

    <div class="container">
        
        <div id="zombieModeDiv" class="container" id="photo">

            <div class="face">

                <img src="view/img/hairs/hairs_1.png"/>
                <img src="view/img/hairs/hairs_2.png"/>
                <img src="view/img/hairs/hairs_3.png"/>
                <img src="view/img/hairs/hairs_4.png"/>
                <img src="view/img/hairs/hairs_5.png"/>
                <img src="view/img/hairs/hairs_6.png"/>
                <img src="view/img/hairs/hairs_7.png"/>
                <img src="view/img/hairs/hairs_8.png"/>
                <img src="view/img/hairs/hairs_9.png"/>
                <img src="view/img/hairs/hairs_10.png"/>
            </div>

            <div class="face">

                <img src="view/img/eyes/eyes_1.png" />
                <img src="view/img/eyes/eyes_2.png" />
                <img src="view/img/eyes/eyes_3.png" />
                <img src="view/img/eyes/eyes_4.png" />
                <img src="view/img/eyes/eyes_5.png" />
                 <img src="view/img/eyes/eyes_6.png" />
                <img src="view/img/eyes/eyes_7.png" />
                <img src="view/img/eyes/eyes_8.png" />
                <img src="view/img/eyes/eyes_9.png" />
                <img src="view/img/eyes/eyes_10.png" />

            </div>

            <div class="face">

                <img src="view/img/nose/nose_1.png" />
                <img src="view/img/nose/nose_2.png" />
                <img src="view/img/nose/nose_3.png" />
                <img src="view/img/nose/nose_4.png" />
                <img src="view/img/nose/nose_5.png" />
                <img src="view/img/nose/nose_6.png" />
                <img src="view/img/nose/nose_7.png" />
                <img src="view/img/nose/nose_8.png" />
                <img src="view/img/nose/nose_9.png" />
                <img src="view/img/nose/nose_10.png" />

            </div>

            <div class="face" id="droppable" class="ui-widget-header">

                <img src="view/img/mouth/mouth_1.png" />
                <img src="view/img/mouth/mouth_2.png" />
                <img src="view/img/mouth/mouth_3.png" />
                <img src="view/img/mouth/mouth_4.png" />
                <img src="view/img/mouth/mouth_5.png" />
                <img src="view/img/mouth/mouth_6.png" />
                <img src="view/img/mouth/mouth_7.png" />
                <img src="view/img/mouth/mouth_8.png" />
                <img src="view/img/mouth/mouth_9.png" />
                <img src="view/img/mouth/mouth_10.png" />

            </div>
        


        <div id="draggable" class="ui-widget-content">
        <img src="view/img/bulle.svg" alt="bulle svg">
        </div>
            
         </div>   

    </div>

</div>
    
<div style="margin-top: 3em" class="container">
    
     <div class="row">
    
         <div class="center-align"><button onclick id="zombieModeButton" class="button">Zombie Mode!</button></div>
         
    </div>

</div>

<?php

//$response = $dbh->query("SELECT face FROM head ORDER BY id_face DESC LIMIT 0,5");
        
$sql = "SELECT face FROM head ORDER BY id_face DESC LIMIT 0,5";
$res = $dbh->query($sql); ?>

<div style="margin-top: 7em" class="container">

    <div class="row">

        <h3 style="margin-bottom: 1em; color: #2196F3; text-align: center" class="center-align">5 derniers avatars crées</h3>

        <?php

        while ($donnees = $res->fetch())
        {
            $urlImage = $donnees['face']; //'url' contains the URL
            $result = file_get_contents($urlImage);
            ?>  <img class="col s4 offset-s3" src="<?=$urlImage?>"> <?php
        }

         // while ($donnees = $res->fetch())
        //{
            //$urlImage = $donnees['face']; //'url' contains the URL
            //$result = file_get_contents($urlImage);
            //?> <!-- <img class="col s6 offset-s3" src="<?=$urlImage?>">--> <?php
        //}


        //}

        //else if ($res->rowCount() == 2)

        //{
         //while ($donnees = $res->fetch())
        //{
            //$urlImage = $donnees['face']; //'url' contains the URL
            //$result = file_get_contents($urlImage);
            //?> <!-- <img class="col s6 offset-s3" src="<?=$urlImage?>">--> <?php
        //}


        //}

        //else if ($res->rowCount() == 3)

        //{
         //while ($donnees = $res->fetch())
        //{
            //$urlImage = $donnees['face']; //'url' contains the URL
            //$result = file_get_contents($urlImage);
            //?> <!-- <img class="col s6 offset-s3" src="<?=$urlImage?>">--> <?php
        //}

        //}

        //else if ($res->rowCount() == 4)

        //{
         //while ($donnees = $res->fetch())
        //{
            //$urlImage = $donnees['face']; //'url' contains the URL
            //$result = file_get_contents($urlImage);
            //?> <!-- <img class="col s6 offset-s3" src="<?=$urlImage?>">--> <?php
        //}

        //}

        //else if ($res->rowCount() >= 5)

        //{
         //while ($donnees = $res->fetch())
        //{
            //$urlImage = $donnees['face']; //'url' contains the URL
            //$result = file_get_contents($urlImage);
            //?> <!--  <img class="col s6 offset-s3" src="<?=$urlImage?>">--> <?php
        //}

        //}

        $res->closeCursor();
        ?>




<g:plus action="share"></g:plus>

<div class="fb-share-button" data-href="http://quangb.marmier.codeur.online/avatar-generator/" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fryanf.marmier.codeur.online%2FFebruary%2FWork%2FTeam%2Favatar-generator%2F&amp;src=sdkpreparse">Partager</a></div>

    </div>

</div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.js"></script>
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="view/js/slick.js"></script>
	<script src="view/js/html2canvas.js"></script>
	<script src="view/js/face_enregistrer.js"></script>

    <script src="view/js/zombieMode.js"></script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
     <script type="text/javascript">
    $(document).ready(function(){
      $('.face').slick({
      });
    });
  </script>

  <script>
$( function() {  $( "#text" ).draggable();  $( "#draggable" ).draggable();  $( "#droppable" ).droppable({    drop: function( event, ui ) {      $( this )        .addClass( "ui-state-highlight" )    }  });} );
</script>


    </body>

</html>
