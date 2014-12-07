<?php
session_start();
$_SESSION['userSes']=$userID;

/* Check the bitcoin payment address for payment */

IDK need help here!

/* Direct user based on payment check  */
/* Payment received */
if ($paymentReceived = true){
  //connect to the server
	$connect = mysql_connect("localhost","username","password");

	//connect to DB
	mysql_select_db("database_name");

	//query the DB update the payment record
	$paymentYes ="UPDATE userTable SET paid = yes WHERE userid = '".$_SESSION['userSes']."'";
	$resultYes = mysql_query($paymentYes);
	header ('Location: paymentReceived.php');
}

/* Payment not Received */
if ($paymentReceived = false){
  //connect to the server
	$connect = mysql_connect("localhost","username","password");

	//connect to DB
	mysql_select_db("database_name");

	//query the DB update the payment record
	$paymentNo ="UPDATE userTable SET paid = no WHERE userid = '".$_SESSION['userSes']."'";
	$resultNo = mysql_query($paymentNo);
	header ('Location: paymentNotReceived.php');
}

?>
