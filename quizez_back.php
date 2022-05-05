<?php
include 'configure/dbclass.php';
class quizzes{
    public $Title;
    public $Answer;
   
     public function addquizez(){
        $dbvar =new mysqli("localhost", "root", "", "autocorrection");
        $sql="INSERT INTO `quizzes` (`Title`,`Answer`) VALUES('$_POST[Title]','$_POST[Answer]')";
        $result=mysqli_query($dbvar,$sql);
     }

}
?>