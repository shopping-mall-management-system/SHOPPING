<?php

include ("ipconfig.php");

mysqli_select_db($conn, $dbname) or die('DB selection failed');

$sql = "SELECT name_product From product;";

$result = $conn->query($sql);


?>