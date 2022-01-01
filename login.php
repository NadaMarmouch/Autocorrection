<?php
include('includes/login_inc.php'); // linking ma3 el php code ely fl includes file

?>
<!DOCTYPE html>
<html lang="
" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="assets/login_styles.css"> <!-- hena by linked styling bt3 sign up -->
    <link rel="stylesheet" href="assets/navbar.css"> <!-- hena by linked el navbar-->
</head>

<body>
    <?php include('templates/navbar.php')?> <!-- link bl navbar-->

<div class="container">
  <section id="content">
    <form action="">
      <h1>Login Form</h1>
      <div>
        <input type="text" placeholder="Username" required="" id="username" />
      </div>
      <div>
        <input type="password" placeholder="Password" required="" id="password" />
      </div>
      <a href="#" class="google btn"><i class="fa fa-google fa-fw">
          </i> Login with Google+
        </a>
      <div>
        <input type="submit" value="Log in" />
        <a href="#">Forget password?</a>
        <a href="signup.php">Register</a>
        
      </div>
    </form><!-- form -->
    
  </section><!-- content -->
</div><!-- container -->


    <?php 
          
          include "user.php";

if(isset($_POST['Login'])){  
    $u=new user();
    $u->login($_POST['email'],$_POST['password']);
} ?>
    <!-- link bl signup php-->
    <script type="text/javascript" src="js/form_validation_signup.js"> </script>
</body>

</html>