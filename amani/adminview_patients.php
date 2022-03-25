<?php
include "header.php";
include "connect.php";


if (isset($_GET["id"]) and !empty($_GET["id"])){

    $id = $_GET["id"];
    $sql = "SELECT * FROM `newpatients` WHERE id = $id";

    $result = mysqli_query($link,$sql);

    if ($result){

        $data = mysqli_num_rows($result);

        if ($data ==1) {
            $row = mysqli_fetch_array($result);

            $fullname = $row["fullname"];
            $age = $row["age"];
            $identification = $row["identification"];
            $phonenumber = $row["phonenumber"];
            $sex = $row["sex"];
            $date = $row["date"];
            $address = $row["address"];
            $residence = $row["residence"];
            $section = $row["section"];

           
?>
        <div class="col-sm-9 col-lg-9 bg-white">
            <div class="row m-2">
                <div class="card col-md-4 m-2">
                    <div class="card-body">
                        <div class="m-2">
                            <label class="form-label">Full Name : <?php echo $fullname;?></label>
                        </div>
                        <hr>
                        <div class="m-2">
                            <label class="form-label">Age : <?php echo $age;?></label>
                        </div>
                        <div class="m-2">
                            <label class="form-label">ID No : <?php echo $identification;?></label>
                        </div>
                        <div class="m-2">
                            <label class="form-label">Phone Number : <?php echo $phonenumber;?></label>
                        </div>
                        <div class="m-2">
                            <label class="form-label">Address : <?php echo $address;?></label>
                        </div>
                    </div>
                
                </div>
                <div class="card col-md-6 m-2">
                <div class="card-body">
                    <div class="m-2">
                        <label class="form-label">Gender : <?php echo $sex;?></label>
                     </div>
                     <div class="m-2">
                        <label class="form-label">Residence : <?php echo $residence;?></label>
                     </div>
                     <hr>
                     <div class="m-2">
                        <label class="form-label">Date Admitted : <?php echo $date;?></label>
                     </div>
                     <div class="m-2">
                        <label class="form-label">Ward : <?php echo $section;?></label>
                     </div>
                     <hr>
                     <div>
                         <button class="btn btn-primary"><a class="text-white text-decoration-none" href="adminview.php">Close</a></button>
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

