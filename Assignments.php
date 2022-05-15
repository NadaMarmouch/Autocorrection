<?php
if(!isset($_GET['id'])){
    die('Please select course first');
}
$id = $_GET['id'];
 // linking ma3 el php code ely fl includes file
include('includes/assignment.php');
?>
<!DOCTYPE html>
<html lang="
" dir="ltr">
<?php 
 $conn = mysqli_connect('localhost',"root","" ,"autocorrection" );
 $sql='select * from assignment WHERE course_id='.$id;
 $result=mysqli_query($conn,$sql);
?>
<head>
    <meta charset="utf-8">
    <title>Assignments </title>
    <link rel="stylesheet" href="assets/Quizez.css"> <!-- hena by linked styling bt3 sign up -->
    <link rel="stylesheet" href="assets/navbar_styles.css"> <!-- hena by linked el navbar-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <meta name="keywords" content="​CORRECTA Auto Correction for subjective questions, INTUITIVE">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="assets/courses.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.4.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
</head>

<body>
    <?php include('templates/navbar.php')?> <!-- link bl navbar-->

<div id="contact" class="Quizez">
      <br><br><br><br>
      <h5 class="h5" id="contact"></h5>
      <div class="title">
      <div class="u-clearfix u-sheet u-sheet-1">
      <h2 class="u-text u-text-default u-text-1">
      <a href="https://moodle.miuegypt.edu.eg/mod/forum/view.php?id=21883" class="aalink u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-custom-color-1 u-btn-1"><i class="fa fa-question"></i> If you have any Trouble?</a>
        
        </h2>
            </div>
        <div class="w-full px-8">
            <?php
            while($row = $result->fetch_assoc()){
                ?>
                <a href="Assignment_questions.php?id=<?php echo $row['id']; ?>"><div class="py-2 my-2 px-4 bg-gray-200 rounded-md hover:bg-gray-300">
                <p class="text-xl">
                    <?php echo $row["assignments_title"]?>
                </p>
                    </div></a>
                <?php
            }
            ?>
            
                </div>
       

</div>
   
<?php include "assignmet_back.php";
  $a=new assignment();

if(isset($_POST['submit'])){
    $a->addassignmeent();
    
} ?>

    </div>