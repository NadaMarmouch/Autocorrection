<?php
include('includes/signup_inc.php'); // linking ma3 el php code ely fl includes file

?>
<!DOCTYPE html>
<html lang="
" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Sign-Up</title>
    <link rel="stylesheet" href="assets/login_styles.css"> <!-- hena by linked styling bt3 sign up -->
    <link rel="stylesheet" href="assets/navbar.css"> <!-- hena by linked el navbar-->
</head>

<body>
    <?php include('templates/navbar.php')?> <!-- link bl navbar-->

    <div class="container">
  <section id="content">
    <form action="">
      <h1>signup Form</h1>

    <!-- sign-up form -->
    <form id="validate" class="" action="signup.php" method="POST">

        <input class="styles" type="text" name="name" value="<?php echo $name ?>" placeholder="Enter your First name..">
        <div class="erroRS">
            <p> <?php echo $errors['fname'] ?> </p>
        </div>

        <input class="styles" type="text" name="lname" value="<?php echo $lname ?>" placeholder="Enter your Last name..">
        <div class="erroRS">
            <p> <?php echo $errors['lname'] ?> </p>
        </div>


        <input class="styles" type="text" name="email" value="<?php echo $email ?>" placeholder="Enter your email..">
        <div class="erroRS">
            <p> <?php echo $errors['email'] ?> </p>
        </div>

        <input type="password" placeholder="Password" required="" id="password" />
        <div  class="erroRS">
      </div>
     
      <input type="password" placeholder=" Re-type your password.." required="" id="password" />
        <div class="erroRS">
            <p> </p>
        </div>

        <div>
        <input type="submit" value="Register" />
        <a href="login.php">Login Page</a>
        
      </div>

    </form>


    <?php include "user.php";

if(isset($_POST['signup'])){  
    $u=new user();
    $u->adduser();
} ?>
    <!-- link bl signup php-->
    <script type="text/javascript" src="js/form_validation_signup.js"> </script>
</body>

</html>