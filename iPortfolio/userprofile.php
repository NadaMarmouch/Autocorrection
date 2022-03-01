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
      
      
      .image {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;
}
      
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
  <style type="text/css">
      .errormessage{
        color: #fa525a;
        font-size: 13px;
      }
      .okmessage{
        color: #00ff0d
;
      }
    </style>
  <script>
    function Validation1()
{
  jQuery.ajax(
    {
      url:"../validate.php",
      data:'UN='+$("#UN").val(),
      type:"POST",
      success:function(data)
      {
        $("#msg1").html(data);
      }
    });
}
function Validation4()
{
  jQuery.ajax(
    {
      url:"../validate.php",
      data:'email='+$("#email").val(),
      type:"POST",
      success:function(data)
      {
        $("#msg4").html(data);
      }
    });
}
  function searchS()
{
    jQuery.ajax(
    {
url:"../Searching.php",
data:'q='+$("#q").val(),
type:"POST",
success:function(data)
{
$("#msg8").html(data);
}
    });
    }
  </script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
 <link href="assets/img/lms1.png.webp" rel="icon">
  <link href="assets/img/lms.jpeg" rel="apple-touch-icon">

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
        $t=$row["type"];
        echo '<img src="images/'.$row["image"].'"onerror=this.src="images/avatar.png" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="userprofile.php">'.$row["firstname"].' '.$row["lastname"].'</a></h1>';
      }
    }
    $Query2 = "SELECT * FROM user_survey";
    $ExecQuery2 = MySQLi_query($conn, $Query2);
    $S=0;
     if ($ExecQuery2->num_rows > 0) 
    {      
      while($row2 = $ExecQuery2->fetch_assoc()) 
      {
      	if($row2["userid"]==$id)
      	{
      		$S=$row2["userid"];
      	}
      }
  }
      ?>
        
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="../homepage.php"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
          <?php
        if($_SESSION["type"]==1)
        {
          ?>
          <li><a href="#portfolio"><i class="bx bx-book-content"></i>Selected Courses</a></li>
          <?php if($S==$_SESSION["Uid"]) { ?>
          <li><a href="#surveyU"><i class="bx bx-book-content"></i>Survey</a></li>
      <?php } ?>
          <li><a href="#contact1"><i class="bx bx-envelope"></i>Contact Us</a></li>
          <?php } 
          if($_SESSION["type"]==3)
        {
          ?>
          <li><a href="#penalty"><i class="bx bx-book-content"></i>Send Penalty</a></li>
          <li><a href="#surveyA"><i class="bx bx-book-content"></i>Send Survey</a></li>
          <li><a href="#surveyAA"><i class="bx bx-book-content"></i>Survey Answers</a></li>
          <?php } 
          if($_SESSION["type"]==5)
        {
          ?>
          <li><a href="#penalty1"><i class="bx bx-book-content"></i>Penalty</a></li>
          <?php } ?>
          <li><a href="#contact"><i class="bx bx-envelope"></i>Edit Profile Info</a></li>
          <li><a href="#profile"><i class="bx bx-envelope"></i>Edit Profile Picture</a></li>
         <?php if($_SESSION["type"]==2)
        {
          ?>
          <li><a href="#addpenalty"><i class="bx bx-book-content"></i> penalty</a></li>
        <?php } ?>
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
               echo '<img src="images/'.$row["image"].'" onerror=this.src="images/avatar.png" class="img-fluid" >
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
     <?php 
