<?php
include "header.php";
include "connect.php";


if (isset($_GET["id"]) and !empty($_GET["id"])){

    $id = $_GET["id"];
    $sql = "SELECT * FROM `staff` WHERE id = $id";

    $result = mysqli_query($link,$sql);

    if ($result){

        $data = mysqli_num_rows($result);

        if ($data ==1) {
            $row = mysqli_fetch_array($result);

            $fullName = $row["fullName"];
            $emailAddress = $row["emailAddress"];
            $phoneNumber = $row["phoneNumber"];
            $location = $row["location"];
            $gender = $row["gender"];
            $usertype = $row["usertype"];
            $identification = $row["identification"];
            $username = $row["username"];

           
?>
        <div class="col-sm-9 col-lg-9 bg-white">
            <div class="row m-2">
            <div class="card-header"><h3>Staff Data</h3></div>
                <div class="card col-md-4 m-2">
                    <div class="card-body">
                        <div class="m-2">
                            <label class="form-label">Full Name : <?php echo $fullName;?></label>
                        </div>
                        <hr>
                        <div class="m-2">
                            <label class="form-label">Email : <?php echo $emailAddress;?></label>
                        </div>
                        <div class="m-2">
                            <label class="form-label">Phone No : <?php echo $phoneNumber;?></label>
                        </div>
                        <hr>
                        <div class="m-2">
                            <label class="form-label">Residence : <?php echo $location;?></label>
                        </div>
                        <div class="m-2">
                            <label class="form-label">Gender : <?php echo $gender;?></label>
                        </div>
                    </div>
                
                </div>
                <div class="card col-md-6 m-2">
                <div class="card-body">
                    <div class="m-2">
                        <label class="form-label">Usertype : <?php echo $usertype;?></label>
                     </div>
                     <div class="m-2">
                        <label class="form-label">ID No : <?php echo $identification;?></label>
                     </div>
                     
                     <div class="m-2">
                        <label class="form-label">Username : <?php echo $username;?></label>
                        <hr>
                     </div>
                     
                         <button class="btn btn-primary"><a class="text-white text-decoration-none" href="staffview.php">Close</a></button>
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

