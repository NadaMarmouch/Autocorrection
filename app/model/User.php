<?php
// Start the session
session_start();
include "Model.php";
class User extends Model {
	protected $fname;
	protected $lname;
    protected $email;
    protected $phonenumber;
    protected $password;
    protected $dob;
    protected $major;
    protected $Gender;

   public function __construct() {
$this->fname='';
$this->major='';
$this->lname="";
$this->email="";
$this->phonenumber="";
$this->password= "";
$this->Gender= "";
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
   
    public function getGender(){
        return $this->Gender;
    }
    public function setGender($Gender){
       $this->Gender=$Gender;
    } 

    public function getMajor(){
        return $this->major;
    }
    public function setMajor($major){
       $this->major=$major;
    } 
    

    function AddUser(){
        
		$sql = "INSERT INTO `user`( `fname`, `lname`, `email`, `password`, `Type-id`, `phonenumber`,gender,major,date)
        VALUES ('$this->fname','$this->lname','$this->email',' $this->password', 1,'$this->phonenumber',
        '$this->Gender','$this->major','$this->dob')";
        $conn = mysqli_connect('localhost',"root","" ,"autocorrection" );
        mysqli_query($conn,$sql);
       
        
        
    }
    function Login($email,$password){
        $sql = 'select * from user where email="'.$email.'" and password="'.$password.'"';
        $conn = mysqli_connect('localhost',"root","" ,"autocorrection" );
        
        $result=mysqli_query($conn,$sql);

        $row=mysqli_fetch_array($result);
        $_SESSION["id"]=$row['id'];
        $_SESSION["fname"]=$row['fname'];
        $_SESSION["lname"]=$row['lname'];
        $_SESSION["password"]=$row['password'];
        $_SESSION["phonenumber"]=$row['phonenumber'];
        $_SESSION["gender"]=$row['gender'];
        //Hena session ll major lama tt3ml f sign up
        if(mysqli_num_rows($result)==1&& $row['Type-id']==1){
               
                $_SESSION["type"]=$row['Type-id'];
                $_SESSION["email"]=$row['email'];
                $_SESSION["major"]=$row['major'];
                #henna session major
                header("Location:homepage.php");
            }
       else if(mysqli_num_rows($result)==1&& $row['Type-id']==2){
                
                $_SESSION["type"]=$row['Type-id'];
                header("Location:instructorprofile.php");
            }
        else{
            echo'<script>alert("Invalid User") </script>';
        }
    } 
}