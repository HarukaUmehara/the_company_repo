<?php
include '../classes/user.php';
session_start();
$user_id = $_SESSION['user_id'];
$userObj = new User();
$user_details = $userObj->getUser($user_id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous"> 

     <title>Profile</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid mx-5">
       <h4 class="text-white">The Company</h4>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-nav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="../views/profile.php"><?= $_SESSION['username'] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="../views">Log out</a>
                </li>
            </ul>
        </div>
    </div>

</nav>

<div class="container">
    <div class="card w-50 mx-auto mt-5">
    <img src="../assets/images/<?= $user_details['photo']?>" alt="" class="card-img-top">
    
        <div class="card-body">
            <form action="../actions/upload-photo.php" method="post" enctype="multipart/form-data">
                <div class="input-group input-group-sm">
                    <input type="file" name="photo" id="photo" class="form-control" accept="images/*" required>
                    <button type="submit"  class="btn btn-outline-success"><i class="fas fa-arrow-circle-up"></i></button>
                </div>
            </form>
        </div>
        <div class="card-footer bg-white border border-0">
            <p class="lead fw-bold mb-o"><?= $user_details['first_name'] ?> <?=$user_details['last_name'] ?></p>
            <p class="lead"><?= $user_details['username'] ?></p>
        </div>
    
   
</div>
    
</body>
</html>

