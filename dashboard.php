<?php
include '../classes/user.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Dashboard</title>
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

<div class="container mt-5">
    <h1 class="text-secondary fw-light">USER LIST</h1>
    <div class="row">
        
            <table class="table table-hover mx-auto">
                <thead class="table-secondary">
                    <th class="col-1">#</th>
                    <th class="col-3">Fist Name</th>
                    <th class="col-3">Last Name</th>
                    <th class="col-3">Username</th>
                    <th></th>
                </thead>

                <tbody>
                    <?php 
                    $userObj = new User();
                    $userObj->getAllUsers($_SESSION['user_id']); 
                    ?>
                </tbody>
            </table>
        
    </div>
</div>
    
</body>
</html>