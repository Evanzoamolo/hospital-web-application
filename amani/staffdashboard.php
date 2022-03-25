<?php
include "header2.php";
include "connect.php";

?>
<div class="col-sm-9 col-lg-9 bg-white">
    <div class="row mb-2">
        <div class="card">
            <div class="card-header bg-white text-center">Admit Patients</div>
            <div class="card-body">
                <div class="admitpatient">
                    <h5>Patient Details</h5>
                    <form action="register_patients.php" method="post">
                    <div class="row m-2 p-2">
                            <div class="col-md-6">
                            <label for="text">Hospital Section</label>
                            <select class="form-control" name="section" id="">
                                <option value="Out-patient">Out patient</option>
                                <option value="In-patient">In Patient</option>
                                <option value="Surgery">Surgery</option>
                                <option value="Merternity">Merternity</option>
                            </select> 
                            </div>
                    </div>
                        
                    <div class="row m-2 p-2">
                            <div class="col-md-6">
                            <label for="name">Full Name:</label>
                            <input class="form-control" type="text" name="fullname"> 
                            </div>
                            <div class="col-md-6">
                            <label for="sex">Sex:</label>
                            <select class="form-control" name="sex" id="">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select> 
                            </div>
                    </div> 
                    <div class="row m-2 p-2">
                            <div class="col-md-6">
                            <label for="age">Age:</label>
                            <input class="form-control" type="number" name="age"> 
                            </div>
                            <div class="col-md-6">
                            <label for="residance">Residence:</label>
                            <input class="form-control" type="text" name="residence">
                            </div>
                    </div>    

                    <div class="row m-2 p-2">
                            <div class="col-md-6">
                            <label for="address">Address:</label>
                            <input class="form-control" type="text" name="address">
                            </div>
                            <div class="col-md-6">
                            <label for="date">Date Admitted:</label>
                            <input class="form-control"  type="date" name="date">
                            </div>
                    </div>    

                    <div class="row m-2 p-2">
                            <div class="col-md-6">
                            <label>Phone No:</label>
                            <input class="form-control" type="number" name="phonenumber">
                            </div>
                            <div class="col-md-6">
                            <label>ID No:</label>
                            <input class="form-control" type="number" name="identification">
                            </div>
                    </div>    


                           
                        
                           
                            
                          
                           
                           
                           
                          
                        
                        <div class="text-center mt-3">
                            <input class="btn btn-primary" type="submit" name="submit" value="submit">
                        </div>
            </div>
        </div>
    </div>
</div>


</body>


</html>
