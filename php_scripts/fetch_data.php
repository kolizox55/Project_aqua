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
                      $question3=$row["qst3"];
                      $question4=$row["qst4"];
                      $question5=$row["qst5"];
                  }

  }

  $sql = "SELECT * FROM caracteristiques";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    
  
    while($row = $result->fetch_assoc()) {
        $nom_scientifique=$row["nom_scientifique"];
        $nom_francais=$row["nom_francais"];
        $nom_arabe=$row["nom_arabe"];
        $regne=$row["regne"];
        $phylum=$row["phylum"];
        $superclasse=$row["superclasse"];
        $description=$row["description"];
    }

}



  $conn->close();
?>


