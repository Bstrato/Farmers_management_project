<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "pedco";

//connection
$conn= mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
	echo "Success: Connection Established!" . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;	

}else{
	echo "Connection Failed";

}
?>