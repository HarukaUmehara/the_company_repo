<?php
include '../classes/user.php';

$userObj = new User();
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$password = $_POST['password'];
$photo = null;
$userObj->createUser($first_name, $last_name, $username, $password, $photo);




?>