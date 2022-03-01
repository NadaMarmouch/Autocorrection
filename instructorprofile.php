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
                      <h4>Ahmed Elbeheiry</h4>
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
             <h3 class="w3-center">Edit</h3>
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