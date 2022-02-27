<?php
include 'configure/dbclass.php';
class contact{
    public $name;
    public $e_mail;
    public $message;


     public function addmessage(){
        $dbvar =new db();
        $sql="INSERT INTO `contact_us`(`full_name`, `email`, `message`) VALUES ('$_POST[user_name]','$_POST[email]','$_POST[message]') ";
         mysqli_query($dbvar->connectDB(),$sql);
     }
}
?>