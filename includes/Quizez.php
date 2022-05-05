<?php

//Quizez

 // ================ Essential Vairbales ===============
 $Title = $Answer="" ;
 $Title_v = $Answer_v = false;

 if (isset($_POST['submit'])){
   if (!empty($_POST['Title-v'])){ // if non empty --> hidden input field's value ('valid' or '')
       $Title = $_POST['Title'];
       $Title_v= true ;}



   if (!empty($_POST['Answer-v'])){ // if non empty --> hidden input field's value ('valid' or '')
       $Answer = $_POST['Answer'];
       $Answer_v = true ;
      }

}


 ?>