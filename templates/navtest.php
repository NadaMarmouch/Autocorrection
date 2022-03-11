<?php

//include('configure\dbclass.php') ; // database connection
session_start() ; // starting th session

$current_name = $current_email =  $current_id = "" ;

if (isset($_SESSION['name'])) {
  if (!empty($_SESSION['name'])){
    $current_name = $_SESSION['name'];
    $current_email = $_SESSION['email'];
    $current_id = $_SESSION['id'];
  }
  else {
    $current_name = $current_email = $current_id = "" ;

  }

}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title> <!-- esm el page fl bar-->
    <link rel="stylesheet" href="https://fontawesome.com/v5.15/icons/angle-double-down?style=regular"> <!-- linking the icon-->

  </head>
  <body>
  <nav>
    
      <div class="links">
        <ul>
          <li> <a href="homepage.php" class="w3-bar-item w3-button">HOME</a> </li>
          <li> <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a> </li>
          <li> <a href="courses.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> Courses</a> </li>
          
            <!-- only if logged in as Instructor-->
        <?php if ($current_name == "Instructor") { ?>
          <li> <a href="instructorprofile.php" class="home">Profile page</a> </li>
          <li> <a href="instructor_feedback.php" class="home">Feedback</a> </li>
          <li> <a href="questionbank.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-question-circle"></i> Bank Questions</a> </li>
        <?php } else { ?>
          <!--<li> <a href="gallery.php"> Gallery</a> </li> -->

        <?php } ?>

        <!-- if logged in as a normal user-->
        <?php if ($current_name) { ?>
            <li><a href="Score.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-graduation-cap"></i> Transcript</a> </li>
            <li> <a href="courses.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> Courses</a> </li>
          

          </div>

        <?php } else { ?>

            <li> <a href="Login.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> Join us</a></li>

        <?php } ?>




        </ul>
      </div>




    </div>
  </nav>

  </body>
</html>