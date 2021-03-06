<?php
session_start();
?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<link rel="stylesheet" href="assets/navbar.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <?php if($_SESSION['type']==1){?>
    <a href="courses.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> Courses</a>
    <a href="Score.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-graduation-cap"></i> Transcript</a>
    <a href="control.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> LogOut</a>
    <?php }
    else if($_SESSION['type']==2){
    ?>
    <a href="questionbank.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-question-circle"></i> Bank Questions</a>
    <a href="instructor_feedback.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> Feedback</a>
    <a href="instructorprofile.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> Profile</a>
    <a href="control.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> LogOut</a>
    <?php } else { ?>
    <a href="homepage.php" class="w3-bar-item w3-button"><i class="fa fa-home "></i> HOME</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
    <a href="control.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> Join us</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-green"> <input type="text" placeholder="Search..">
      <i class="fa fa-search"></i>
     
    </a>
    <?php } ?>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="BankQuestions.php" class="w3-bar-item w3-button" onclick="toggleFunction()"> Bank Questions</a>
    <a href="Courses.php" class="w3-bar-item w3-button" onclick="toggleFunction()">Courses</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    <a href="Login.php" class="w3-bar-item w3-button" onclick="toggleFunction()">Join us</a>
    <a href="#" class="w3-bar-item w3-button">SEARCH</a>
  </div>
</div>




<!-- <nav>
  <ul>
    <li>
    <a href="homepage.php" class="home">Home</a> 
    </li>
    <li>
     <a href= "courses.php">Courses</a> 
    </li>
    <li>
    <a href="questionbank.php">Question Bank</a>
    </li>
    <li class="us"> <a href='#contact'>Contact Us</a> </li>
  <li> 
   <a href="Logininstructor.php">Instructor</a>
  </li>
  <li> 
   <a href="Login.php">Join Us</a>
  </li>
  
  </ul>
</nav> -->