<?php
$servername = "localhost:3306";//172.30.70.17
$username = "root";
$password = "root";
$dbname = "shopping";//????����??? ?????? ?????��

// Create connection_aborted
$conn = new mysqli($servername, $username, $password, $dbname);


if($conn->connect_error){
	die("Connection failed: "+$conn->connect_error);
}else{

}

?>