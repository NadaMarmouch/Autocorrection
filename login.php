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
    <link rel="stylesheet" href="assets/test2.css">
</head>

<body>
    <?php include('templates/navbar.php')?> <!-- link bl navbar-->

    <h2>Login Page</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fa fa-github"></i></a>
				<a href="#" class="social"><i class="fa fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fa fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="homepage.php">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span><br>
      <input class="styles" type="email" name="email" value="<?php echo $email ?>" required placeholder="Enter your email..">
        <div class="erroRS">
            <p> <?php echo $errors['email'] ?> </p>
        </div>
        <input type="hidden" name="email-v" value="">


        <input class="styles" type="password" name="password" placeholder="Enter your password.." required>
       
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
     
			<div class="overlay-panel overlay-right">
				<h1>Hello,</h1>
				<p>Enter your personal details and start journey with us</p>

       
        <a  class="ghost" href="signup.php">Sign Up</a>
     
        
			</div>
		</div>
	</div>
</div>


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