<?php

$conn =   mysqli_connect("localhost","root", "","autocorrection");

$sql = "SELECT * FROM user" ;//  CRUD -> R
$sql1 = "SELECT * FROM contact_us" ;


$results = mysqli_query($conn, $sql) ;
$results1 = mysqli_query($conn, $sql1) ;


$results_assoc = mysqli_fetch_all($results, MYSQLI_ASSOC) ;
$results_assoc1 = mysqli_fetch_all($results1, MYSQLI_ASSOC) ;


mysqli_free_result($results) ;
mysqli_free_result($results1) ;

mysqli_close($conn);




 ?>
