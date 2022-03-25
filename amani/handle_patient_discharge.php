<?php
include "connect.php";


if (isset($_POST["discharge"])) {
    $section = $_POST["section"];
    $fullname = $_POST["fullname"];
    $status = $_POST["status"];
    $bill = $_POST["bill"];
    $charges = $_POST["charges"];
    $number = $_POST["number"];
    $date = $_POST["date"];
 
   

    $sql = "INSERT INTO `discharge`(`section`, `fullname`, `status`, `bill`, `charges`, `number`, `date`) 
    VALUES ('$section','$fullname','$status','$bill','$charges','$number','$date')";
    
    $result = mysqli_query($link,$sql);
    if ($result) {
        echo "Data has been added successfully";
        header(header: "location:staffdashboard.php");
    }else{
        echo "Error adding this record $sql".mysqli_connect_error($link);
    }
    

}
 
?>


