<?php

//assignment

 // ================ Essential Vairbales ===============
 $assignments_title = $assignments_answer="" ;
 $assignments_title_v = $assignments_answer_v = false;

 if (isset($_POST['submit'])){
   if (!empty($_POST['assignments_title-v'])){ // if non empty --> hidden input field's value ('valid' or '')
       $assignments_title = $_POST['assignments_title-v'];
       $assignments_title_v= true ;}



   if (!empty($_POST['Answer-v'])){ // if non empty --> hidden input field's value ('valid' or '')
       $assignments_answer = $_POST['Answer-v'];
       $assignments_answer_v = true ;
      }

}


 ?>