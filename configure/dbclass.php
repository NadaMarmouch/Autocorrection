<?php
  try{
    $conn = mysqli_connect("localhost", "root", "", "autocorrection");
  }catch(Exception $ex){
      echo "Error, Failed to connect to database";
    }
?>