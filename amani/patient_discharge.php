<?php
include "header2.php";
include "connect.php";
?>

<div class="col-sm-9 col-lg-9 bg-white">
    <div class="row mb-2">
        <div class="card">
            <div class="card-header bg-white text-center">Discharge Patients</div>
            <div class="card-body">
                <div class="admitpatient">
                    <h5>Patient Details</h5>
                    <form action="handle_patient_discharge.php" method="post">
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
                            <label for="sex">Status:</label>
                            <select class="form-control" name="status" id="">
                                <option value="Discharged">Discharged</option>
                                <option value="Referred">Referred</option>
                            </select> 
                            </div>
                    </div> 
                    <div class="row m-2 p-2">
                            <div class="col-md-6">
                            <label for="age">Billing (Ksh.):</label>
                            <input class="form-control" type="number" name="bill"> 
                            </div>
                            <div class="col-md-6">
                            <label for="residance">Additional Charges(Ksh.):</label>
                            <input class="form-control" type="number" name="charges">
                            </div>
                    </div>    

                    <div class="row m-2 p-2">
                            <div class="col-md-6">
                            <label for="address">Forwarding Number:</label>
                            <input class="form-control" type="number" name="number">
                            </div>
                            <div class="col-md-6">
                            <label for="date">Date Discharged:</label>
                            <input class="form-control"  type="date" name="date">
                            </div>
                    </div>    

            
                        
                        <div class="text-center mt-3">
                            <input class="btn btn-primary" type="submit" name="discharge" value="Discharge">
                        </div>
            </div>
        </div>
    </div>
</div>


</body>


</html>
