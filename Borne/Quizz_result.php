<!DOCTYPE html>
<html>
    <head>
        <title>Tabs</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-compatible" content="ie=edge">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="stylesheet" href="Style.css">
        <style>
            .tabcontent { display: none;}
            .tabcontent .active{display: block; display: show ;}
        </style>
    </head>
    <body>
       <!-- <div class="container ">

      <div class="row">
           <H1 style="color: white;"> 
                Bilan réponses
            </H1>
      </div>
           <div class="row">
               <div class="Quizz_rep">
             
                 </div>
        </div>
        </div>

       
            <div class="Reponses">
                    <div class="Reponse1"> Réponse 1</div>  
                    <div class="Reponse2"> Réponse 2</div>   
                    <div class="Reponse3"> Réponse 3</div>  
                    <div class="Reponse4"> Réponse 4</div>  
                    <div class="Reponse5"> Réponse 5</div>  
                    <div class="Reponse6"> Réponse 6</div>  
            </div>

            
            <div class="line1">
            <input id="red_active1" type="image" class="red" src="Buttons/Red-LED-Active.png"/>
            <input id="red_inactive1" type="image" class="red"  src="Buttons/Red-LED-Disabled.png">
            <input id="green_active1" type="image" class="green" src="Buttons/Green_LED_Active.png">
            <input id="green_inactive1" type="image" class="green"  src="Buttons/Greed_LED_Disabled.png">
            </div>
            <div class="line2">
            <input id="red_active2" type="image" class="red" src="Buttons/Red-LED-Active.png"/>
            <input id="red_inactive2" type="image" class="red"  src="Buttons/Red-LED-Disabled.png">
            <input id="green_active2" type="image" class="green" src="Buttons/Green_LED_Active.png">
            <input id="green_inactive2" type="image" class="green"  src="Buttons/Greed_LED_Disabled.png">
            </div>
            <div class="line3">
            <input id="red_active3" type="image" class="red" src="Buttons/Red-LED-Active.png"/>
            <input id="red_inactive3" type="image" class="red"  src="Buttons/Red-LED-Disabled.png">
            <input id="green_active3" type="image" class="green" src="Buttons/Green_LED_Active.png">
            <input id="green_inactive3" type="image" class="green"  src="Buttons/Greed_LED_Disabled.png">
            </div>
            <div class="line4">
            <input id="red_active4" type="image" class="red" src="Buttons/Red-LED-Active.png"/>
            <input id="red_inactive4" type="image" class="red"  src="Buttons/Red-LED-Disabled.png">
            <input id="green_active4" type="image" class="green" src="Buttons/Green_LED_Active.png">
            <input id="green_inactive4" type="image" class="green"  src="Buttons/Greed_LED_Disabled.png">
            </div>
            <div class="line5">
            <input id="red_active5" type="image" class="red" src="Buttons/Red-LED-Active.png"/>
            <input id="red_inactive5" type="image" class="red"  src="Buttons/Red-LED-Disabled.png">
            <input id="green_active5" type="image" class="green" src="Buttons/Green_LED_Active.png">
            <input id="green_inactive5" type="image" class="green"  src="Buttons/Greed_LED_Disabled.png">
            </div>
            <div class="line6">
            <input id="red_active6" type="image" class="red" src="Buttons/Red-LED-Active.png"/>
            <input id="red_inactive6" type="image" class="red"  src="Buttons/Red-LED-Disabled.png">
            <input id="green_active6" type="image" class="green" src="Buttons/Green_LED_Active.png">
            <input id="green_inactive6" type="image" class="green"  src="Buttons/Greed_LED_Disabled.png">
            </div>     





            <div class="desc">
            <div class="Rep_desc1">Praesent sed nibh semper, elementum metus at, 
                sodales lorem. Nunc pretium hendrerit nisi, at hendrerit enim vehicula 
                et. eget luctus urna posuere.</div>
            <div class="Rep_desc2">Praesent sed nibh semper, elementum metus at, 
                sodales lorem. Nunc pretium hendrerit nisi, at hendrerit enim vehicula 
                et. eget luctus urna posuere.</div>
            <div class="Rep_desc3">Praesent sed nibh semper, elementum metus at, 
                sodales lorem. Nunc pretium hendrerit nisi, at hendrerit enim vehicula 
                et. eget luctus urna posuere.</div>
            <div class="Rep_desc4">Praesent sed nibh semper, elementum metus at, 
                sodales lorem. Nunc pretium hendrerit nisi, at hendrerit enim vehicula 
                et. eget luctus urna posuere.</div>
            
            <div class="Rep_desc5">Praesent sed nibh semper, elementum metus at, 
                sodales lorem. Nunc pretium hendrerit nisi, at hendrerit enim vehicula 
                et. eget luctus urna posuere.</div> 
            <div class="Rep_desc6">Praesent sed nibh semper, elementum metus at, 
                sodales lorem. Nunc pretium hendrerit nisi, at hendrerit enim vehicula 
                et. eget luctus urna posuere.</div>   
            

            </div>

