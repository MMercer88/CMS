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
$date = $_POST['date'];
$stime = $_POST['stime'];
$etime = $_POST['etime'];



$sql = "INSERT INTO Chiropractor.Schedule (firstname, lastname, date, stime, etime) VALUES  ('$firstname', '$lastname', '$date', '$stime','$etime')";
if (!mysql_query($sql)){
	die('Error: ' . mysql_error());
}





header('Refresh:5; url=appointment.php');
echo 'appointment set!';


mysql_close();
?>