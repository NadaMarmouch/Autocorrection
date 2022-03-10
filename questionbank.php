<style>
   
<?php include "assets/questionbank.css";
include "assets/navbar.css";
?> 
</style>

<body onload='teacherMenu()'>
<div class="cc"><?php include "templates/navbar.php"?></div>
<div class="register">

<form method="POST" action="">
    <div class="input-file">
    <input type="text" placeholder="Write the question here" name="array[]"><span> +</span><br>
    <input type="submit" name="sub" value="Add Questions">
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
    $(document).ready(function(){
        "use strict";
        $(".input-file").delegate("span", "click", function(){
       $("<br><input type='text' placeholder='Write the question here' name='array[]'><span> +</span>").insertAfter($(this)); 
    });
    }); 
</script>
</form>
</div>
</body>
<?php 
 include "configure/dbclass.php";
 include 'classAssignments.php';
   if(isset($_POST['sub'])){
     $assignment = new Assignment();  
    foreach($_POST['array'] as $a){
        if($a == ''){
            echo '<script>alert("Error, Fill in all the requirements")</script>';
            return;
        }
    } 
      foreach($_POST['array'] as $a){
         $assignment->addQuestion($a);
    }
 } 


?>