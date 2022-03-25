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
                    <a class="nav-link" href="#">
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
                    <a class="nav-link" href="billing.php">
                        <i class="fa fa-file text-white fa-lg"></i>
                        <span class="text-white m-2">Patient Billing</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="finance.php">
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
                <div class="card-body">
                    <form action="handle_register_staff.php" method="post" enctype="multipart/form-data">
                        <div class="row m-2 p-2">
                            <div class="col-md-6">
                                <label class="form-label grey">Full Name</label>
                                <input class="form-control" type="text" name="fullName" placeholder="" required >
                            </div>
                            <div class="col-md-6">
                                <label class="form-label grey">Email Adress</label>
                                <input class="form-control" type="text" name="emailAddress" required >
                            </div>

                        </div>

                        <div class="row m-2 p-2">
                            <div class="col-md-6">
                                <label class="form-label grey">Phone Number</label>
                                <input class="form-control" type="text" name="phoneNumber" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label grey">Address Location</label>
                                <input class="form-control" type="text" name="location"  required>
                            </div>

                        </div>
                        <div class="row m-2 p-2">
                            <div class="col-md-6">
                                <label class="form-label grey">Gender</label>
                                <select class="form-control" name="gender" required>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label grey">Usertype</label>
                                <select class="form-control" name="usertype" required>
                                    <option value="staff">Staff</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="row m-2 p-2">
                            <div class="col-md-6">
                                <label class="form-label grey">Identification Number</label>
                                <input class="form-control" type="text" name="identification" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label grey">Username</label>
                                <input class="form-control" type="text" name="username"  required>
                            </div>

                        </div>
                        <div class="row m-2 p-2">
                            <div class="col-md-6">
                                <label class="form-label grey">Password</label>
                                <input class="form-control" type="password" name="password" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label grey">Confirm Password</label>
                                <input class="form-control" type="password" name="confirmpass"  required>
                            </div>

                        </div>

                            <div class="row m-2 p-2">
                                <div class="text-center">
                                    <input type="submit" name="submit" class="col-6 btn btn-danger" value="Submit">
                                </div>

                            </div>

                        </div>





                    </form>







                </div>
            </div>
        </div>




</body>


</html>
