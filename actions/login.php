<?php
include '../classes/user.php';

$userObj = new User();

$username = $_POST['username'];
$password = $_POST['password'];

$userObj->login($username, $password);

?>