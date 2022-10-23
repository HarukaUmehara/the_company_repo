<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Login</title>
</head>
<body calss="bg-light">
    <div style="height: 100vh">
    <div class="row h-100 m-0">
        <div class="card w-25 m-auto">
            <div class="card-header bg-transparent border-0">
                <h1 class="text-center">LOGIN</h1>
            </div>
            <div class="card-body">
                <form action="../actions/login.php" method="post">
                    <input type="text" name="username" placeholder="USERNAME" class="form-control mb-2" required autofocus>
                    <input type="password" name="password" placeholder="PASSWORD" class="form-control mb-5">
                    <button type="submit" class="btn btn-primary w-100">LOG IN</button>
                </form>

                <p class="text-center mt-3 small"><a href="register.php">Create Account</a></p>
            </div>
        </div>
    </div>
    </div>
    
</body>
</html>