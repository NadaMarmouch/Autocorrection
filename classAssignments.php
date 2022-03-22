<?php
include "configure/dbclass.php";
class Assignment{
  
  private $db;
  private $conn;

  function __construct(){
    $this->db = new DBConnection();
    $this->conn = $this->db->connection();
  }

  public function addQuestion($question){
  print("Question : $question");  

  $query = "SELECT `text` FROM `questions` WHERE `text` = '".$question."'";
  $result = mysqli_query($this->conn, $query);

  if(mysqli_num_rows($result) >= 1) {
    echo '<script>alert("You already added this question")</script>';
  }
  else if(mysqli_num_rows($result) <= 1)
  {
    $query = "INSERT INTO `questions`(`text`) VALUES ('".$question."')";
    $result = mysqli_query($this->conn, $query);
    if($result)
    {
      echo '<script>alert("Done, Questions have been added successfully")</script>';
    }
    
  }
}
}

?>
<?php//   if($question->existsInDatabase())
//   {
//     echo '<script>alert("You already added this question")</script>';
//   }
//   else
//   {
//     mysqli_query($conn, "INSERT INTO questions (text) VALUES ('$question')");
//     echo '<script>alert("Done, Questions have been added successfully")</script>';    
//     return;
//   }
// }
// public function addAnswer($email, $answer){
//   include 'dB.php';
//   mysqli_query($conn, "INSERT INTO Answers (email, answer) VALUES ('$email', '$answer')");
//   echo '<script>alert("Done, Your answers have been submitted successfully")</script>';
//   header("Refresh: 0.1");    
//   return;
//   }
?>