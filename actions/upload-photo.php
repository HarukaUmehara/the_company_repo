<?php
// echo "test";
include '../classes/user.php';
session_start();
// var_dump($_FILES);
$userObj = new User();
$user_id = $_SESSION['user_id'];
$photo_name = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$userObj->uploadPhoto($user_id, $photo_name, $tmp_name);


// include '../classes/user.php';
// session_start();
// var_dump($_FILES);
// $userObj = new User();
// $user_id = $_SESSION['user_id'];
// $photo_name = $_FILES['photo']['name'];
// $tmp_name = $_FILES['photo']['tmp_name'];
// $userObj->uploadPhoto($user_id, $photo_name, $tmp_name);


?>