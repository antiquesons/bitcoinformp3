<?php
session_start();
$_SESSION['userSes']=$userID;

$payAddress = "Your BTC Address";  //Replace with your Bitcoin address

/* Get the current market price from BTC-e */

function getPrice($url){
$decode = file_get_contents($url);
return json_decode($decode, true);
}

$btcUSD = getPrice('https://btc-e.com/api/2/btc_usd/ticker');
$btcPrice = $btcUSD["ticker"]["last"];

/* Convert the market price to 25 cents USD */

$convert = 0.25 / $btcPrice;
$paymentAmount = round($convert, 8);


?>

<html>
<head>
<title> Band Name - Make Payment </title>
</head>
<body>
<h1>Pay with Bitcoin</h1>
<br>
Please send <?php $paymentAmount; ?> to the address below:

<?php $payAddress; ?>
<br>
<p>Once you have sent the payment, wait a few second then click next</p>
<br>
<form action="check_payment.php">
    <input type="submit" value="Next">
</form>

</body>
</html>
