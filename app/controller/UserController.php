<?php

require_once( "Controller.php");

class UserController extends Controller{
	public function insert() {
		$UserModel= new User();
		$UserView= new UserView($this,$this->model);
		echo $UserView->output();
		
		if(isset($_POST['submit']))
		{	
			$UserModel->setFirstname($_POST['name']);
			$UserModel->setLastname($_POST['lname']);
			$UserModel->setEmail($_POST['email']);
			$UserModel->setPassword($_POST['password']);
			$UserModel->setPhonenumber($_POST['phone']);
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
