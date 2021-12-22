<?php 
require_once('configure/dbclass.php');
class user
{
   public $f_name;
   public $l_name;
   public $e_mail;
   public $password;
   public $faculty;
	
   public function adduser()
   {
      $dbvariable =new DB();
      $sql="INSERT into student (fname,lname,email,password,faculty) values('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[password1]','$_POST[faculty]')";
      mysqli_query($dbvariable->connectDB(),$sql);  
   }
   public function login($email,$password){
      $dbvariable =new DB();
      $sql=" SELECT * from student where email='$email' and password='$password'";
      $result=mysqli_query($dbvariable->connectDB(),$sql);  
      $row=mysqli_fetch_array($result);
      if(mysqli_num_rows($result)==1)
      {
         if($row['email']==$email && $row['password']==$password )
         {  session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['email']=$email;
            $_SESSION['password']=$password;
            $_SESSION['fname']=$row['fname'];
            $_SESSION['lname']=$row['lname'];
            $_SESSION['faculty']=$row['faculty'];
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