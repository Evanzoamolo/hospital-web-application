<?php
include "header.php";
include "connect.php";


if (isset($_POST["submit"])){
    $id = $_POST["id"];
    $sql = "DELETE FROM `staff` WHERE id= $id";
    $result = mysqli_query($link,$sql);

    if ($result){
        echo "Record was deleted";
        header(header:"location:admindashboard.php");
    }else{
        echo "Error executing query $sql".mysqli_error($link);
    }
}
?>

<div class="col-sm-9 col-lg-9 bg-white">
    <div class="text-center"><h3>Delete Record</h3></div>
    <div class="row m-2">
    <div class="alert alert-danger">
        <form action="deletestaff.php" method="POST">
            <div class="p-2 text-center">
                <label> Are you sure you want to delete this record? </label>
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            </div>

            <div class="p-2 text-center">
                <input type="submit" name="submit" value="YES" class="btn btn-danger col-md-4">
                <a href="admindashboard.php" class="btn btn-primary col-md-3">NO</a>
            </div>


        </form>

    </div>

    </div>
</div>