if($_SESSION["type"]==3)
{
?>
<section id="penalty" class="penalty">
      <div class="container">

        <div class="section-title">
          <h2>Send Penalty</h2>
            <form action="" method="post">
          <div class="col-75">
          	<label><b>Write UserName :</b></label>
            <input type="text" id="PU" name="PU" placeholder="Enter UserName..."><br><br>
            <label><b>Write Email :</b></label>
            <input type="text" id="PE" name="PE" placeholder="Enter Email..."><br><br>
            <input type="submit" class="button" value="Send" name="SEN" id="SEN">
          </div>
        </form>
        <?php 
        if(isset($_POST["SEN"]))
		{
			$e=$_POST["PE"];
			$u=$_POST["PU"];
			 $Qu = "SELECT * FROM users WHERE email='$e' and username='$u'";
		    $ExecQu = MySQLi_query($conn, $Qu);
		   
		   if ($ExecQu->num_rows > 0) 
		  {      
		    while($r = $ExecQu->fetch_assoc()) 
		    {
		    	$s=$r["type"];
		    	if($s==2)
		    	{
            $userid=$r["id"];
			    	$sql="INSERT INTO user_penalty (userid) VALUES ('$userid')";
			    	if($conn->query($sql)==true)
				    {
				      echo "<meta http-equiv=\"refresh\"content=\"0;URL=userprofile.php\">";
				    }
				    else 
				    {
				      echo "Error: ".$sql."<br>".$conn->error;
				    }
			    }
          else
          {
            echo "<h3>User Must be an administrator</h3>";
          }
		    }
		  }
		  else
		  {
		  	echo "<h4>No Such User is Found</h4>";
		  }

		}
         ?>
    </div>
</div>
</section>
      <!--searching user to send survey-->

<section id="surveyA" class="surveyA">
      <div class="container">

        <div class="section-title">
          <h2>Send Survey</h2>
           
          <div class="col-75">
          	<input name="q" type="text" placeholder="Search Users..." id="q" onkeyup="searchS()">
          	<div id="msg8"></div>
          	</div>
      </div>
  </div>
</section>
<?php
if(isset($_POST['send']) && $_POST['checkbox'])
{
    foreach ($_POST['checkbox'] as $id ) 
    {
       $sql= "INSERT INTO user_survey (userid) VALUES ('$id')";
       if($conn->query($sql)==true)
      {
        echo "<meta http-equiv=\"refresh\"content=\"0;URL=userprofile.php\">";
      }
      else 
      {
        echo "Error: ".$sql."<br>".$conn->error;
      }
    }
}?>
<section id="surveyAA" class="surveyAA">
      <div class="container">

        <div class="section-title">
            <!--auditor-->
          <h2>Answers to Survey</h2>
           
          <div class="col-75">
          	<?php
          	 $Qu2 = "SELECT * FROM survey";
		    $ExecQu2 = MySQLi_query($conn, $Qu2);
		   if ($ExecQu2->num_rows > 0) 
		  {   
		    while($r2 = $ExecQu2->fetch_assoc()) 
		    {
		    	if($r2["userid"]!="$id")
		    	{
		    	$c=0; 
		    	$r5=$r2["userid"]; // al shakhs al atb3tlo al surevy
		    	$Qu3 = "SELECT * FROM users WHERE id='$r5'";
			    $ExecQu3 = MySQLi_query($conn, $Qu3);
			   if ($ExecQu3->num_rows > 0) 
			  {      
			    while($r3 = $ExecQu3->fetch_assoc()) 
			    {
		    	echo "<h2><b>".$r3["firstname"]." ".$r3["lastname"]."<b></h2>";
		        }
		      }
		      $c++;
		      echo "<label><b>Question ".$c." : ".$r2["q1"]."</b></label><br>";
		      $c++;
		      echo "<label><b>Question ".$c." : ".$r2["q2"]."</b></label><br>";
		      $c++;
		      echo "<label><b>Question ".$c." : ".$r2["q2o"]."</b></label><br>";
		      $c++;
		      echo "<label><b>Question ".$c." : ".$r2["q3"]."</b></label><br>";
		      $c++;
		      echo "<label><b>Question ".$c." : ".$r2["q3o"]."</b></label><br>";
		      $c++;
		      echo "<label><b>Question ".$c." : ".$r2["q4"]."</b></label><br>";
		      $c++;
		      echo "<label><b>Question ".$c." : ".$r2["comment"]."</b></label><br>";
		  }
	    }
		}
          	 ?>
          	</div>
      </div>
  </div>
</section>
<?php }

 ?>

