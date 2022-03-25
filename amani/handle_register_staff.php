<?php

include "connect.php";

if (isset($_POST["submit"])) {
    $fullName = $_POST["fullName"];
    $emailAddress = $_POST["emailAddress"];
    $phoneNumber = $_POST["phoneNumber"];
    $location = $_POST["location"];
    $gender = $_POST["gender"];
    $usertype = $_POST["usertype"];
    $identification = $_POST["identification"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmpass = $_POST["confirmpass"];


    if(strlen($password)<6){
        $passError = "Password must be more than 6 charactors";
        echo $passError;
    }else {
        $storePass = password_hash($password, algo: PASSWORD_DEFAULT);
    }

    
    if ($password!=$confirmpass){
        $confirmpassError = "Password do not match";
        echo $confirmpassError;
    }

    if (empty($passError) and empty($confirmpassword)) {
       
        $sql = "INSERT INTO `staff`(`fullName`, `emailAddress`, `phoneNumber`, `location`, `gender`, `usertype`, `identification`, `username`, `password`)
         VALUES ('$fullName','$emailAddress','$phoneNumber','$location','$gender','$usertype','$identification','$username','$storePass')";

        $result = mysqli_query($link,$sql);

        if ($result) {
            echo "<p class='alert alert-primary>Stff have been registered</p>";
            header(header:"location:admin_staff_register.php");
        }else {
            echo "Error executing query $sql".mysqli_error($link);
        }
    }
}