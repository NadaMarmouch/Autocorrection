<?php
include 'configure/dbclass.php';
class assignment{
    public $assignments_title;
    public $assignments_answer;
    public function addassignmeent(){
        $dbvar =new mysqli("localhost", "root", "", "autocorrection");
        $title=$_POST["Title"];
        $answer=$_POST["Answer-v"];
        $sql="INSERT INTO assignment VALUES(NULL,'$title','$answer')";
        $result=mysqli_query($dbvar,$sql);
    }

}
?>