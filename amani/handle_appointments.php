<?php
include "connect.php";


if (isset($_POST["appointment"])) {
    $fullname = $_POST["fullname"];
    $emailaddress = $_POST["emailaddress"];
    $phonenumber = $_POST["phonenumber"];
    $message = $_POST["message"];
    
   

     

    $sql = "INSERT INTO `appointment`(`fullname`, `emailaddress`, `phonenumber`, `message`)
     VALUES ('$fullname','$emailaddress','$phonenumber','$message')";
    
    $result = mysqli_query($link,$sql);
    if ($result) {
        echo "Message has been received successfully";
        header(header: "location:client_appointment.php");
    }else{
        echo "Error adding this record $sql".mysqli_connect_error($link);
    }
    

}
 
?>