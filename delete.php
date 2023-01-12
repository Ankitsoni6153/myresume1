<?php

include("dbcon.php");
error_reporting(0);

$s_no=$_GET['del'];
$query = "DELETE FROM  contact  WHERE s_no='$s_no'";
$data = mysqli_query($conn, $query);

if($data)
{
    echo"<script>alert('Record deleted');window.location='dashboard.php';</script>";
   
}
else{

    echo " failed to delete";
}
?>







