<?php

require_once( "Controller.php");

class UserController extends Controller{
	public function insert() {
		$UserModel= new User();
		$UserView= new UserView($this,$this->model);
		echo $UserView->output();
		
		if(isset($_POST['submit']))
		{	
			$UserModel->setFirstname($_POST['fname']);
			$UserModel->setLastname($_POST['lname']);
			$UserModel->setEmail($_POST['email']);
			$UserModel->setPassword($_POST['password']);
			$UserModel->setPhonenumber($_POST['phonenumber']);
			$UserModel->setMajor($_POST['major']);
			$UserModel->setGender($_POST['gender']);
			$UserModel->setDateOfBirth($_POST['Age']);
			$UserModel->AddUser();
		}	
	}
	public function Login() {
		$UserModel= new User();
		$UserView= new UserView($this,$this->model);
		echo $UserView->Login();
		if(isset($_POST['submit']))
		{	
			$UserModel->setEmail($_POST['email']);
			$UserModel->setPassword($_POST['password']);
			$UserModel->Login($UserModel->getEmail(),$UserModel->getPassword());
		}	
	}
	public function View_instructor(){
		$UserModel= new User();
		$UserView= new UserView($this,$this->model);
		echo $UserView->instructor_profile();
		
	}
	
}
?>
