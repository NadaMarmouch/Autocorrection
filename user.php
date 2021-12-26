<?php 
require_once('configure/dbclass.php');
class user
{
   public $name;
   public $lname;
   public $e_mail;
   public $password;
	
   public function adduser()
   {
      $dbvariable =new DB();
      $sql="INSERT into user (fname,lname,email,password) values('$_POST[name]','$_POST[lname]','$_POST[email]','$_POST[password1]')";
      mysqli_query($dbvariable->connectDB(),$sql);  
   }
   public function login($email,$password){
      $dbvariable =new DB();
      $sql=" SELECT * from user where email='$email' and password='$password'";
      $result=mysqli_query($dbvariable->connectDB(),$sql);  
      $row=mysqli_fetch_array($result);
      if(mysqli_num_rows($result)==1)
      {
         if($row['email']==$email && $row['password']==$password )
         {  session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['email']=$email;
            $_SESSION['password']=$password;
            $_SESSION['name']=$row['fname'];
            $_SESSION['lname']=$row['lname'];
            header("Location:homepage.php");
         }
         else
         {
            echo "<scrript>alert('Invalid Email and Password');</script>";
         }  
      }

   }
  
}
?>