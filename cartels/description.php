<!DOCTYPE html>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="Style.css">
    <title>Aquarium</title>
  </head>
  <body>
  <?php
  include("../php_scripts/fetch_data.php");
  ?>



<div class="container" style="margin-top: 5%;">
  <div class="row">
    <div class="col" style="margin: 0;">
      <img  class="iimg1" src="Images/image8.png" />
      <div class="siize">
           <strong>NOM SCIENTIFIQUE </strong>: <?php echo $nom_scientifique; ?> <br>
           <strong>NOM FRANCAIS </strong>: <?php echo $nom_francais ;  ?><br>
          <strong>NOM ARABE </strong>: <?php echo $nom_arabe; ?><br>
            <strong>REGNE </strong>:  <?php echo $regne; ?> <br>
                  
            <strong>  PHYLUM </strong>:  <?php echo $phylum ?><br>
            <strong> SUPERCLASSE </strong>:  <?php echo $superclasse ?><br>
      </div>

    </div>
    <div class="col">
      <div class="col right_container" style="text-align: left;">
        <img class="iimg" src="Images/carte.png">
        <p class="siize" style="margin: 0;">
        <?php
          echo $description;
          ?>
      </p>
    </div>
  </div>
</div>
    </div>

<footer class="footer_sticky">
               
        
            
  <a href="info_g.php"><input type="image"  class="left_button" src="Buttons/Left.png"></a>
  
  <a href="Langues.php" class="Langue"> Langue </a>
     
  <a href="techniques.php"> <input type="image"  class="Home" src="Buttons/Home.png"/> </a>
  <a href="#"><input type="image"  class="right_button" src="Buttons/Right.png"></a>

</footer>
   
  </body>
</html>