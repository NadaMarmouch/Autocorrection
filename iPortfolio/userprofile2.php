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
    .custom-select {
  position: relative;
  font-family: Arial;
  width:10%;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}
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

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/lms1.png.webp" rel="icon">
  <link href="../assets/img/lms.jpeg" rel="apple-touch-icon">

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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lms";
          
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
  if (isset($_GET['u']))
     {      
      $counter=0;
      $counter1=0;
      $id=$_GET['u'];
      $Aid=$_SESSION["Uid"];
      $Query = "SELECT * FROM users WHERE id=$id";
    $ExecQuery = MySQLi_query($conn, $Query);
   
   $t=0;
     if ($ExecQuery->num_rows > 0) 
    {      
      while($row = $ExecQuery->fetch_assoc()) 
      {
        $t=$row["type"];
        echo '<img src="images/'.$row["image"].'" onerror=this.src="images/avatar.png" class="img-fluid rounded-circle">
        <h1 class="text-light">'.$row["firstname"].' '.$row["lastname"].'</h1>';
      }
    }
      ?>

      </div>

      <nav class="nav-menu"><!-- End Breadcrumbs al admin fat7 saf7t had -->
        <ul>
          <li class="active"><a href="../homepage.php"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>

            <?php
            if($_SESSION["type"]==2)
            {?>
          <li><a href="#edit"><i class="bx bx-envelope"></i>Edit User Type</a></li> <?php } ?> 
            <?php 
      if($_SESSION["type"]==5){?>
             <li><a href="#addpenalty"><i class="bx bx-envelope"></i>Penalty</a>
            <?php
            }
            ?>
        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <?php
      $Query = "SELECT * FROM users WHERE id=$id";
    $ExecQuery = MySQLi_query($conn, $Query);
   
     if ($ExecQuery->num_rows > 0) 
    {      
      while($row = $ExecQuery->fetch_assoc()) 
      {
        echo "<h1>Hello<br>".$row["username"]."</h1>";
      }
    }
      ?>
      
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <?php
              $Query = "SELECT * FROM users WHERE id=$id";
            $ExecQuery = MySQLi_query($conn, $Query);
           
             if ($ExecQuery->num_rows > 0) 
            {      
              while($row = $ExecQuery->fetch_assoc()) 
              {
           echo '<img src="images/'.$row["image"].'" class="img-fluid" onerror=this.src="images/avatar.png">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">';
                $t="";
                $Query9= "SELECT type FROM usertype WHERE id='".$row['type']."'";
                $ExecQuery9 = MySQLi_query($conn, $Query9);
                if ($ExecQuery9->num_rows > 0) 
                {      
                  while($row9 = $ExecQuery9->fetch_assoc()) 
                  {
                    $t=$row9['type'];
              }
            }
                echo "<h3>".$t."</h3>";

          echo  '<div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Email:</strong>'.$row["email"].'</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Age:</strong>'.$row["age"].'</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong>'.$row["mobile"].'</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Gender:</strong>'.$row["gender"].'</li>
                </ul>
              </div>
            </div>';
            }
            }
              ?>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

<?php  }; 
  if($_SESSION["type"]==2)// al admin edit al type bta3 al student
   {   
      ?>
      <section id="edit" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Edit User Type</h2>
        </div>
        <form method="post" action="" enctype="multipart/form-data">
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
        <?php
              $sqli3 = "SELECT * FROM users where id=$id";
             $result3=mysqli_query($conn,$sqli3);
                                
             if (mysqli_num_rows($result3)>0) 
            {  
            while($row3=mysqli_fetch_assoc($result3))
            {  
              echo"<img src='images/".$row3['image']."' onerror=this.src='images/avatar.png' class='img-fluid'>"; ?>
              </div></div>
              <?php
              echo "<select class='category' id='utype' name='utype'>";
             $n="";
                $Query6= "SELECT type FROM usertype WHERE id='".$row3['type']."'";
                $ExecQuery6 = MySQLi_query($conn, $Query6);
                if ($ExecQuery6->num_rows > 0) 
                {      
                  while($row6 = $ExecQuery6->fetch_assoc()) 
                  {
                    $n=$row6['type'];
                echo "<option>".$row6['type']."</option>";
              }
            }
       $Query3 = "SELECT * FROM usertype";
        $ExecQuery3 = MySQLi_query($conn, $Query3);
       if ($ExecQuery3->num_rows > 0) 
      {      
        while($row3 = $ExecQuery3->fetch_assoc()) 
        {
          if($n!=$row3['type'])
          {
       echo "<option>".$row3['type']."</option>";
     }
     }
   }
               echo "</select>";
             } 
            }
              ?>
          <div class="text-center"><button class="button" type="submit" name="edit" id="edit">Edit</button></div>
        </form>
        </div>
        <?php
if(isset($_POST['edit']))
{
  $g2="";
  $g=$_POST['utype'];
  $sql2="SELECT * FROM usertype WHERE type='$g'";
  $ExecQuery4 = MySQLi_query($conn, $sql2);
   if ($ExecQuery4->num_rows > 0) 
  {      
    while($row4 = $ExecQuery4->fetch_assoc()) 
    {
      $g2=$row4['id'];
  }
}
   $sql0="UPDATE users  SET type='$g2' WHERE id=$id" ;
  
  $records0= mysqli_query($conn,$sql0);
if($records0)
{
echo '<script>alert("Updated Successfully")</script>'; 
//echo "<meta http-equiv=\"refresh\"content=\"0;URL=editusers.php\">";
}
        else
            echo"not updated";
}

?>
      </section><?php } ?>
       <!----------penalty--------->
       <?php if($_SESSION["type"]==5){ ?>
    <section id="addpenalty" class="messages">
              <div class="container">

 <div class="section-title">
          <h2>Penalty</h2>
            <label><b>Write Penalty</b></label>
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
              $sql="INSERT addpenalty (HRid,adminid,message) VALUES('$i','$id','$M')";
              if($conn->query($sql)==true)
                {
                 
                }
                else 
                {
                  echo "Error: ".$sql."<br>".$conn->error;
                }
            }
           $Query1 = "SELECT * FROM addpenalty WHERE adminid='$id'";
            $ExecQuery1 = MySQLi_query($conn, $Query1);
           if ($ExecQuery1->num_rows > 0) 
            {      
              while($row1 = $ExecQuery1->fetch_assoc()) 
              {
                if($row1["message"]!="")
                {
                  if($row1["HRid"]==$i)
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
                         echo '<div class="c d tA"><img src="images/'.$row2["image"].'" alt="Avatar" class="right" style="width:100%;"><h5>'.$row2["firstname"].' '.$row2["lastname"].' ('.$row10["type"].')</h5>
                         <p>'.$row1["message"].'</p></div>';
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
    </section><?php } ?>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  
  
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