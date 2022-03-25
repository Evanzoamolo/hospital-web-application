<?php

include "header.php";
include "connect.php";



if (isset($_POST["update"])) {
    $id = $_POST["id"];
    $up_fullName = $_POST["fullName"];
    $up_emailAddress = $_POST["emailAddress"];
    $up_phoneNumber = $_POST["phoneNumber"];
    $up_location = $_POST["location"];
    $up_gender = $_POST["gender"];
    $up_usertype = $_POST["usertype"];
    $up_identification = $_POST["identification"];
    $up_username = $_POST["username"];
    $up_password = $_POST["password"];
    $up_confirmpass = $_POST["confirmpass"];
    

   
    if(strlen($up_password)<6){
        $passError = "Password must be more than 6 charactors";
        echo $passError;
    }else {
        $up_storePass = password_hash($up_password, algo: PASSWORD_DEFAULT);
    }

    
    if ($up_password!=$up_confirmpass){
        $confirmpassError = "Password do not match";
        echo $confirmpassError;
    }

    if (empty($passError) and empty($confirmpassword)) {
       
        $up_sql = "UPDATE `staff` SET `fullName`='$up_fullName',`emailAddress`='$up_emailAddress',`phoneNumber`='$up_phoneNumber',
        `location`='$up_location',`gender`='$up_gender',`usertype`='$up_usertype',`identification`='$up_identification',`username`='$up_username',`password`='$up_storePass' WHERE id= $id";

        $up_result = mysqli_query($link,$up_sql);

        if ($up_result) {
            echo "<p class='alert alert-primary'>Staff have been updated</p>";
            header(header:"location:adminview_staff.php");
        }else {
            echo "Error executing query $up_sql".mysqli_error($link);
        }
    }
  
    

 
    
   

}else {
    if (isset($_GET["id"]) and !empty($_GET["id"])) {
        $id = $_GET["id"];

        $sql = "SELECT * FROM `staff` WHERE id=$id";
        $result = mysqli_query($link,$sql);

        if ($result){

            $data = mysqli_num_rows($result);

            if ($data == 1){

                $row = mysqli_fetch_array($result);
                $fullName = $row["fullName"];
                $emailAddress = $row["emailAddress"];
                $phoneNumber = $row["phoneNumber"];
                $location = $row["location"];
                $gender = $row["gender"];
                $usertype = $row["usertype"];
                $identification = $row["identification"];
                $username = $row["username"];
                

            }else {
                echo "No record of id $id found";
            }
        }else {
            echo "Error executing query $sql".mysqli_error($link);
        }
    }
}

?>

<div class="col-sm-9 col-lg-9 bg-white">
        <div class="row mb-2">
            <div class="card">
                <div class="card-header">Update Staff Details</div>
                <div class="card-body">
                    <form action="update_staff.php" method="post" enctype="multipart/form-data">
                        <div class="row m-2 p-2">
                            <div class="col-md-6">
                                <label class="form-label grey">Full Name</label>
                                <input class="form-control" type="text" name="fullName" placeholder="" value="<?php echo $fullName;?>" >
                            </div>
                            <div class="col-md-6">
                                <label class="form-label grey">Email Adress</label>
                                <input class="form-control" type="text" name="emailAddress" value="<?php echo $emailAddress;?>" >
                            </div>

                        </div>

                        <div class="row m-2 p-2">
                            <div class="col-md-6">
                                <label class="form-label grey">Phone Number</label>
                                <input class="form-control" type="text" name="phoneNumber" value="<?php echo $phoneNumber;?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label grey">Address Location</label>
                                <input class="form-control" type="text" name="location"  value="<?php echo $location;?>">
                            </div>

                        </div>
                        <div class="row m-2 p-2">
                            <div class="col-md-6">
                                <label class="form-label grey">Gender</label>
                                <select class="form-control" name="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="<?php  echo $gender;?>" selected><?php  echo $gender;?></option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label grey">Usertype</label>
                                <select class="form-control" name="usertype" required>
                                    <option value="staff">Staff</option>
                                    <option value="admin">Admin</option>
                                    <option value="<?php  echo $usertype;?>" selected><?php  echo $usertype;?></option>
                                </select>
                            </div>
                        </div>
                        <div class="row m-2 p-2">
                            <div class="col-md-6">
                                <label class="form-label grey">Identification Number</label>
                                <input class="form-control" type="text" name="identification" value="<?php echo $identification;?>"uired>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label grey">Username</label>
                                <input class="form-control" type="text" name="username"  value="<?php echo $username;?>">
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
                        <div class="row p-2">
                            <div class="col-md-12">
                                <input class="form-control" type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                            </div>

                        </div>

                            <div class="row m-2 p-2">
                                <div class="text-center">
                                    <input type="submit" name="update" class="col-6 btn btn-danger" value="Submit">
                                </div>

                            </div>

                        </div>





                    </form>







                </div>
            </div>

