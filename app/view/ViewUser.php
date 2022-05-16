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
        <link rel="stylesheet" href="assets/sign.css"> <!-- hena by linked styling bt3 sign up -->
        <link rel="stylesheet" href="assets/navbar.css"> <!-- hena by linked el navbar-->
    </head>
    
    <body>
    <div class="container">
      <div class="title">Registration</div>
      <div class="content">
        <form  method="post">
          <div class="user-details">
            <div class="input-box">
              <span class="details">Full Name</span>
              <input type="text" placeholder="Enter your First Name" name="fname" required>
            </div>
            <div class="input-box">
              <span class="details">Last Name</span>
              <input type="text" placeholder="Enter your Last Name" required name="lname">
            </div>
            <div class="input-box">
              <span class="details">Email</span>
              <input type="text" placeholder="Enter your email" required name="email">
            </div>
            <div class="input-box">
              <span class="details">Phone Number</span>
              <input type="text" placeholder="Enter your number" name="phonenumber" required>
            </div>
            <div class="input-box">
              <span class="details">Password</span>
              <input type="password" placeholder="Enter your password" required>
            </div>
            <div class="input-box">
              <span class="details">Confirm Password</span>
              <input type="password" placeholder="Confirm your password" required>
            </div>
          </div>
          <div class="gender-details">
            <input type="radio" name="gender"value="male" id="dot-1">
            <input type="radio" name="gender" value="female"id="dot-2">
            <input type="radio" name="gender" value="other"id="dot-3">
            <span class="gender-title">Gender</span>
            <div class="category">
              <label for="dot-1">
              <span class="dot one"></span>
              <span class="gender">Male</span>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="gender">Female</span>
            </label>
            <label for="dot-3">
              <span class="dot three"></span>
              <span class="gender">Prefer not to say</span>
              </label>
            </div>
          </div>
          <div class="form-group"> 
              <label class="group-title">Major/Faculty</label>
                <div class="details">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                <select name="major" class="form-control selectpicker">
                  <option value="">Select your Faculuty</option>
                  <option value="Computer Science">Computer Science</option>
                  <option value="Bussiness">Bussiness</option>
                  <option value="Alsun">Alsun</option>
                  <option value="Mass Communication">Mass communication</option>
                  <option value="Pharmacy">Pharamacy</option>
                  <option value="Densitry">Densitry</option>
                  <option value="Architecture">Architecture</option>
                  <option value="Electronics">Electronics</option>
  
                </select>
              </div>
            </div>
            </div>
            <div class="form-group"> 
              <label class="group-title">Date</label>
              <div>
            <input style ="width:30%;" class="styles" type="date" name="Age" ><br></div>
  </div>
          <div class="button">
            <input name="submit"type="submit" value="Register"> <br>
            <a href="control.php">Login Page</a>
          </div>
        </form>
      </div>
    </div>
  
  </body>
  </html> ';
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

    
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#" method="post">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="https://enterprise.github.com/login" class="social"><i class="fa fa-github"></i></a>
				<a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&flowName=GlifWebSignIn&flowEntry=ServiceLogin&cid=1&TL=AM3QAYa9_QOEQyK5Evro2LUkJ1jeBHktVl__jL1gsUw-4Cd4AGcaAd1vy2snexiS" class="social"><i class="fa fa-google-plus-g"></i></a>
				<a href="https://www.linkedin.com/login/" class="social"><i class="fa fa-linkedin-in"></i></a>
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
public function instructor_profile(){
    $text='
    <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profilepage</title>
    <link rel="stylesheet" href="assets/instructor_styles.css">
<link rel="stylesheet" href="assets/navbar.css">
    
<main>
<?php include("templates/navbar.php")  ?>
<div class="container">
    <div class="main-body">

          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="200">
                    <div class="mt-3">
                      <h4>'.$_SESSION['fname'].''.$_SESSION['lname'].'</h4>
                      <p class="text-secondary mb-1">Instructor</p>
                      <p class="text-muted font-size-sm">Data Engineer</p>
                      <p class="text-muted font-size-sm">Misr international University</p>
                      <div>
                      <input type="submit" value="Save" />
                       <a href="#Edit">Edit</a>
                       <a href="questionbank.php">AddQuestion</a>
                       
                           </div>
                      
                  </div>
                </div>
              </div>
              </div>
        
            <div class="col-md-8" id="Edit">
             <h3 class="w3-center"></h3>
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     Ahmed Aly
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">UserName</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     Ahmed Elbeheiry
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     ahmedlbeheiry@gmail.com
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">University</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     Misr international University.
                    </div>
                  </div>
                 

                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      27747404
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Male
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     Cairo,egypt
                    </div>
                  </div>
                  <hr>
            </div>
          </div>
 </div>
    </div>
    ';
    return $text;
}
}
?>
