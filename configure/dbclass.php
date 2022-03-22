<?php
class DBConnection{
  private $conn;

  public function connection()
 {
  try{
    $this->conn = new mysqli("localhost", "root", "", "autocorrection");
    return $this->conn;
  }catch(Exception $ex){
      echo "Error, Failed to connect to database";
    }
  }
}
?>