-->

    <div class="container " style="">
        <div class="row justify-content-center">
            <div class="col-4" style="margin-top:auto; margin-bottom:auto;">
            <h1 style="text-align: center;font-size: 2.5vw;">BILAN QUIZZ</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-2">
            <h1 style="text-align: center; background-color:white ; border-radius:20px; opacity: 0.5 ;padding: 20px;"></h1>
        </div>
        </div>

    </div>

<div class="container" style=" margin: 0;
margin: auto;">
  

    <div class="container ">
        <div class="row ">
            <div class="col-4"  style="margin-top:auto; margin-bottom:auto;">
                <div class="Reponse1">réponse 1</div> <br>
            
            </div>
            
            <div class="col-2" style="margin:auto;">
                <div class="line1">
                    <input id="red_active1" type="image" class="red" src="Buttons/Red-LED-Active.png"/>
                    <input id="red_inactive1" type="image" class="red"  src="Buttons/Red-LED-Disabled.png">
                    <input id="green_active1" type="image" class="green" src="Buttons/Green_LED_Active.png">
                    <input id="green_inactive1" type="image" class="green"  src="Buttons/Greed_LED_Disabled.png">
                    </div>

            </div>
            <div class="col-6" >
                
                <p class="quizz_size"> amet itaque aspernatur praesentium quis asperiores repudiandae numquam velit fugit obcaecati?</p>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row ">
            <div class="col-4">
                <div class="Reponse1">réponse 2</div> <br>
               

            </div>
                <div class="col-2" style="margin:auto;">
                 <div class="line1">
                    <input id="red_active2" type="image" class="red" src="Buttons/Red-LED-Active.png"/>
                    <input id="red_inactive2" type="image" class="red"  src="Buttons/Red-LED-Disabled.png">
                    <input id="green_active2" type="image" class="green" src="Buttons/Green_LED_Active.png">
                    <input id="green_inactive2" type="image" class="green"  src="Buttons/Greed_LED_Disabled.png">
                </div>

            </div>
            <div class="col-6" style="">
                <p class="quizz_size">loremque temporibus nihil praesentium quisquam ipsa nemo qui nostrum nisi voluptates placeat delectus, est id consectetur ipsum illum, earum dolores.</p>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row ">
            <div class="col-4">
                <div class="Reponse1">réponse 3</div> <br>
               

            </div>

            <div class="col-2" style="margin:auto;">
                <div class="line1">
                   <input id="red_active3" type="image" class="red" src="Buttons/Red-LED-Active.png"/>
                   <input id="red_inactive3" type="image" class="red"  src="Buttons/Red-LED-Disabled.png">
                   <input id="green_active3" type="image" class="green" src="Buttons/Green_LED_Active.png">
                   <input id="green_inactive3" type="image" class="green"  src="Buttons/Greed_LED_Disabled.png">
               </div>

           </div>

            <div class="col-6" style="">
                <p class="quizz_size"> odio dolore illo sunt eaque. Impedit illo facilis debitis accusantium. Atque ex recusandae ducimus, illum ea impedit!</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row ">
            <div class="col-4">
                <div class="Reponse1">réponse 4</div> <br>
               

            </div>
            <div class="col-2" style="margin:auto;">
                    <div class="line1">
                       <input id="red_active4" type="image" class="red" src="Buttons/Red-LED-Active.png"/>
                       <input id="red_inactive4" type="image" class="red"  src="Buttons/Red-LED-Disabled.png">
                       <input id="green_active4" type="image" class="green" src="Buttons/Green_LED_Active.png">
                       <input id="green_inactive4" type="image" class="green"  src="Buttons/Greed_LED_Disabled.png">
                   </div>
   
               </div>
   

            <div class="col-6" style="">
                <p class="quizz_size">Lorem ipsum doloexcepturi minus blanditiis sapientconsequatur accusamus nihil eius voluptas. Dolorem veritatis omnis iure.<p> 
               

            </div>
        </div>
    </div>

</div>
<div class="footer_sticky">
     
          
    <a href="info_g.php"><input type="image"  class="left_button" src="Buttons/Left.png"></a>
    
    <a href="Langues.php" class="Langue"> Langue </a>
       
    <a href="techniques.php"> <input type="image"  class="Home" src="Buttons/Home.png"/> </a>
    <a href="Quizz_result.php"><input type="image"  class="right_button" src="Buttons/Right.png"></a>

</div>
    
        <script>

                $("#red_inactive1").hide();
                $("#red_active2").hide();
                $("#red_inactive3").hide();
                $("#red_active4").hide();
                $("#red_active5").hide();
                $("#red_inactive6").hide();
                $


                $("#green_active1").hide();
                $("#green_inactive2").hide();
                $("#green_active3").hide();
                $("#green_inactive4").hide();
                $("#green_inactive5").hide();
                $("#green_active6").hide();

        </script>



    </body>
</html>