<?php
include "header.php";
include "connect.php";

?>
<div class="col-sm-9 col-lg-9 bg-white">
    <div class="row mb-2">
        <div class="card">
            <div class="card-header bg-white">Patients Data</div>
            <div class="card-body">
                <?php
                $sql = "SELECT * FROM `newpatients`";
                $result = mysqli_query($link,$sql);

                if($result){
                    $data = mysqli_num_rows($result);

                    if($data>0){
                        echo "<table class='table table-striped table-bordered'>";
                        echo "<tr>";
                        echo "<th>#</th>";
                        echo "<th>Full Name</th>";
                        echo "<th>Phone Number</th>";
                        echo "<th>Address</th>";
                        echo "<th>ID No:</th>";
                        echo "<th>Gender</th>";
                        echo "<th>Ward</th>";
                        echo "<th>Actions</th>";
                        echo "</tr>";

                        while ($row = mysqli_fetch_array($result)){
                            echo "<tr>";
                            echo "<td>".$row['id']."</td>";
                            echo "<td>".$row['fullname']."</td>";
                            echo "<td>".$row['phonenumber']."</td>";
                            echo "<td>".$row['address']."</td>";
                            echo "<td>".$row['identification']."</td>";
                            echo "<td>".$row['sex']."</td>";
                            echo "<td>".$row['section']."</td>";
                            echo "<td>
                    <a href='adminview_patients.php?id=".$row['id']."'><i class='fa fa-eye'></i></a>

                    <a href='delete.php?id=".$row['id']."'><i class='fa fa-trash-o'></i></a>
                    <a href='update.php?id=".$row['id']."'><i class='fa fa-pencil'></i></a>
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






