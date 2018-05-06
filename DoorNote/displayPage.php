<?php

$servername = "localhost";
$username = "root";
$password = "root";

$conn = new mysqli($servername, $username, $password);

mysqli_select_db($conn, "DoorMsg");

if(!$conn)
	echo"error";
//else
//echo"Got Connected";




$usr = mysqli_query($conn, "select message from Messages order by id DESC LIMIT 1");

while($result = mysqli_fetch_array($usr,MYSQLI_ASSOC)){
	
	echo"Date : " . date("Y/m/d") ;
	echo"              Message : " . $result['message'];
	

}



?>