<?php
include '../classes/user.php';
session_start();
$user_id = $_GET['user_id'];
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

    <title>Edit-user</title>
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

<div class="container mx-auto">
    <div class="card w-50 mx-auto border border-0">
        <div class="card-header border border-0 bg-white">
             <h1 class="text-center mt-5 mb-2">EDIT USER</h1>
        </div>
        <div class="card-body">
            <form action="../actions/edit-user.php" method="post">

                <input type="number" name="user_id" value="<?=$user_id ?>" hidden>

                <label for="first_name" name="first_name" class="form-label">First Name</label>
                <input type="text" name="first_name" class="form-control mb-3" value = '<?= $user_details['first_name'] ?>' requred>
            
                <label for="last_name" name="last_name" class="form-label">Last Name</label>
                <input type="text" name="last_name" class="form-control mb-3" value=' <?= $user_details['last_name'] ?>' required>
            
                <label for="userame" name="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control mb-3" value='<?= $user_details['username'] ?>' required autofocus>

                <button type="submit" name="save" class="btn btn-warning me-auto">Save</button>
                <a href="../views/dashboard.php" class="btn btn-secondary btn-sm me-auto">Cancel</a>
            </form>

           
        
        </div>
    </div>
   
</div>
    
</body>
</html>