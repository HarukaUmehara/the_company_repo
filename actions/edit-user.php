<?php
include '../classes/user.php';

$userObj = new User();

$user_id = $_POST['user_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];

$userObj->updateUser($user_id, $first_name, $last_name, $username);

?>