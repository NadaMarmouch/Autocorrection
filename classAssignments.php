<?php
class Assignment{
public function addQuestion($question){
    include 'configure/dbclass.php';
    mysqli_query($conn, "INSERT INTO addQuestions (question) VALUES ('$question')");
    echo '<script>alert("Done, Questions have been added successfully")</script>';
    header("Refresh: 0.1");    
    return;
  }
  public function addAnswer($email, $answer){
    include 'dB.php';
    mysqli_query($conn, "INSERT INTO Answers (email, answer) VALUES ('$email', '$answer')");
    echo '<script>alert("Done, Your answers have been submitted successfully")</script>';
    header("Refresh: 0.1");    
    return;
   }
}
?>