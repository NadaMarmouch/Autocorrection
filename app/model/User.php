<?php
include "Model.php";
class User extends Model {
	protected $fname;
	protected $lname;
    protected $email;
    protected $phonenumber;
    protected $password;
    protected $dob;

   public function __construct() {
$this->fname='';
$this->lname="";
$this->email="";
$this->phonenumber="";
$this->password= "";
$this->dob= "";
    }

    public function getFirstname(){
        return $this->fname;
    }
    public function setFirstname($fname){
        $this->fname=$fname;
    }
    
    public function getLastname(){
        return $this->lname;
    }
    public function setLastname($lname){
       $this->lname=$lname;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
       $this->email=$email;
    }
       public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
       $this->password=$password;
    }
    
       public function getPhonenumber(){
        return $this->phonenumber;
    }
    public function setPhonenumber($phonenumber){
       $this->phonenumber=$phonenumber;
    }  
       public function getDateOfBirth(){
        return $this->dob;
    }
    public function setDateOfBirth($dob){
       $this->dob=$dob;
    }  
    function AddUser(){
        
		$sql = "INSERT INTO `user`( `fname`, `lname`, `email`, `password`, `Type-id`,`age`, `phonenumber`)
         VALUES ('$this->fname','$this->lname','$this->email',' $this->password', 1,'$this->dob','$this->phonenumber')";
        $conn = mysqli_connect('localhost',"root","" ,"autocorrection" );
        if(mysqli_query($conn,$sql)){
            header("Location:homepage.php");
        }
        
        
    }
    function Login($email,$password){
        $sql = 'select * from user where email="'.$email.'" and password="'.$password.'"';
        $conn = mysqli_connect('localhost',"root","" ,"autocorrection" );
        
        $result=mysqli_query($conn,$sql);


        if(mysqli_num_rows($result)==1){
                header("Location:homepage.php");
        
            }
        else{
            echo'<script>alert("Invalid User") </script>';

        }
    }
}