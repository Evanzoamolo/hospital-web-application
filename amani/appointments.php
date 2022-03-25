<?php
include "header.php";
include "connect.php";

?>
<div class="col-sm-9 col-lg-9 bg-white">
    <div class="row mb-2">
        <div class="card">
            <div class="card-header bg-white">Appoitments</div>
            <div class="card-body">
                <?php
                $sql = "SELECT * FROM `appointment`";
                $result = mysqli_query($link,$sql);

                if($result){
                    $data = mysqli_num_rows($result);

                    if($data>0){
                        echo "<table class='table table-striped table-bordered'>";
                        echo "<tr>";
                        echo "<th>#</th>";
                        echo "<th>Full Name</th>";
                        echo "<th>Address</th>";
                        echo "<th>Phone Number:</th>";
                        echo "<th>Message</th>";
                        echo "<th>Actions</th>";
                        echo "</tr>";

                        while ($row = mysqli_fetch_array($result)){
                            echo "<tr>";
                            echo "<td>".$row['id']."</td>";
                            echo "<td>".$row['fullname']."</td>";
                            echo "<td>".$row['emailaddress']."</td>";
                            echo "<td>".$row['phonenumber']."</td>";
                            echo "<td>".$row['message']."</td>";
                            echo "<td>
                    <a href='appointmentsview.php?id=".$row['id']."'><i class='fa fa-eye'></i></a>

                 
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






