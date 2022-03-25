<?php

session_start();

if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"]!==true){
    header(header:"location:index.php");
    exit();
} 
include "connect.php";
include "registeradmin.php";

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/4a71fd970c.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid">
    <nav class="navbar  navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand bg-white" href="index.php">

                <h4 class="text-primary"> <i class="fa-solid fa-hospital"></i> Amani Hospital</h4>
            </a>
            <div class="">
                <p>Welcome back <?php echo $_SESSION['username']; ?><i class="fa-solid fa-user mx-2"></i></p>



            </div>

        </div>
    </nav>
</div>

<div class="container-fluis">
    <div class="row">
        <div class="col-sm-3 col-lg-3 bg-primary">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Active
                        <i class="fa fa-buysellads text-white fa-2x"></i>
                        <span class="text-white">ADMIN DASHBOARD</span> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admindashboard.php">
                        <i class="fa fa-dashboard text-white fa-lg"></i>
                        <span class="text-white m-2">Dashboard</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link" href="admin_staff_register.php">
                        <i class="fa fa-users text-white fa-lg"></i>
                        <span class="text-white m-2">Register Staffs</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="staffview.php">
                        <i class="fa fa-eye text-white fa-lg"></i>
                        <span class="text-white m-2">View Staffs</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminview.php">
                        <i class="fa fa-cog text-white fa-lg"></i>
                        <span class="text-white m-2">Patients Data</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link" href="appointments.php">
                        <i class="fa fa-file text-white fa-lg"></i>
                        <span class="text-white m-2">Appointments</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_view_discharged_patients.php">
                        <i class="fa fa-clipboard text-white fa-lg"></i>
                        <span class="text-white m-2">Finance Account</span>
                    </a>
                </li>
                <hr>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-wrench text-white fa-lg"></i>
                        <span class="text-white m-2">Settings</span>
                    </a>
                </li>
                <li class="nav-item">
                    <div class="nav-link">
                        <div class="dropdown">
                            <i class="fas fa-briefcase bg-white"></i>
                            <span class="text-white btn" id=" dropdownMenuButton2" data-bs-toggle="dropdown"
                            aria-expanded="false">Reports</span>


                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                <li><a class="dropdown-item" href="#">January Reports</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">February Reports</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">March Reports</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">April Reports</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link" href="adminpanel.php">
                        <i class="fa fa-mail-forward text-white fa-lg"></i>
                        <span class="text-white m-2">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-sm-9 col-lg-9 bg-white">
        <div class="row mb-2">
           <div class="card">
                <div class="card-header">ADMIN DASHBOARD | WELCOME</div>
                <div class="card-body">
                    <img src="images/hos2.jpg" alt="loading" height="500" width="100%">
                </div>
               
            </div>  
           
        </div>




</body>


</html>
