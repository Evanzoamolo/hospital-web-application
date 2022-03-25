
<?php
/* session_start();
if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"]!==true){
    header(header:"location:index.php");
    exit();
}
 */

include "header.php";
include "connect.php";



if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    $up_section = $_POST["section"];
    $up_fullname = $_POST["fullname"];
    $up_sex = $_POST["sex"];
    $up_age = $_POST["age"];
    $up_residence = $_POST["residence"];
    $up_address = $_POST["address"];
    $up_date = $_POST["date"];
    $up_phonenumber = $_POST["phonenumber"];
    $up_identification = $_POST["identification"];
  
   
    $up_sql = "UPDATE `newpatients` SET `section`='$up_section',`fullname`='$up_fullname',`sex`='$up_sex',`age`='$up_age',`residence`='$up_residence',
    `address`='$up_address',`date`='$up_date',`phonenumber`='$up_phonenumber',`identification`='$up_identification' WHERE id = $id";

    $up_result = mysqli_query($link,$up_sql);

       //checking for updated recods
    if ($up_result) {
        echo "<p class='alert alert-primary'>Records has been updated successfully</p>";
        header(header:"location:adminview.php");
    }else {
        echo "Error executing query $up_sql".mysqli_error($link);
    }

}else {
    if (isset($_GET["id"]) and !empty($_GET["id"])) {
        $id = $_GET["id"];

        $sql = "SELECT * FROM `newpatients` WHERE id=$id";
        $result = mysqli_query($link,$sql);

        if ($result){

            $data = mysqli_num_rows($result);

            if ($data == 1){

                $row = mysqli_fetch_array($result);
                $section = $row["section"];
                $fullname = $row["fullname"];
                $sex = $row["sex"];
                $age = $row["age"];
                $residence = $row["residence"];
                $address = $row["address"];
                $date = $row["date"];
                $phonenumber = $row["phonenumber"];
                $identification = $row["identification"];


            }else {
                echo "No record of id $id found";
            }
        }else {
            echo "Error executing query $sql".mysqli_connect_error($link);
        }
    }
}

?>

<div class="col-sm-9 col-lg-9 bg-white">
    <div class="row mb-2">
        <div class="card">
            <div class="card-header bg-white text-center">Update Patients Records</div>
            <div class="card-body">
                <div class="admitpatient">
                    <h5>Patient Details</h5>
                    <form action="update.php" method="post">
                        <div class="radiobuttons">
                            <label for="text">Hospital Section</label>
                            <select class="form-control" name="section" id="">
                                <option value="Out-patient">Out patient</option>
                                <option value="In-patient">In Patient</option>
                                <option value="Surgery">Surgery</option>
                                <option value="Merternity">Merternity</option>
                                <option value="<?php  echo $section;?>" selected><?php  echo $section;?></option>
                            </select> <br>

                        </div>
                        <div class="patientname">
                            <label for="name">Full Name:</label>
                            <input class="form-control" type="text" name="fullname" value="<?php  echo $fullname;?>"> <br>
                            <label for="sex">Sex:</label>
                            <select class="form-control" name="sex" id="">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="<?php  echo $sex;?>" selected><?php  echo $sex;?></option>
                            </select> <br>
                            <label for="age">Age:</label>
                            <input class="form-control" type="number" name="age" value="<?php  echo $age;?>"> <br>
                            <label for="residance">Residence:</label>
                            <input class="form-control" type="text" name="residence" value="<?php  echo $residence;?>"><br>
                            <label for="address">Address:</label>
                            <input class="form-control" type="text" name="address" value="<?php  echo $address;?>"> <br>
                            <label for="date">Date Admitted:</label>
                            <input class="form-control"  type="date" name="date" value="<?php  echo $date;?>"><br>
                            <label>Phone No:</label>
                            <input class="form-control" type="number" name="phonenumber" value="<?php  echo $phonenumber;?>"><br>
                            <label>ID No:</label>
                            <input class="form-control" type="number" name="identification" value="<?php  echo $identification;?>">

                            <div class="row p-2">
                                <div class="col-md-12">
                                    <input class="form-control" type="hidden" name="id" value="<?php echo $_GET['id'];?>">

                                </div>
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
