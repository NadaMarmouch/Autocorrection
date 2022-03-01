<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<?php
// Create connection
$conn = mysqli_connect("localhost", "root", "", "lms");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>
<head>
  <style>
    .button {
  background-color: #009970; 
  border: none;
  color: white;
  
  text-align: center;
  text-decoration: none;
  display: inline-block;
  height: 50px;
  width: 100px;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
}
 input[type=text]{
  width: 85%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

.c {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;

}
.tA
{
text-align: right;
}
.d {
  border-color: #ccc;
  background-color: #ddd;
}

.c::after {
  content: "";
  clear: both;
  display: table;
}

.c img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.c img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
  </style>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Course</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
 
  <!-- Template Main CSS File -->
  <link href="assets/css/style1.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v1.5.1
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
      
         <?php
      $id=$_SESSION["Uid"];
      $Query = "SELECT * FROM users WHERE id=$id";
    $ExecQuery = MySQLi_query($conn, $Query);
   

     if ($ExecQuery->num_rows > 0) 
    {      
      while($row = $ExecQuery->fetch_assoc()) 
      {
        echo '<img src="images/'.$row["image"].'" onerror=this.src="images/avatar.png" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="userprofile.php">'.$row["firstname"].' '.$row["lastname"].'</a></h1>';
      }
    }
      ?>
        
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="userprofile.php"><i class="bx bx-home"></i> <span>Profile</span></a></li>
          <li><a href="#messages"><i class="bx bx-user"></i> <span>Messages</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Course</h2>
          <ol>
            <li><a href="userprofile.php">Home</a></li>
              <li><a href="Course.php">Course</a></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">
          <div class="owl-carousel portfolio-details-carousel">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lms";
//=$_SESSION["idOfcourse"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
  if (isset($_GET['u']))
     {
      $cid=$_GET['u'];
 $Query = "SELECT * FROM courses WHERE id='$cid'";
    $ExecQuery = MySQLi_query($conn, $Query);
   if ($ExecQuery->num_rows > 0) 
  {      
    while($row = $ExecQuery->fetch_assoc()) 
    {
           echo '<img src="images/'.$row["image"].'" class="img-fluid" onerror=this.src="images/nopic.jpg">';
          ?>
          </div>

          <div class="portfolio-info">
            <h3>Course information</h3>
            <ul>
<?php

      $t="";
      $Query6= "SELECT coursename FROM coursetype WHERE id='".$row['coursetype']."'";
                $ExecQuery6 = MySQLi_query($conn, $Query6);
                if ($ExecQuery6->num_rows > 0) 
                {      
                  while($row6 = $ExecQuery6->fetch_assoc()) 
                  {
           
          $t=$row6['coursename'];
       }}
           $CN=$row["coursename"];
           $CU=$row["courseuni"];
         echo "<li><strong>Category</strong>: $t</li>
              <li><strong>Course Name</strong>: $CN </li>
              <li><strong>University</strong>: $CU</li>
         </ul>";
    }
  }
}
?>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
<section id="messages" class="messages">
      <div class="container">

        <div class="section-title">
          <h2>Messages</h2>
            <label><b>Write Message</b></label>
            <form action="" method="post">
          <div class="col-75">
            <input type="text" id="Mess" name="Mess" placeholder="Enter Message...">
            <input type="submit" class="button" value="Send" name="S" id="S">
          </div>
        </form>
            <?php
            $i=$_SESSION["Uid"];
            if(isset($_POST["S"]))
            {
              $M=$_POST["Mess"];
              $sql="INSERT INTO messages_courses (userid,courseid,message) VALUES('$i','$cid','$M')";
              if($conn->query($sql)==true)
                {
                 
                }
                else 
                {
                  echo "Error: ".$sql."<br>".$conn->error;
                }
            }
           $Query1 = "SELECT * FROM messages_courses WHERE courseid='$cid'";
            $ExecQuery1 = MySQLi_query($conn, $Query1);
           if ($ExecQuery1->num_rows > 0) 
            {      
              while($row1 = $ExecQuery1->fetch_assoc()) 
              {
                if($row1["message"]!="")
                {
                    //da 3shan law hwa el 3amel sign in yb2a n7yt ymyn aw shemal w keda
                  if($row1["userid"]==$i)
                  {
                    $Query2 = "SELECT * FROM users WHERE id='$i'";
                    $ExecQuery2 = MySQLi_query($conn, $Query2);
                   if ($ExecQuery2->num_rows > 0) 
                    {      
                      while($row2 = $ExecQuery2->fetch_assoc()) 
                      {
                        $sql= "SELECT type FROM usertype WHERE id='".$row2['type']."'";
                        $ExecQuery10 = MySQLi_query($conn, $sql);
                        if ($ExecQuery10->num_rows > 0) 
                        {      
                          while($row10 = $ExecQuery10->fetch_assoc()) 
                          {

                         echo '<div class="c d tA"><img src="images/'.$row2["image"].'" class="right" onerror=this.src="images/avatar.png" style="width:100%;"><h5>'.$row2["firstname"].' '.$row2["lastname"].' ('.$row10["type"].')</h5>
                         <p>'.$row1["message"].'</p></div>';
                          }
                        }
                      }
                    }
                  }
                  else
                  {
                    $im=$row1["userid"];
                      
                    $Query7 = "SELECT * FROM users WHERE id='$im'";
                    $ExecQuery7 = MySQLi_query($conn, $Query7);
                    if ($ExecQuery7->num_rows > 0) 
                    {      
                     while($row7 = $ExecQuery7->fetch_assoc()) 
                      {
                        $sql2= "SELECT type FROM usertype WHERE id='".$row7['type']."'";
                        $ExecQuery11 = MySQLi_query($conn, $sql2);
                        if ($ExecQuery11->num_rows > 0) 
                        {      
                          while($row11 = $ExecQuery11->fetch_assoc()) 
                          {
                            if($row7["type"]!=5)
                           echo '<div class="c"><img src="images/'.$row7["image"].'"  onerror=this.src="images/avatar.png" style="width:100%;"><h5>'.$row7["firstname"].' '.$row7["lastname"].' ('.$row11["type"].')</h5><p>'.$row1["message"].'</p></div>';
                          }
                       }
                  }
                }
                  }
                }
              }
            }
            ?>
        </div>
       
      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

     </footer><!-- End Footer -->
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>