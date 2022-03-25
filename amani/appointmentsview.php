<?php
include "header.php";
include "connect.php";


if (isset($_GET["id"]) and !empty($_GET["id"])){

    $id = $_GET["id"];
    $sql = "SELECT * FROM `appointment` WHERE id = $id";

    $result = mysqli_query($link,$sql);

    if ($result){

        $data = mysqli_num_rows($result);

        if ($data ==1) {
            $row = mysqli_fetch_array($result);

            $fullname = $row["fullname"];
            $emailaddress = $row["emailaddress"];
            $phonenumber = $row["phonenumber"];
            $message = $row["message"];

           
?>
        <div class="col-sm-9 col-lg-9 bg-white">
            <div class="row m-2">
            <div class="card-header"><h3>Client Appointments</h3></div>
                <div class="card col-md-4 m-2">
                    <div class="card-body">
                        <div class="m-2">
                            <label class="form-label">Full Name : <?php echo $fullname;?></label>
                        </div>
                        <hr>
                        <div class="m-2">
                            <label class="form-label">Email : <?php echo $emailaddress;?></label>
                        </div>
                        <div class="m-2">
                            <label class="form-label">Phone No : <?php echo $phonenumber;?></label>
                        </div>
                       
                    </div>
                
                </div>
                <div class="card col-md-6 m-2">
                <div class="card-body">
                    <div class="m-2">
                        <label class="form-label">Message : <?php echo $message;?></label>
                     </div>
                     
                     
                         <button class="btn btn-primary"><a class="text-white text-decoration-none" href="appointments.php">Close</a></button>
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