<?php 
if($_SESSION["type"]==5)
{
?>
<section id="penalty1" class="penalty1">
      <div class="container">

        <div class="section-title">
          <h2>Penalty</h2>
          <div class="col-75">
          	<?php
          	 $Qu3 = "SELECT * FROM user_penalty";
		    $ExecQu3 = MySQLi_query($conn, $Qu3);
		   if ($ExecQu3->num_rows > 0) 
		  { 
		    while($r3= $ExecQu3->fetch_assoc()) 
		    {
		    	$Qu6 = "SELECT * FROM users WHERE id='".$r3['userid']."'";
			    $ExecQu6 = MySQLi_query($conn, $Qu6);
			   if ($ExecQu6->num_rows > 0) 
			   {      
			    while($r6 = $ExecQu6->fetch_assoc()) 
			    {
			    	if($r6["type"]==2)
			    	{
			          echo '<label><b>UserName : </b></label>'.$r6["username"].'<br>
			           <label><b>Email :</b></label>'.$r6["email"].'<br>';
			        }
		        }
		     }
	        }
	      }
            ?>
          </div>
    </div>
</div>
</section>
<?php }

 ?>
    <!-- ======= Portfolio Section ======= -->
    <?php 
if($_SESSION["type"]==1)
{
?>
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Selected Courses</h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-css">Computer Science</li>
              <li data-filter=".filter-mass">Mass Communication</li>
              <li data-filter=".filter-buss">Bussines</li>
                <li data-filter=".filter-os">Others</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
<?php
$Query1 = "SELECT * FROM users_courses WHERE studentid='$id'";

    $result = MySQLi_query($conn, $Query1);
   if ($result->num_rows > 0) 
  {      
   while($row1 = $result->fetch_assoc()) 
    {
      $r=$row1["courseid"];
      $Query = "SELECT * FROM courses WHERE id='$r'";
    $ExecQuery = MySQLi_query($conn, $Query);
   
   if ($ExecQuery->num_rows > 0) 
  {      
    while($row = $ExecQuery->fetch_assoc()) 
    {
 if($row["coursetype"]==1)
      {
         echo '<div class="col-lg-4 col-md-6 portfolio-item filter-css">
            <div class="portfolio-wrap">
              <img src="images/'.$row["image"].'" class="img-fluid" onerror=this.src="images/nopic.jpg">
              <h4>'.$row["coursename"].'</h4>
              <div class="portfolio-links">
                <a href="images/'.$row["image"].'" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="Course.php?u='.$row['id'].'" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>';
}
          if($row["coursetype"]==2)
      {
  echo '<div class="col-lg-4 col-md-6 portfolio-item filter-mass">
            <div class="portfolio-wrap">
              <img src="images/'.$row["image"].'" class="img-fluid" onerror=this.src="images/nopic.jpg">
              <h4>'.$row["coursename"].'</h4>
              <div class="portfolio-links">
                <a href="images/'.$row["image"].'" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="Course.php?u='.$row['id'].'" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>';
        }
 if($row["coursetype"]==3)
      {
  echo '<div class="col-lg-4 col-md-6 portfolio-item filter-buss">
            <div class="portfolio-wrap">
              <img src="images/'.$row["image"].'" class="img-fluid" onerror=this.src="images/nopic.jpg">
              <h4>'.$row["coursename"].'</h4>
              <div class="portfolio-links">
                <a href="images/'.$row["image"].'" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="Course.php?u='.$row['id'].'" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>';
}
if($row["coursetype"]==0)
      {
  echo '<div class="col-lg-4 col-md-6 portfolio-item filter-os">
            <div class="portfolio-wrap">
              <img src="images/'.$row["image"].'" class="img-fluid" onerror=this.src="images/nopic.jpg">
              <h4>'.$row["coursename"].'</h4>
              <div class="portfolio-links">
                <a href="images/'.$row["image"].'" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="Course.php?u='.$row['id'].'" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>';
}
       
    }
  }
    }
  }
?>
        </div>

      </div>
    </section><!-- End Portfolio Section -->
<?php if($S==$_SESSION["Uid"]) { ?>
<section id="surveyU" class="surveyU">
      <div class="container">

        <div class="section-title">
          <h2>Fill Survey</h2>
           
          <div class="col-75">
          	<div class="container">
        <div class="col-lg-6">
        <form action="" method="POST">
        
     <div class="form-group">
        
        <label for="YourName">Please enter your name:</label><br>
        <input type="text" name="name" id="name">
            </div>
            
             <div class="form-group">
    
         <label for=o>What do you think about our website?</label><br>
         <select id="q1" name="q1">
         <option value="Excellent">excellent</option>
         <option value="V.Good">very good</option>
         <option value="Good">good</option>
         <option value="Bad">bad</option>
         </select>
            </div>        
                 
             <div class="form-group">
    
         <label for=opinion>What do you think about the instructors?</label><br>
         <select id="q2" name="q2">
         <option >they are excellent</option>
         <option >they are very good</option>
         <option >they are good</option>
         <option >they are not enough qualified</option>
         <option >another answer</option>
         </select>
            </div>
                 
                  <div class="form-group">
    
             <label for="op">Please enter comment about instructors if exists:</label><br>
         <input type="text" name="o" id="o">
        
            </div>
             <div class="form-group">
    
                 <label for=opinion3>What do you think about the Courses?</label><br>
         <select id="q3" name="q3">
         <option >excellent</option>
         <option >very good</option>
         <option > good</option>
         <option > not enough for a website</option>
         <option >another answer</option>
         </select>
            </div>
             <div class="form-group">
    
         <label for="YourOpinion2">Please enter comment about courses if exists:</label><br>
         <input type="text" name="o2" id="o2">
            
            </div>            
             <div class="form-group">
    
         <label for="question">Do you have any recommondations about anything in the website?</label><br>
         <select id="q4" name="q4">
         <option value="yes">Yes</option>
         <option value="no">No</option>
         </select>
            </div>
            
             <div class="form-group">
    
         <label for=say>Tell us the your recommondation: </label><br>
         <input type="text" name="comment" id="comment">
            </div>
            
         <input class="button" type="submit" value="Submit" name="susurvey">
        </form>
        </div>
      </div>
    </div>
</div>
    <?php
    
      if(isset($_POST['susurvey']))
{
  $name=$_POST['name'];
  $q1=$_POST['q1'];
  $q2=$_POST['q2'];
  $q2o=$_POST['o'];
  $q3=$_POST['q3'];
  $q3o=$_POST['o2'];
  $q4=$_POST["q4"];
  $comment=$_POST['comment'];                            

  $sql9="INSERT INTO survey (userid,name,q1,q2,q2o,q3,q3o,q4,comment) VALUES('$id','$name','$q1','$q2','$q2o','$q3','$q3o','$q4','$comment')";
  if($conn->query($sql9)==true)
    {
      $ui=$_SESSION['Uid'];
      $sql10="DELETE FROM user_survey  WHERE userid= '$ui'";
      if($conn->query($sql10)==true)
      {
      echo "<meta http-equiv=\"refresh\"content=\"0;URL=userprofile.php\">";
      }
      else 
      {
        echo "Error: ".$sql10."<br>".$conn->error;
      }
      //echo '<script>alert("updated successfully")</script>';
    }
    else 
    {
      echo "Error: ".$sql9."<br>".$conn->error;
    }
     
      
      }
   
    
?>
          
          	</div>
      </div>
  </div>
</section>
<?php } ?>
<section id="contact1" class="contact1">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
            <form action="" method="post" enctype="multipart/form-data">
          <div class="col-75">
          	<label><b>Write Message :</b></label>
            <input type="text" id="cont" name="cont" placeholder="Enter Message..."><br><br>
            <label><b>Enter Link :</b></label>
            <input type="text" id="link" name="link" placeholder="Enter Link if you want..."><br><br>
            <label><b>Enter A Picture if you want :</b></label>
            <input type="file" name="im"><br><br>
            <input type="submit" class="button" value="Send" name="SE" id="SE">
          </div>
        </form>
        <?php
         $Query3 = "SELECT * FROM contactus";
          $ExecQuery3 = MySQLi_query($conn, $Query3);
          if ($ExecQuery3->num_rows > 0) 
          {      
           while($row3 = $ExecQuery3->fetch_assoc()) 
            {
              if($row3["message"]!="")
              {
              if($row3["userid"]==$id)
              {
              	$i=$row3["userid"];
              $Query11 = "SELECT * FROM users WHERE id='$i'";
              $ExecQuery11 = MySQLi_query($conn, $Query11);
              if ($ExecQuery11->num_rows > 0) 
              {      
               while($row11 = $ExecQuery11->fetch_assoc()) 
                {
            		echo '<div class="c"><img src="images/'.$row11["image"].'"  onerror=this.src="images/avatar.png" style="width:100%;"><h5>'.$row11["firstname"].' '.$row11["lastname"].' </h5><p>'.$row3["message"].'</p></div><h5>Image:</h5><img src="images/'.$row3["image"].'" class="image">
            		<h5>link:</h5><a href="'.$row3["link"].'">'.$row3["link"].'</a>';
            	}
	           }
	        }
	        else if($row3["userid2"]==$id)
	        {
	        	$i=$row3["userid"];
	          $Query11 = "SELECT * FROM users  WHERE id='$i'";
              $ExecQuery11 = MySQLi_query($conn, $Query11);
              if ($ExecQuery11->num_rows > 0) 
              {      
               while($row11 = $ExecQuery11->fetch_assoc()) 
                {
	         echo '<div class="c d tA"><img src="images/'.$row11["image"].'"  onerror=this.src="images/avatar.png" class="right" style="width:100%;"><h5>'.$row11["firstname"].' '.$row11["lastname"].' </h5>
	            <p>'.$row3["message"].'</p></div>';
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
<?php
if(isset($_POST["SE"]))
{
	$C=$_POST["cont"];
	$L=$_POST["link"];
	$image=$_FILES['im']['name'];
    $target="images/".$image;
    move_uploaded_file($_FILES['im']['tmp_name'], $target);
    $sq="INSERT INTO contactus (userid,message,image,link) VALUES('$id','$C','$image','$L')";
    if($conn->query($sq)==true)
    {
      echo "<meta http-equiv=\"refresh\"content=\"0;URL=userprofile.php\">";
      //echo '<script>alert("updated successfully")</script>';
    }
    else 
    {
      echo "Error: ".$sq."<br>".$conn->error;
    }
}
}
?>

    <!-- ======= profile Section edit info======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Edit Profile</h2>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <div class="php-email-form">
            <form method="post" action="" enctype="multipart/form-data">
              <div class="form-row">
              <?php
      
      
          $conn = mysqli_connect("localhost", "root", "", "lms");
          // Check connection
          if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
          }
                          
?>
              <?php
                $i=$_SESSION["Uid"];
                
                 $sqli = "SELECT * FROM users WHERE id='$i'";
             $result=mysqli_query($conn,$sqli);
             if (mysqli_num_rows($result)>0) 
            {   
          while($row=mysqli_fetch_assoc($result)) {
            ?> </div>
               <div class="form-row">
                <div class="form-group col-md-6">
                  <label>FirstName</label>
                  <?php
                  echo "<input type='text' name='FN' class='form-control' value='".$row['firstname']."'/>";
                  ?>
                </div>
                <div class="form-group col-md-6">
                  <label>LastName</label>
                  <?php
                  echo "<input type='text' class='form-control' name='LN' value='".$row['lastname']."'/>";
                  ?>
                </div>
              </div>
              <div class="form-group">
                <label>UserName</label>
                <?php      echo "<input type='text' name='UN' id='UN' onkeyup='Validation1()' class='form-control' value='".$row['username']."'/>"; ?>
                <div id="msg1"></div>
              </div>
              <div class="form-group">
                <label>Email</label>
                <?php      echo "<input type='email' class='form-control' name='email' id='email' onkeyup='Validation4()' value='".$row['email']."'/>"; ?><div id="msg4"></div>
              </div>
               <div class="form-group">
                <label>Password</label>
                  <?php      echo "<input type='password' class='form-control' name='P' id='P' value='".$row['password']."'/>"; ?><p id="msg2"></p>
                </div>
                <script>
                    var P = 
                      document.getElementById('P');
                            
                      P.addEventListener('input',function(){
                                
                        $.ajax({
                          type:"POST",
                                    
                          url: "../validate.php",
                                    
                          data: {"P":this.value}
                                    
                        }).done(function(data) {
                          document.getElementById('msg2').innerHTML = data;
                        });
                      });
                    </script>
                    <div class="form-group">
                      <label>Confirm Password</label>
                  <?php      echo "<input type='password' class='form-control' name='CP' id='CP' value='".$row['password']."'/>"; ?>
                   <div id="msg3"></div>
                </div>
                  <script>
                  var CP = 
                              document.getElementById('CP');
                          
                    CP.addEventListener('input',function(){
                              
                      $.ajax({
                        type:"POST",
                                  
                        url: "../validate.php",
                                  
                        data: {
                        "CP":this.value,
                        "P":P.value //Added POST request for password value
                      }
                                  
                      }).done(function(data) {
                        document.getElementById('msg3').innerHTML = data;
                      });
                    });
                  </script>
                  <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Age</label>
                  <?php      echo " <input type='text' class='form-control' name='A' value='".$row['age']."'/>"; ?>
                </div>
                <div class="form-group col-md-6">
                  <label>Mobile Number</label>
                   <?php      echo " <input type='text' class='form-control' name='M' value='".$row['mobile']."'/>"; ?>
                </div>
              </div>
               <div class="form-group col-md-6">
                <label>Gender</label>
                <select class="custom-select" id="G" name="G">
                  <?php
                  if($row["gender"]=="Male")
                  {
                    echo "<option>Male</option>
                    <option>Female</option>";
                  }
                  else if($row["gender"]=="Female")
                  {
                    echo "<option>Female</option>
                    <option>Male</option>";
                  }
                    ?>
                  </select><br><br>
               </div>
              <div class="text-center"><button type="submit" name="submit" id="submit">Edit</button></div>
              <?php  
             }} 
              ?>
            </form>
          </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
<?php
   if(isset($_POST['submit']))
{
 
  $FN=$_POST['FN'];
  $LN=$_POST['LN'];
  $UN=$_POST['UN'];
  $email=$_POST["email"];
  $P=$_POST['P'];
  $G=$_POST['G'];
  $A=$_POST['A'];
  $M=$_POST['M'];
  $T=1;
  $sql="UPDATE users  SET firstname='$FN',lastname='$LN',username='$UN',email='$email',password='$P',age='$A',gender='$G',mobile='$M',type='$T' WHERE id='$i'";


  if($conn->query($sql)==true)
    {
      $_SESSION["name"]=$FN;
      echo "<meta http-equiv=\"refresh\"content=\"0;URL=userprofile.php\">";
      //echo '<script>alert("updated successfully")</script>';
    }
    else 
    {
      echo "Error: ".$sql."<br>".$conn->error;
    }
  }
?>
<section id="profile" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Edit Profile</h2>
        </div>
        <form method="post" action="" enctype="multipart/form-data">
        <div class="row">

          <div class="col-lg-4" data-aos="fade-right">
        <?php
               $img3=$_SESSION['Uid'];
                          $sqli3 = "SELECT * FROM users where id=$img3";
             $result3=mysqli_query($conn,$sqli3);
                                
             if (mysqli_num_rows($result3)>0) 
            {  
            while($row3=mysqli_fetch_assoc($result3))
            {    
                echo '<div class="polaroid">';
            
                echo"<img src='images/".$row3['image']."' onerror=this.src='images/avatar.png' class='img-fluid'>";
            echo '<div class="container">
            </div>
                </div>';
            } 
             }
              ?>
              <input type="file" name="image">
          </div>
          </div>
          <div class="text-center"><button type="submit" class="button" name="Pic" id="Pic">Edit</button></div>
        </form>
        </div>
        <?php
if(isset($_POST['Pic']))
{

  $image=$_FILES['image']['name'];
    $target="images/".$image;
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
  $sql5="UPDATE users  SET image='$image' WHERE id='$i'";
  if($conn->query($sql5)==true)
    {
      echo "<meta http-equiv=\"refresh\"content=\"0;URL=userprofile.php\">";
      //echo '<script>alert("updated successfully")</script>';
    }
    else 
    {
      echo "Error: ".$sql5."<br>".$conn->error;
    }
  }
?>
      </section>
  </main><!-- End #main -->
<main id="main">
<?php if($_SESSION["type"]==2)
{ ?>
        <section id="addpenalty" class="messages">
              <div class="container">

 <div class="section-title">
          <h2>penalties</h2>
           
<!-- auditor byb3t el penalty lel hr wl hr byzherha lel admin-->
     <?php
            $i=$_SESSION["Uid"];
           $Query1 = "SELECT * FROM addpenalty WHERE adminid='$i'";
            $ExecQuery1 = MySQLi_query($conn, $Query1);
           if ($ExecQuery1->num_rows > 0) 
            {      
              while($row1 = $ExecQuery1->fetch_assoc()) 
              {
                if($row1["message"]!="")
                {             $hid=$row1['HRid'];

                            $Query2 = "SELECT * FROM users WHERE id='$hid'";
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
                }}}
            
            ?>
     
                  </div>
            </div>
    </section><?php }?>
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