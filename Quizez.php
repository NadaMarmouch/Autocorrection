<!DOCTYPE html>
<?php
 // linking ma3 el php code ely fl includes file
include('includes/Quizez.php');
?>
<!DOCTYPE html>
<html lang="
" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Quizez</title>
    <link rel="stylesheet" href="assets/Quizez.css"> <!-- hena by linked styling bt3 sign up -->
    <link rel="stylesheet" href="assets/navbar_styles.css"> <!-- hena by linked el navbar-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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

            <form id="validate" class="Quizez" action="#" method="post">

        <label for="name-6b51" class="u-label">Question title</label>
        <input class="Quizez-form" type="text" name="Title" value="<?php echo $Title ?>" placeholder="Title..">
        <div class="erroRS">
        </div>
        <input type="hidden" name="Title-v" value="">

        <label for="message-6b51" class="u-label">Answer</label>
        <input class="Quizez-form1" type="Answer" name="Answer"value="<?php echo $Answer ?>" placeholder="Enter your Answer..">
        <div class="input_errors">
         </div>
        <input type="hidden" name="Answer-v" value="">


        <input type="submit" class="Quizez-form-btn" name="submit" value="Submit">
      </form>

</div>
   
<?php include "quizez_back.php";

if(isset($_POST['submit'])){
    $Q=new quizzes();
    $Q->addquizez();
    
} ?>

    </div>