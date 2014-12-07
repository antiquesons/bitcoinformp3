<?php
session_start();
$userID = uniqid();
$_SESSION['userSes']=$UserID;

$rrr=mysqli_connect("localhost","username","password","database_name");
if (mysqli_connect_errno()) {
 echo "Connection to DB failed" . mysqli_connect_error();
}

$sql="INSERT INTO userTable (userID)
VALUES ('$userID')";

if (!mysqli_query($rrr,$sql)) {
  die ('Error: ' . mysqli_error($rrr));
}
header("Location: payment.php");


?>
