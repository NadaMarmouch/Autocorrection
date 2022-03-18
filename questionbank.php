<style>
<?php include "assets/questionbank.css";
include "assets/navbar.css";
?>
</style>


<?php
include 'classAssignments.php';
  if(isset($_POST['sub'])){
    $assignment = new Assignment();  
    $assignment->addQuestion($_POST['txt']);
   } 
?> 
<html>
    <body onload='teacherMenu()'>
    <div class="cc"><?php include "templates/navbar.php"?></div>
    <div class="register">
        <form method="POST" action="questionbank.php">
            <input type="text" placeholder="Write the question here" name="txt" required><span> +</span><br>
            <input type="submit" name="sub" value="Add Questions">
            <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
</div>
    <script>
    $(document).ready(function(){
        "use strict";
        $(".input-file").delegate("span", "click", function(){
       $("<br><input type='text' placeholder='Write the question here' name='arr'><span> +</span>").insertAfter($(this)); 
    });
    }); 
    </script>
        </form>
</div>
    </body>
</html>    