<?php
include '../classes/user.php';
$userObj = new User();
$user_id = $_GET['user_id'];
$user_details = $userObj->getUser($user_id);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Delete User</title>
</head>
<body>
    <div class="container">
        <div class="card w-25 border border-0 mx-auto my-5">
            <div class="card-header border border-0 bg-white">
                <h3 class="text-danger text-center">DELETE USER</h3>
            </div>
        
            <div class="card-body text-center">
                <i class="fa-solid fa-triangle-exclamation  text-warning display-3"></i>

                <p class="fw-bold">Are you sure you want to delete"<?= $user_details['first_name']?>  <?= $user_details['last_name'] ?>"?</p>

                <a href="../views/dashboard.php" class="btn btn-secondary">Cancel</a>
                <a href="../actions/delete-user.php?user_id=<?=$_GET['user_id']?>" class="btn btn-outline-danger">Delete</a>

            </div>
        </div>
    </div>

    
</body>
</html>