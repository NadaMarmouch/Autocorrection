<?php
require_once("View.php");

class UserView extends View{
  public function output(){
   // include("../templates/navbar.php");
   //$= new User();
    $text='
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
    
        <div class="container">
      <section id="content">
    
          <h1>signup Form</h1>
    
        <!-- sign-up form -->
        <form  class=""  method="POST">
    
            <input class="styles" type="text" name="name" value=""required placeholder="Enter your First name..">
            <div class="erroRS">
                <p> <?php echo $errors["fname"] ?> </p>
            </div>
    
            <input class="styles" type="text" name="lname" value=""required placeholder="Enter your Last name..">
            <div class="erroRS">
                <p> <?php echo $errors["lname"] ?> </p>
            </div>
    
    
            <input class="styles" type="text" name="email" value="" required placeholder="Enter your email..">
            <div class="erroRS">
                <p> <?php echo $errors["email"] ?> </p>
            </div>
    
            <input class="styles" type="text" name="phone" value="" required placeholder="Enter your phonenumber..">
            <div class="erroRS">
                <p> <?php echo $errors["phone"] ?> </p>
            </div>
    
            <input type="password"name="password" placeholder="Password" required="" id="password" />
            <div  class="erroRS">
          </div> 
         <br>
          <input type="password" placeholder=" Re-type your password.." required="" id="password" />
            <div class="erroRS">
                <p> </p>
            </div>
    
            <input style ="width:30%;" class="styles" type="date" name="Age" ><br>
    
            
            
            <div>
            <input type="submit"value="SignUp"name="submit">
         
            
          </div>
    
        </form>
        <!-- link bl signup php-->
        <script type="text/javascript" src="js/form_validation_signup.js"> </script>
    </body>
    
    </html>  ';
return $text;
        }

        public function Login(){
            // include("../templates/navbar.php");
            //$= new User();
             $text='
             <?php


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
    <?php include("templates/navbar.php")?> <!-- link bl navbar-->

    <h2>Login Page</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#" method="post">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fa fa-github"></i></a>
				<a href="#" class="social"><i class="fa fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fa fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" />
			<input type="email"name="email" placeholder="Email" />
			<input type="password" name="password"placeholder="Password" />
			<input type="submit" name="submit"value="Sign Up">
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method="post">
			<h1>Sign in</h1>
			<div class="social-container">
			<a href="#"><i class="fa fa-linkedin-square"></i>
			<a href="#"><i class="fa fa-github"></i>
			<a href="#"><i class="fab fa-google-plus-g"></i>
			
			</div>
			<span>or use your account</span><br>
      
      
            <input class="styles" type="email" name="email"  required placeholder="Enter your email..">
        

        <input class="styles" type="password" name="password" placeholder="Enter your password.." required>
       
			<a href="#">Forgot your password?</a>
			<input type="submit" name="submit"value="Sign In">
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


    
    <!-- link bl signup php-->
    <script type="text/javascript" src="js/form_validation_signup.js"> </script>
</body>

</html>';
         return $text;
                 }
}
?>
