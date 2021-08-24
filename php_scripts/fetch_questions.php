<?php 
include("connection.php");



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "SELECT * FROM quizz";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    
  
                  while($row = $result->fetch_assoc()) {
                                
                      $question1=$row["qst1"];
                      $question2=$row["qst2"];
                      $question3=$row["qst4"];
                      $question4=$row["qst5"];
                  }

}
  $conn->close();
?>


