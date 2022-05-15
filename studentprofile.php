<?php
include('includes/signup_inc.php'); // linking ma3 el php code ely fl includes file
session_start();
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="assets/student.css">
<!------ Include the above in your HEAD tag ---------->


<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <?php echo $_SESSION['name']." ".$_SESSION['lname'];?>
                                    </h5>
                                    <h6>
                                       Computer Science
                                    </h6>
                                    <p class="proile-rating">Semstster : <span>2/4</span></p>
                                    <p class="proile-rating">Number Of Courses : <span>0/100</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#courses" role="tab" aria-controls="courses" aria-selected="false">Courses</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>Courses</p>
                            <a href="#">Data Engineering</a><br/>
                            <a href="#">Web Developer</a><br/>
                            <a href="#">Algorithm</a><br/>
                            <a href="#">Mobile Application</a><br/>
                            <a href="#*">Network</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Full Name</label>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="erroRS">
                                            <p> <?php echo $errors['fname'] ?> </p>
                                             </div>
                                              <input type="hidden" name="name_v" value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label> Last Name</label>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="erroRS">
                                            <p> <?php echo $errors['lname'] ?> </p>
                                             </div>
                                              <input type="hidden" name="lname_v" value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $errors['email'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="erroRS">
                                            <p> <?php echo $errors['phonenumber'] ?> </p>
                                             </div>
                                              <input type="hidden" name="phone_v" value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>password</label>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="erroRS">
                                            <p> <?php echo $errors['password'] ?> </p>
                                             </div>
                                              <input type="hidden" name="password_v" value="">
                                            </div>
                                        </div>
                           
                           
                            
                    </div>
                </div>
            </form>           
        </div>

 <?php include "user.php";

if(isset($_POST['submit'])){
    $U=new adduser();
    $U->adduser();
    
} ?>

       
      
