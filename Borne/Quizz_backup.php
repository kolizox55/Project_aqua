<!DOCTYPE html>
<html>
    <head>
        <title>Tabs</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="stylesheet" href="Style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style>
            
        </style>
    </head>
    <body>
        <?php

        include("../php_scripts/fetch_data.php");        

        ?>

        <div class="container">
            <div class="row justify-content-center">   
                <div class="col-xs-12">
                    <nav class="multiTabs">
                        <a class="num1" href="javascript:void(0)" data-trigger='content1'> 1 </a>  
                        <a class="num2" href="javascript:void(0)" data-trigger='content2'> 2 </a>
                        <a class="num3" href="javascript:void(0)" data-trigger='content3'> 3 </a>
                        <a class="num4" href="javascript:void(0)" data-trigger='content4'> 4 </a>
                        <a class="num5" href="javascript:void(0)" data-trigger='content5'> 5 </a>
                        <input type="image" src="Buttons/right_button.png" class="Right_skip" onclick="next()" />
                    </nav>
                         
                </div>
            </div>
        </div>
       


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xs-6 ">
                    <img style=" padding-top:30px;width: 110%;" src="Images/image10.png" >
                </div>

            </div>
                                <!--  CONTENT 1-->

 <div  class="tabcontent" id="content1">
            <div class="row justify-content-center">
                <div style="padding-top: 20px;" class="col-sm-8  justify-content-center quizz_container">
               

                <p>  
                    <?php echo $question1;  ?>
                </p>
                </div>
            </div> 
       
        <div  class="container">
            <div class="row justify-content-center">
                <div class="col-4" >
                <a href="#">
                    <div class="Rep_1" onclick="highlight(this)">
                        Réponse 1
                    </div>
                    </a>
            </div> 
                <div class="col-4  ">
                    <a href="#">
                        <div class="Rep_2" onclick="highlight(this)">
                        Réponse 2   
                    </div>
                    </a>
                </div>
                </div>
            </div>
        </div>
        


                                            <!--  CONTENT 2-->
            <div  class="tabcontent" id="content2">
                <div class="row justify-content-center">
                    <div style="padding-top: 20px;" class="col-sm-5  justify-content-center quizz_container">
                <p>  
                <?php echo $question2;  ?>
               </p>
            </div>
                </div>
      <div  class="container-fluid">
          <div class="row justify-content-center">
              <div class="col-4 ">
              <a href="#">
                  <div class="Rep_1" onclick="highlight(this)">
                      Réponse 1
                  </div>
                  </a>
          </div> 
              <div class="col-4 ">
                  <a href="#">
                      <div class="Rep_2" onclick="highlight(this)">
                      Réponse 2   
                  </div>
                  </a>
              </div>
              </div>
          </div>
         </div>
        </div>
          
                                         <!--  CONTENT 3-->
    <div  class="tabcontent" id="content3">
                <div class="row justify-content-center">
                    <div style="padding-top: 20px;" class="col-sm-5  justify-content-center quizz_container">
                <p>  <?php echo $question3;  ?>
               </p>
            </div>
                </div>
      <div  class="container">
          <div class="row justify-content-center">
              <div class="col-4 ">
              <a href="#">
                  <div class="Rep_1" onclick="highlight(this)">
                      Réponse 1
                  </div>
                  </a>
          </div> 
              <div class="col-4 ">
                  <a href="#">
                      <div class="Rep_2" onclick="highlight(this)">
                      Réponse 2   
                  </div>
                  </a>
              </div>
              </div>
          </div>
         </div>
        </div>


                                    <!--  CONTENT 4-->
    <div  class="tabcontent" id="content4">
                <div class="row justify-content-center">
                    <div style="padding-top: 20px;" class="col-sm-5  justify-content-center quizz_container">
                <p>  
                <?php echo $question4;  ?>
               </p>
            </div>
                </div>
      <div  class="container">
          <div class="row justify-content-center">
              <div class="col-4 ">
              <a href="#">
                  <div class="Rep_1" onclick="highlight(this)">
                      Réponse 1
                  </div>
                  </a>
          </div> 
              <div class="col-4 ">
                  <a href="#">
                      <div class="Rep_2" onclick="highlight(this)">
                      Réponse 2   
                  </div>
                  </a>
              </div>
              </div>
          </div>
         </div>
        </div>
    

                                     <!--  CONTENT 5-->
        <div  class="tabcontent" id="content5">
                <div class="row justify-content-center">
                    <div style="padding-top: 20px;" class="col-sm-5  justify-content-center quizz_container">
                <p>  
                <?php echo $question5;  ?>
               </p>
            </div>
                </div>
      <div  class="container">
          <div class="row justify-content-center">
              <div class="col-4 ">
              <a href="#">
                  <div class="Rep_1" onclick="highlight(this)">
                      Réponse 1
                  </div>
                  </a>
          </div> 
              <div class="col-4 ">
                  <a href="#">
                      <div class="Rep_2" onclick="highlight(this)">
                      Réponse 2   
                  </div>
                  </a>
              </div>
              </div>
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
                $(".num1").css("background","rgb(8, 72, 108,1)");
                var is_selected=0;
                $("#content1").show();
                $("#content2").hide();
                $("#content3").hide();
                $("#content4").hide();
                $("#content5").hide();


                function highlight(target) {
                if(is_selected==0){    
                target.style.border = "5px solid green";
                is_selected =1;
                }
                }
    
                var currentTab = 1;
                $("#content").show();
            
    
                
                function next(){
                    
                    if(currentTab < 5){
                        $(".tabcontent").hide();
                        currentTab++;
                        $("#content"+(currentTab)).show();
                    
                    if(currentTab-1==1){
                        $(".num1").css("background","rgb(8, 72, 108,0.5)");
                        $(".num2").css("background","rgb(8, 72, 108,1)");
                        $(".num3").css("background","rgb(8, 72, 108,0.5)");
                        $(".num4").css("background","rgb(8, 72, 108,0.5)");
                        $(".num5").css("background","rgb(8, 72, 108,0.5)");
                    }
                    if(currentTab-1==2){
                        $(".num1").css("background","rgb(8, 72, 108,0.5)");
                        $(".num2").css("background","rgb(8, 72, 108,0.5)");
                        $(".num3").css("background","rgb(8, 72, 108,1)");
                        $(".num4").css("background","rgb(8, 72, 108,0.5)");
                        $(".num5").css("background","rgb(8, 72, 108,0.5)");
                    }
                    if(currentTab-1==3){
                        $(".num1").css("background","rgb(8, 72, 108,0.5)");
                        $(".num2").css("background","rgb(8, 72, 108,0.5)");
                        $(".num3").css("background","rgb(8, 72, 108,0.5)");
                        $(".num4").css("background","rgb(8, 72, 108,1)");
                        $(".num5").css("background","rgb(8, 72, 108,0.5)");
                    }
                    if(currentTab-1==4){
                        $(".num1").css("background","rgb(8, 72, 108,0.5)");
                        $(".num2").css("background","rgb(8, 72, 108,0.5)");
                        $(".num3").css("background","rgb(8, 72, 108,0.5)");
                        $(".num4").css("background","rgb(8, 72, 108,0.5)");
                        $(".num5").css("background","rgb(8, 72, 108,1)");
                    }
                  
    }
    
                    is_selected=0;
}
        
            </script>
    </body>
</html>