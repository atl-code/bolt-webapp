<?php

include 'config.php';

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$address = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$country = $_POST["country"];
$pin = $_POST["pin"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];

if($mysqli->query("INSERT INTO users (fname, lname, address, city, state, country, pin, email, password) VALUES('$fname', '$lname', '$address', '$city', '$state', '$country', $pin, '$email', '$pwd')")){
	echo 'Data inserted';
	echo '<br/>';
}


header ("location:login.php");

?>
