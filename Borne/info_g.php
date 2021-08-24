<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="Style.css">
    <title>Aquarium</title>
  </head>
  <body>
 
    <!--
    <div class="container_inf">
       <a href="Informations.html"> <div class="info_g"> INFORMATIONS GÉNÉRALES</div></a>
       <a href="Listing.html">  <div class="film_anim"> FILM ANIMÉ DE LA TECHNIQUE</div>
        <a href="description.html">  <div class="sav"> LE SAVIEZ-VOUS ?</div></a>
        <a href="Quizz.html"> <div class="quizz"> QUIZZ </div></a>
    </div>
--> 

<!-- INFO 1 BEGIN-->
<div class="container" style="margin:auto; color:white;">
  <div class="row">
      <div class="col">
        <a href="Informations.php"><div id="info1" style="
        padding: 10px;
        background: rgb(8, 72, 108,0.6);
        border-radius:20px; 
        font-size: 2.5vw;
        text-align: center;   
        margin-top: 30px;
        max-width: 100%;
        min-width:200px;
        
        ">INFORMATIONS GÉNÉRALES</div></a>

        <a href="#"> <div id="info2" style="
        padding: 10px;
        font-size: 2.5vw;
        background: rgb(8, 72, 108,0.6);
        border-radius:20px; 
        
        text-align: center;   
        margin-top: 30px;
        max-width: 100%;
        min-width:200px;
        ">FILM ANIMÉ DE LA TECHNIQUE<br></div></a>
         <a href="#"><div id="info3" style="
        font-size: 2.5vw;
        padding: 10px;
        background: rgb(8, 72, 108,0.6);
        border-radius:20px; 
     
        text-align: center;   
        margin-top: 30px;
        max-width: 100%;
        min-width:200px;
        ">LE SAVIEZ-VOUS ?<br></div></a>
        <a href="Quizz_backup.php"><div id="info4" style="
        font-size: 2.5vw;
        background: rgb(8, 72, 108,0.6);
        padding: 10px;
        border-radius:20px; 
       
        text-align: center;   
        margin-top: 30px;
        max-width: 100%;
        min-width:200px;
        ">QUIZZ<br></div></a>

        
      </div>
  </div>

</div>


    <footer class="footer_sticky">
               
      <div class="container">
          <div class="row">
          
          <a href="info_g.php"><input type="image"  class="left_button" src="Buttons/Left.png"></a>
          
          <a href="Langues.php" class="Langue"> Langue </a>
             
          <a href="techniques.php"> <input type="image"  class="Home" src="Buttons/Home.png"/> </a>
          <a href="Quizz_backup.php"><input type="image"  class="right_button" src="Buttons/Right.png"></a>
      </div>
       </div>
      </footer>

      <script>
        $("#info1").show();
        $("#info2,#info3,#info4,#info5,#info6").hide();
        $("#click_info1").css("background","rgb(8, 72, 108,1)");

       $( "#click_info1" ).on("click", function() {
       $(this).css("background","rgb(8, 72, 108,1)");
       $( "#info1" ).show();
       $("#info2,#info3,#info4").hide();
       $("#click_info2,#click_info3,#click_info4").css("background","rgb(8, 72, 108,0.5)")

       });
        
       $( "#click_info2" ).on("click", function() {
       $(this).css("background","rgb(8, 72, 108,1)");
       $( "#info2" ).show();
       $("#info1,#info3,#info4,#info5,#info6").hide();
       $("#click_info1,#click_info3,#click_info4").css("background","rgb(8, 72, 108,0.5)")


       
       });

       $( "#click_info3" ).on("click", function() {
       $(this).css("background","rgb(8, 72, 108,1)");
       $( "#info3" ).show();
       $("#info1,#info2,#info4,#info5,#info6").hide();
       $("#click_info1,#click_info2,#click_info4,#click_info5,#click_info6").css("background","rgb(8, 72, 108,0.5)")


       });
        
       $( "#click_info4" ).on("click", function() {
       $(this).css("background","rgb(8, 72, 108,1)");
       $( "#info4" ).show();
       $("#info1,#info2,#info3,#info5,#info6").hide();
       $("#click_info1,#click_info2,#click_info3,#click_info5,#click_info6").css("background","rgb(8, 72, 108,0.5)")

        });
     
        
   </script>
  
  </body>
</html>