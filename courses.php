<?php
session_start();
include "app/db/Dbh.php";

$DB = new Dbh();
if(!isset($_SESSION["id"])){
  header('location:./control.php');
  die();
}
$uid = $_SESSION['id'];
$result = $DB->query("SELECT c.* FROM courses c, user u WHERE u.id=$uid AND u.major_id=c.faculty_id");
// Variable nendah fe session el major
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/courses_styles.css">
    <meta name="keywords" content="​CORRECTA Auto Correction for subjective questions, INTUITIVE">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.4.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <?php include("templates/navbar.php")  ?> 
    
       <section class="u-clearfix u-section-1"  id="sec-787a">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1" >
        <h2 class="u-text u-text-default u-text-1">
          <a class="aalink u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-custom-color-1 u-btn-1" onclick="" href="https://moodle.miuegypt.edu.eg/mod/forum/view.php?id=21883">Announcements</a>
        </h2><span class="u-file-icon u-icon u-icon-1"><img src="pictures/39.png" alt=""></span>
        <div style="display:flex;width:100%;flex-wrap:wrap;">
        <?php
        while($row = $DB->fetchRow($result)){
        ?> 
        <div class="u-container-style u-grey-10 u-group u-preserve-proportions u-radius-15 u-shape-round u-group-1" style="margin:10px;">
          <div class="u-container-layout u-container-layout-1"><span class="u-file-icon u-icon u-icon-2"><img src="pictures/45.png" alt=""></span>
            <div class="u-align-center u-container-style u-custom-color-1 u-group u-radius-30 u-shape-round u-group-2">
              <div class="u-container-layout">
              <a href="coursesdetails.php?id=<?php echo $row["id"]; ?>">
                <h2 class="u-text u-text-default u-text-2"> <?php echo $row["coursename"] ?></h2>
                </a>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
        ?>
        </div>
        <!-- <div class="u-container-style u-grey-10 u-group u-preserve-proportions u-radius-15 u-shape-round u-group-3">
          <div class="u-container-layout u-container-layout-3"><span class="u-file-icon u-icon u-icon-3"><img src="pictures/49.png" alt=""></span>
            <div class="u-align-center u-container-style u-custom-color-1 u-group u-radius-30 u-shape-round u-group-4">
              <div class="u-container-layout">
              <a href="css_major.php">
                <h2 class="u-text u-text-default u-text-3"> Computer Science</h2>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="u-container-style u-grey-10 u-group u-preserve-proportions u-radius-15 u-shape-round u-group-5">
          <div class="u-container-layout u-container-layout-5"><span class="u-file-icon u-icon u-icon-4"><img src="pictures/46.png" alt=""></span>
            <div class="u-container-style u-custom-color-1 u-group u-radius-30 u-shape-round u-group-6">
              <div class="u-container-layout">
              <a href="coursesdetails.php">
                <h2 class="u-text u-text-default u-text-4">Pharamacy</h2>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="u-container-style u-grey-10 u-group u-preserve-proportions u-radius-15 u-shape-round u-group-7">
          <div class="u-container-layout u-container-layout-7"><span class="u-file-icon u-icon u-icon-5"><img src="pictures/43.png" alt=""></span>
            <div class="u-container-style u-custom-color-1 u-group u-radius-30 u-shape-round u-group-8">
              <div class="u-container-layout">
              <a href="coursesdetails.php">
                <h2 class="u-text u-text-default u-text-5">Alsun</h2>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="u-container-style u-grey-10 u-group u-preserve-proportions u-radius-15 u-shape-round u-group-9">
          <div class="u-container-layout u-container-layout-9"><span class="u-file-icon u-icon u-icon-6"><img src="images/2987853.png" alt=""></span>
            <div class="u-container-style u-custom-color-1 u-group u-radius-30 u-shape-round u-group-10">
              <div class="u-container-layout">
              <a href="coursesdetails.php">
                <h2 class="u-text u-text-default u-text-6">Quizez</h2>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="u-container-style u-grey-10 u-group u-preserve-proportions u-radius-15 u-shape-round u-group-11">
          <div class="u-container-layout u-container-layout-11"><span class="u-file-icon u-icon u-icon-7"><img src="pictures/51.png" alt=""></span>
            <div class="u-container-style u-custom-color-1 u-group u-radius-30 u-shape-round u-group-12">
              <div class="u-container-layout">
              <a href="coursesdetails.php">
                <h2 class="u-text u-text-default u-text-7"> Architecture</h2>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="u-container-style u-grey-10 u-group u-preserve-proportions u-radius-15 u-shape-round u-group-13">
          <div class="u-container-layout u-container-layout-13"><span class="u-file-icon u-icon u-icon-8"><img src="pictures/42.png" alt=""></span>
            <div class="u-container-style u-custom-color-1 u-group u-radius-30 u-shape-round u-group-14">
              <div class="u-container-layout">
              <a href="coursesdetails.php">
                <h2 class="u-text u-text-default u-text-8"> Electronics</h2>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="u-container-style u-grey-10 u-group u-preserve-proportions u-radius-15 u-shape-round u-group-15">
          <div class="u-container-layout u-container-layout-15"><span class="u-file-icon u-icon u-icon-9"><img src="pictures/50.png" alt=""></span>
            <div class="u-align-center u-container-style u-custom-color-1 u-group u-radius-30 u-shape-round u-group-16">
              <div class="u-container-layout">
              <a href="coursesdetails.php">
                <h2 class="u-text u-text-default u-text-9"> Mass Communication</h2>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="u-container-style u-grey-10 u-group u-preserve-proportions u-radius-15 u-shape-round u-group-17">
          <div class="u-container-layout u-container-layout-17"><span class="u-file-icon u-icon u-icon-10"><img src="pictures/52.png" alt=""></span>
            <div class="u-container-style u-custom-color-1 u-group u-radius-30 u-shape-round u-group-18">
              <div class="u-container-layout">
              <a href="coursesdetails.php">
                <h2 class="u-text u-text-default u-text-10">Dentistry</h2>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </section>
    
  
  </body>
</html>