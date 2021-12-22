<?php
include('includes/signup_inc.php'); // linking ma3 el php code ely fl includes file

?>
<!DOCTYPE html>
<html lang="
" dir="ltr">
                                                        
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="assets/signup.css"> <!-- hena by linked styling bt3 sign up -->
    <link rel="stylesheet" href="assets/navbar.css"> <!-- hena by linked el navbar-->
</head>

<body>
    <?php include('templates/navbar.php')?> <!-- link bl navbar-->

    <h1>Login</h1>

    <!-- sign-up form -->
    <form id="validate" class=""  method="POST">

        <input class="styles" type="email" name="email" value="<?php echo $email ?>" required placeholder="Enter your email..">
        <div class="erroRS">
            <p> <?php echo $errors['email'] ?> </p>
        </div>
        <input type="hidden" name="email-v" value="">


        <input class="styles" type="password" name="password" placeholder="Enter your password.." required>
       <br>
        <input type="submit" name="Login" value="Login">
    </form>


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