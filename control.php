<?php
include 'app/view/ViewUser.php';
include 'app/controller/UserController.php';
include 'app/model/User.php';


$model = new User();
$controller = new UserController($model);
$controller->Login();

?>