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
        
    <div style="background-color: #0e0c0d">
        
        <div class="container">
            
            <div class="row"> 
                
                <img class="col s2" src="view/img/Rainbow_Zombies.png" /> 
                
                <a id="random" class="col s3 offset-s2 red waves-effect waves-light btn">Aléatoire</a>
                
                <a id="download" class="col s3 offset-s2 blue waves-effect waves-light btn" onclick="avatar()"><span style="vertical-align: super">Télécharger</span> <i class="material-icons">system_update_alt</i></a>
            
            </div>
            
        </div>
        
    </div>
	
        
<div class="container">
    
    <div class="face"> 
        
        <img src="view/img/hairs/hairs_1.png"/> 
        <img src="view/img/hairs/hairs_2.png"/> 
        <img src="view/img/hairs/hairs_3.png"/> 
        <img src="view/img/hairs/hairs_4.png"/> 
        <img src="view/img/hairs/hairs_5.png"/> 
        <img src="view/img/hairs/hairs_5.png"/> 
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
    
    <div class="face"> 
        
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
    
</div>
        
    
        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.js"></script>
    <script type="text/javascript" src="view/js/slick.js"></script>
        
        
     <script type="text/javascript">
    $(document).ready(function(){
      $('.face').slick({
      });
    });
  </script>
        
        
    </body>
    
</html>