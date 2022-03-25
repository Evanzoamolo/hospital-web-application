<?php
include "header.php";
include "connect.php";


if (isset($_GET["id"]) and !empty($_GET["id"])){

    $id = $_GET["id"];
    $sql = "SELECT * FROM `discharge` WHERE id = $id";

    $result = mysqli_query($link,$sql);

    if ($result){

        $data = mysqli_num_rows($result);

        if ($data ==1) {
            $row = mysqli_fetch_array($result);

            $fullname = $row["fullname"];
            $section = $row["section"];
            $number = $row["number"];
            $status = $row["status"];
            $bill = $row["bill"];
            $charges = $row["charges"];
           

           
?>
        <div class="col-sm-9 col-lg-9 bg-white">
            <div class="row m-2">
            <div class="card-header"><h3>Patients Discharged</h3></div>
                <div class="card col-md-4 m-2">
                    <div class="card-body">
                        <div class="m-2">
                            <label class="form-label">Full Name : <?php echo $fullname;?></label>
                        </div>
                        <hr>
                        <div class="m-2">
                            <label class="form-label">Hospital Section : <?php echo $section;?></label>
                        </div>
                        <div class="m-2">
                            <label class="form-label">Phone No : <?php echo $number;?></label>
                        </div>
                        <hr>
                        <div class="m-2">
                            <label class="form-label">Status : <?php echo $status;?></label>
                        </div>
                    </div>
                
                </div>
                <div class="card col-md-6 m-2">
                <div class="card-body">
                    <div class="m-2">
                        <label class="form-label">Billing(Ksh.) : <?php echo $bill;?></label>
                     </div>
                     <div class="m-2">
                        <label class="form-label">Additional Charges(Ksh.) : <?php echo $charges;?></label>
                     </div>
                                         
                         <button class="btn btn-primary"><a class="text-white text-decoration-none" href="admindashboard.php">Close</a></button>
                     </div>
                     <hr>
                </div>
                </div>

            </div>
        </div>     



<?php
        }else {
            echo "No record was found";
        }
    }else {
        echo "Error executing query".mysqli_error($link);
    }

}else {
    echo "<p> ID value not picked</p>";
}
?>

