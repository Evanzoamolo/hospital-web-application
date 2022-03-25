<?php

include "connect.php";
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMANI HOSPITAL</title>
    <script src="popper.min.js"></script>
    <script src="jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/4a71fd970c.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container-fluid">
    <nav class="navbar  navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand bg-white" href="index.php">

                <h4 class="text-primary"> <i class="fa-solid fa-hospital"></i> Amani Hospital</h4>
            </a>
            <div class="">
                <a class="text-decoration-none" href="adminpanel.php">
                    Admin login
                    <i class="fa-solid fa-user mx-2"></i>
                </a>

                <a class="text-decoration-none" href="staff.php">

                    Staff login
                    <i class="fa fa-circle-user mx-2"></i>
                </a>
            </div>

        </div>
    </nav>

    <div class="border container-sm">
        <div>
            <h3 class="text-center mt-5">Login</h3>
        </div>
        <div class="row m-2 p-2 border shadow-lg p-3 mb-5 bg-body rounded container mt-5">
            <div class="col-sm-6">
                <div class="card bg-transparent login">
                    <div class="card-body bg-transparent">
                        <div class="">
                            <h3 class="text-center mt-3">Amani Hospital</h3>
                            <div class="mt-4">
                                <p>Amani Hospital We care about your health, <br>we ensure you get the best in-terms of care and the best professionals</p>
                                <p class="mt-2"><i class="fa-solid fa-envelope"></i> amanihospital@gmail.com</p>
                                <p class="mt-2"><i class="fa-solid fa-phone"></i> +2547234566</p>
                                <p class="mt-4">Login as <a href="staff.php">staff</a> </p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="">
                            <div class="">
                                <form action="handle_admin_login.php" method="post">
                                    <div>
                                        <span class="input-group-addon"><i class="fa-solid fa-user"></i></span>
                                        <label class="mb-3 mt-3">Username</label> <br>
                                        <input class="form-control" type="text" name="username">
                                    </div>
                                    <div>
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <label class="mb-3 mt-3">Password</label> <br>
                                        <input class="form-control" type="password" name="password"> <br>
                                    </div>
                                    <div class="forgetpass m-t-1">
                                        <p>Do not have account. Register <a href="adminregister.php">here</a> </p>
                                        <p><a href="forgot_password.php">Forgotten your username or password?</a></p>
                                    </div>
                                    <div class="text-center">
                                        <input class="btn btn-primary" type="submit" name="submit" value="Login">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>
</body>


</html>

