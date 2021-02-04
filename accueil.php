<!DOCTYPE html>
<html lang="fr">
    <head>
        <link href="style/styleAjout.css" rel="stylesheet">
     
        <link href="style/menu.css" rel="stylesheet">
        <link href="style/titre/titre.css"rel="stylesheet" media="screen" type="text/css"/>
        <script src="style/jquery.js"></script> 
        <script src="style/titre/titre1.js"></script> 
        <script src="style/titre/titre.js"></script>
     
        <script type="text/javascript"> 
           $(function() {
           var txt = $('#txtlzr'); 
           txt.textualizer();
           txt.textualizer('start');
           })
        </script>
     
        <link href="style/bootstrapv3.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="style/bootstrapv3.3/fonts/glyphicons-halflings-regular.svg" rel="stylesheet" id="bootstrap-css">
        <link href="style/bootstrapv3.3/js/bootstrap.min.js" rel="stylesheet" id="bootstrap-css">
        <link href="style/bootstrapv3.3/css/bootstrap-theme.min.css" rel="stylesheet" id="bootstrap-css">
     </head>
<body>  
  <div class="container-fluid">
    <div id="txtlzr">
      <p>LIVRET NUMERIQUE</p>
      <p>Interface de gestion</p>
      <p>GRETA DE LA LOIRE</p>	
    </div> 
  </div>
<?php
  require_once( "menuAjout.html" );
?> 
  </br></br>
    <div class="gretaLogo">
      <img src="style/img/logoGreta.gif" alt="gretaLogo">
    </div>
  </br></br></br></br>
  <center>
    <div class="livret">
      <img src="style/img/livret.jpeg" alt="livret" class="responsive">
    </div>
  </center>
    <div class="eduform">
      <img src="style/img/eduform.gif" alt="eduform">
    </div>
</body> 
</html>     