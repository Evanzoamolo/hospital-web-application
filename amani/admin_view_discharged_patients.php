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
                $sql = "SELECT * FROM `discharge`";
                $result = mysqli_query($link,$sql);

                if($result){
                    $data = mysqli_num_rows($result);

                    if($data>0){
                        echo "<table class='table table-striped table-bordered'>";
                        echo "<tr>";
                        echo "<th>#</th>";
                        echo "<th>Section</th>";
                        echo "<th>Full Name</th>";
                        echo "<th>Phone Number</th>";
                        echo "<th>Status</th>";
                        echo "<th>Bill(Ksh.)</th>";
                        echo "<th>Additional Bill(Ksh.)</th>";
                        echo "<th>Actions</th>";
                        echo "</tr>";

                        while ($row = mysqli_fetch_array($result)){
                            echo "<tr>";
                            echo "<td>".$row['id']."</td>";
                            echo "<td>".$row['section']."</td>";
                            echo "<td>".$row['fullname']."</td>";
                            echo "<td>".$row['number']."</td>";
                            echo "<td>".$row['status']."</td>";
                            echo "<td>".$row['bill']."</td>";
                            echo "<td>".$row['charges']."</td>";
                            echo "<td>
                    <a href='adminview_patients_discharged.php?id=".$row['id']."'><i class='fa fa-eye'></i></a>

                   
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






