<?php
$link = mysqli_connect(hostname: "localhost",username: "root", password: "", database: "amanihospital");
if ($link == false){
    echo "Error connecting".mysqli_connect_error($link);
}
?>
