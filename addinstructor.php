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
      <div class="title">Add Instructor</div>
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
              <input type="password" placeholder="Enter your password" required name="password">
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
              <label class="group-title">Date</label>
              <div>
            <input style ="width:30%;" class="styles" type="date" name="Age" ><br></div>
  </div>
          <div class="button">
            <input name="submit"type="submit" value="Add"> <br>
           
          </div>
        </form>
      </div>
    </div>
  
  </body>
  
  </html> 