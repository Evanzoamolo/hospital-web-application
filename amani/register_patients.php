<?php
include "connect.php";


if (isset($_POST["submit"])) {
    $section = $_POST["section"];
    $fullname = $_POST["fullname"];
    $sex = $_POST["sex"];
    $age = $_POST["age"];
    $residence = $_POST["residence"];
    $address = $_POST["address"];
    $date = $_POST["date"];
    $phonenumber = $_POST["phonenumber"];
    $identification = $_POST["identification"]; 
   

    echo "$section <br>";
    echo "$fullname <br>";
    echo "$sex <br>";
    echo "$age <br>";
    echo "$residence <br>";
    echo "$address <br>";
    echo "$date <br>";
    echo "$phonenumber <br>";
    echo "$identification <br>";
 
   

    $sql = "INSERT INTO `newpatients`(`section`, `fullname`, `sex`, `age`, `residence`, `address`, `date`, `phonenumber`, `identification`) 
    VALUES ('$section','$fullname','$sex','$age','$residence','$address','$date','$phonenumber','$identification')";
    
    $result = mysqli_query($link,$sql);
    if ($result) {
        echo "Data has been added successfully";
        header(header: "location:staffdashboard.php");
    }else{
        echo "Error adding this record $sql".mysqli_connect_error($link);
    }
    

}
 
?>


