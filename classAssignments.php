<?php
include "configure/dbclass.php";
class Assignment{
  
  private $db;
  private $conn;

  function __construct(){
    $this->db = new DBConnection();
    $this->conn = $this->db->connection();
  }

  public function addQuestionModelAnswer($question,$answer){
  // print("Question : $question");  

  $query = "SELECT `text` FROM `questions` WHERE `text` = '".$question."' AND `modelanswer` = '".$answer."'";
  $result = mysqli_query($this->conn, $query);

  if(mysqli_num_rows($result) >= 1) {
    echo '<script>alert("You already added this question")</script>';
  }
  else if(mysqli_num_rows($result) <= 1)
  {
    $query = "INSERT INTO `questions`(`text`,`modelanswer`) VALUES ('".$question."','".$answer."')";
    $result = mysqli_query($this->conn, $query);
    if($result)
    {
      echo '<script>alert("Done, Questions have been added successfully")</script>';
    }
    
  }
}
}

?>
