<?php
$conn =   mysqli_connect("localhost","root", "","autocorrection");
 // ================ Essential Vairbales ===============
 $name = $email = $subject = $message = $phone = "" ;
 $name_v = $email_v  = $subject_v = $message_v =  $phone_v = false;

 if (isset($_POST['submit'])){
   if (!empty($_POST['name-v'])){ // if non empty --> hidden input field's value ('valid' or '')
       $name = $_POST['user_name'];
       $name_v= true ;}



   if (!empty($_POST['email-v'])){ // if non empty --> hidden input field's value ('valid' or '')
       $email = $_POST['email'];
       $email_v = true ;
      }


  if (!empty($_POST['message-v'])){ // if non empty --> hidden input field's value ('valid' or '')
      $message = $_POST['message'];
      $message_v = true ;
    }

}
 ?>