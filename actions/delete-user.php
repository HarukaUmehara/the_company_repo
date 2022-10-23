<?php
include '../classes/user.php';

$userObj = new User();
$user_id = $_GET['user_id'];
$userObj->deleteUser($user_id);
?>