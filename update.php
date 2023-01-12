<?php

include("dbcon.php");
error_reporting(0);

$$editid = $_GET['eid'];
 
if(!isset($_GET['eid']) || empty($_GET['eid']))
{
    header("location:dashboard.php");
}

$selectq = mysqli_query($connection, "select  * from contact where s_no='{$editid}'") or die(mysqli_error($connection));
$selectrow = mysqli_fetch_array($selectq);
print_r($selectrow);

$msg = "";
if($_POST)
{
    $s_no = $_POST['s_no'];
    $name = mysqli_real_escape_string($connection,$_POST['name']);
    $email_id = mysqli_real_escape_string($connection,$_POST['email_id']);
    $mobile = mysqli_real_escape_string($connection,$_POST['mobile']);
    $message = mysqli_real_escape_string($connection,$_POST['message']);
   


$query = mysqli_query($connection, "update tbl_product set name ='{$name}',email_id='{$email_id}',mobile='{$mobile}' ,message='{$message}' where s_no='{$s_no}'") or die(mysqli_error($connection));

if($query)
{
    echo "<script>alert('Record Updated');window.location='dashboard.php';</script>";
}

}
?>







