<?php
session_start();
include "handle_appointments.php";
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

                    <h4 class="text-capitalize text-primary"> <i class="fa-solid fa-hospital"></i> Amani Hospital</h4>
                </a>
                <div class="">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link active nav-pills" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Account<i class="fa-solid fa-user mx-2"></i></a></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="adminpanel.php">Admin</a></li>
                                <hr>
                                <li><a class="dropdown-item" href="staff.php">Staff</a></li>

                            </ul>

                        </li>

                    </ul>
                </div>

            </div>
        </nav>
        <div class="card mt-5">
            <div class="card-body text-center mt-3 mb-3">
                <p>Thank you for booking an appointment with us<br>We will contact you soon</p>
                <div class="btn btn-primary mt-3 mb-3 "><a class="text-decoration-none text-white" href="index.php">close</a></div>
            </div>

        </div>