<?php

include "connect.php";

if (isset($_POST["register"])) {
    $firstname = $_POST["firstname"];
    $secondname = $_POST["secondname"];
    $emailaddress = $_POST["emailaddress"];
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
       
        $sql = "INSERT INTO `admin`(`firstname`, `secondname`, `emailaddress`, `username`,`password`)
         VALUES ('$firstname','$secondname','$emailaddress','$username','$storePass')";

        $result = mysqli_query($link,$sql);

        if ($result) {
            echo "<p class='alert alert-primary>You have been registered</p>";
            header(header:"location:adminpanel.php");
        }else {
            echo "Error executing query $sql".mysqli_error($link);
        }
    }
}