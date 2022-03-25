<?php

include "header.php";
include "connect.php";
include "handle_admin_login.php";

?>
<div class="col-sm-9 col-lg-9 bg-white">
    <div class="row mb-2">
        <div class="card">
            <div class="card-header bg-white">Staff Data</div>
            <div class="card-body">
                <?php
                $sql = "SELECT * FROM `staff`";
                $result = mysqli_query($link,$sql);

                if($result){
                    $data = mysqli_num_rows($result);

                    if($data>0){
                        echo "<table class='table table-striped table-bordered'>";
                        echo "<tr>";
                        echo "<th>#</th>";
                        echo "<th>Full Name</th>";
                        echo "<th>Email</th>";
                        echo "<th>Phone Number</th>";
                        echo "<th>location</th>";
                        echo "<th>Gender</th>";
                        echo "<th>Usertype</th>";
                        echo "<th>ID No</th>";
                        echo "<th>Username</th>";
                        echo "<th>Action</th>";
                        echo "</tr>";

                        while ($row = mysqli_fetch_array($result)){
                            echo "<tr>";
                            echo "<td>".$row['id']."</td>";
                            echo "<td>".$row['fullName']."</td>";
                            echo "<td>".$row['emailAddress']."</td>";
                            echo "<td>".$row['phoneNumber']."</td>";
                            echo "<td>".$row['location']."</td>";
                            echo "<td>".$row['gender']."</td>";
                            echo "<td>".$row['usertype']."</td>";
                            echo "<td>".$row['identification']."</td>";
                            echo "<td>".$row['username']."</td>";
                            echo "<td>
                            <a href='adminview_staff.php?id=".$row['id']."'><i class='fa fa-eye'></i></a>
        
                            <a href='deletestaff.php?id=".$row['id']."'><i class='fa fa-trash-o'></i></a>
                            <a href='update_staff.php?id=".$row['id']."'><i class='fa fa-pencil'></i></a>
                            </td>";
                            echo "</tr>";

                        }
                        echo "</table>";
                    }else {
                        echo "<p>No data was found</p>";
                    }

                }else {
                    echo "Error executing quer $sql".mysqli_error($link,$sql);
                }
                ?>
            </div>
        </div>
    </div>
</div>
