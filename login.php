<?php

session_start();

require 'db.php';

if (isset($_POST['login'])) {
    $name = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE name='$name' AND pass='$password'";
    $res = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($res);

    if($user) {
        $_SESSION['auth'] = true;
        header('location: home.php');
    } else {
        $_SESSION['auth'] = false;
    }

    /* if ($name == 'mgmg' && $password == '123') {

        $_SESSION['auth'] = true;
        header('location: home.php');
    } else {

        $_SESSION['auth'] = false;
    } */
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">
                <h3 class="mb-3">Login Form</h3>
                <form action="login.php" method="post">

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="username" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <button type="submit" name="login" class="btn btn-primary">Login</button>

                </form>
            </div>
        </div>
    </div>

</body>

</html>