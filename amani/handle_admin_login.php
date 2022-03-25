<?php
include "connect.php";


if (isset($_POST["submit"])){
    $username = $_POST['username'];
    $userpassword = $_POST["password"];

    $sql = "SELECT * FROM `admin` WHERE username = '$username'";
    $result = mysqli_query($link,$sql);

    if ($result) {
        $data = mysqli_num_rows($result);

        if ($data==1) { 

            while ($row = mysqli_fetch_array($result)) {
                $id = $row["id"];
                $firstname = $row["firstname"];
                $emailaddress = $row["emailaddress"];
                $username = $row["username"];
                $password = $row["password"];

                //verify password
                if (password_verify($userpassword,$password)){
                    if ($row["usertype"]=="staff"){
                        session_start();
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $id;
                        $_SESSION["username"] = $username;
                        
    
                        header(header:"location:staffdashboard.php");    

                    } else if($row["usertype"]== "admin") {
                        session_start();
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] =$id;
                        $_SESSION["username"] =$username;
                        $_SESSION["userpassword"] = $userpassword;

                        header(header:"location:admindashboard.php");
                    }else {
                        echo "You have not been assigned a usertype. Contact Admin";
                    }
                }else {
                    echo "Password not matching"; 
                }
            }
        }else {
            echo "Error executing query $sql".mysqli_error($link);
        }

    }
}    