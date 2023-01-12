<!DOCTYPE html>
<html>
<body>
<?php
$conn = mysqli_connect("localhost", "root", "", "resume");
if($conn === false)
{
echo "ERROR: Could not connect.";
}
$s_no = $_REQUEST['s_no'];
$name = $_REQUEST['name'];

$email_id = $_REQUEST['email_id'];
$mobile = $_REQUEST['mobile'];

$message = $_REQUEST['message'];
$sql = "INSERT INTO contact VALUES ('$s_no','$name','$email_id','$mobile','$message')";
if(mysqli_query($conn, $sql))
{
header("Location: contact.html");
echo" data has been inserted!";

}
else
{
echo "ERROR ";
}
mysqli_close($conn);
?>
</body>
</html>