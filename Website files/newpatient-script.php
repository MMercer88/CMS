<?php

define ('DB_Name', 'Chiropractor');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');

  $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
  
  if (!$link){
  		die('couldnot connect: ' .mysqlerror());
}

$db_selected=mysql_select_db(DB_NAME, $link);

  if (!$link){
  		die('can\'t use ' .DB_NAME .': ' .mysqlerror());
}



$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$username = $_POST['username'];
$password = $_POST['password'];


$sql = "INSERT INTO Chiropractor.Patient (firstname, lastname, address, city, state, zip, username, password) VALUES  ('$firstname', '$lastname', '$address', '$city', '$state','$zip','$username','$password')";
if (!mysql_query($sql)){
	die('Error: ' . mysql_error());
}





header('Refresh:5; url=newpatient.php');
echo 'user entered successfully';


mysql_close();
?>