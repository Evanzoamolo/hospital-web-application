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
        <div id="carouselExampleSlidesOnly" class="container-fluid carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/hos.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/hos1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/unplashhospital.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
        <div class="aboutus container mt-5">
            <div class="text-center mt-4">
                <h3>About Us</h3>
            </div>
            <div class="justify">
                <p>Amani Hospital was founded in 2005 for the purpose of managing the outpatient department at the Hospital,
                     and to extend medical services to corporate clientele through an innovative concept of Managed Healthcare.</p>
                <p>A multi-specialty centre of excellence offering services that meet international certification standards. Amani hospital is geared to a higher purpose</p>
            </div>
        </div>
        <div class="aboutus container">
            <div class="text-center">
                <h3>Mission</h3>
            </div>
            <div class="justify">
                <p>Patients benefit from our unique team-based approach to care, which enables them to benefit from the diverse expertise of the entire Amani team of medical professionals.
                    As the teaching hospital in Kenya for Amani Medical College and School of Nursing and Midwifery,
                    we practice an evidence-based approach to medicine, driven by the cutting-edge research conducted by experienced faculty members.
                    Amani’s approach to care is guided by its core principles of Quality, Access, Impact and Relevance.</p>
            </div>
        </div>
        <div class="aboutus container mb-3">
            <div class="text-center">
                <h3>Vision</h3>
            </div>
            <div class="justify">

                <p>The vision of the Amani Hospital, Nairobi is to be the premier, tertiary, teaching and referral health care facility in sub-Saharan Africa.
                    For over fifty years, it has been taking care of families in East Africa.
                    As a private, not-for-profit hospital, it strives to provide access to quality healthcare to all who need it.</p>
            </div>
        </div>

        <div class="container mt-4">
            <div class="card-header text-center">
                <h3>Our Team</h3>
            </div>
            <div class="card-group">
                <div class="card">
                    <img src="images/doc1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Dr. K. Rajesh</h5>
                        <p class="card-text">Surgion</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Joinned Amani Hospital 3 years ago</small>
                    </div>
                </div>
                <div class="card">
                    <img src="images/doc2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Dr. M. Merceline</h5>
                        <p class="card-text">Gynecologist</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Joinned Amani Hospital 4 years ago</small>
                    </div>
                </div>
                <div class="card">
                    <img src="images/doc.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Dr. D. Brian</h5>
                        <p class="card-text">Pediatrician & Nutritionist</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Joinned Amani Hospital 2 years ago</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">

            <div class="card">
                <div class="card-header text-center">
                    <h3>Testimonials</h3>
                </div>
                <div class="card-body">
                    <div class="container d-flex justify-content-center">

                        <div>
                            <div class="text-center b-rounded">
                                <img src="images/tesm1 (1).jpg" class="rounded-circle" alt="" height="150" width="150">
                            </div>
                            <div>
                                <p class="text-center mx-2 p-2"><i class="fa fa-quote-left mx-1"></i>Amani Hospital is the best in the region. We had an excellent experience we never
                                    knew existed. Thank you so much<i class="fa fa-quote-right mx-1"></i></p>
                            </div>
                        </div>
                        <div>
                            <div class="text-center">
                                <img src="images/tesm1 (2).jpg" class="rounded-circle" alt="" height="150" width="150">
                            </div>
                            <div>
                                <p class="text-center mx-2 p-2"><i class="fa fa-quote-left mx-1"></i>Thanks and thank you so much Amani Hospital. We had the best services ever.<i class="fa fa-quote-right mx-1"></i></p>
                            </div>
                        </div>
                        <div>
                            <div class="text-center">
                                <img src="images/tesm1 (3).jpg" class="rounded-circle" alt="" height="150" width="150">
                            </div>
                            <div>
                                <p class="text-center mx-2 p-2"><i class="fa fa-quote-left mx-1"></i>I will recomend Amani Hospital again and again, thank you so much. Our baby is doing great now.<i class="fa fa-quote-right mx-1"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div>
                <h3 class="text-center mt-5">Book An Appointment</h3>
            </div>
            <div class="row m-2 p-2 border shadow-lg p-3 mb-5 bg-body rounded container mt-5">
                <div class="col-sm-6">
                    <div class="card bg-transparent login">
                        <div class="card-body bg-transparent">
                            <div class="">
                                <h3 class="text-center mt-3">Amani Hospital</h3>
                                <div class="mt-4 mb-5">
                                    <p>Amani Hospital We care about your health, <br>we ensure you get the best in-terms of care and the best professionals</p>
                                    <p class="mt-2"><i class="fa-solid fa-envelope"></i> amanihospital@gmail.com</p>
                                    <p class="mt-2 mb-4"><i class="fa-solid fa-phone"></i> +2547234566</p>

                                </div>

                            </div>
                            <div class="text-center mt-5">
                            <p class="text-primary mt-3"><i class="fa-solid fa-hospital mx-3"></i>Amani hospital we care about your health <br> We wish you a quick recovery!<i class="fa-solid fa-hospital mx-3"></i></p>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card bg-transparent">
                        <div class="card-body ">
                            <div class="">
                                <div class="">
                                    <form action="handle_appointments.php" method="post">
                                        <div>
                                            <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                                            <label class="mb-3 mt-3">Fullname</label> <br>
                                            <input class="form-control" type="text" name="fullname">
                                        </div>
                                        <div>
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <label class="mb-3 mt-3">Email</label> <br>
                                            <input class="form-control" type="email" name="emailaddress"> <br>
                                        </div>
                                        <div>
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            <label class="mb-3 mt-3">Phone Number</label> <br>
                                            <input class="form-control" type="text" name="phonenumber"> <br>
                                        </div>
                                        <div>
                                            <textarea class="form-control" name="message" id="" cols="30" rows="5" placeholder="Your message here....."></textarea>
                                        </div>

                                        <div class="text-center mt-2">
                                            <input class="btn btn-primary" type="submit" name="appointment" value="Book appointment">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="navbar-light bg-white">
            <div class="text-center footer">
                <p class="text-primary"><i class="fa-solid fa-hospital mx-3"></i>Amani hospital we care about your health <br> We wish you a quick recovery!<i class="fa-solid fa-hospital mx-3"></i></p>
            </div>


        </div>


    </div>
</body>


</html>