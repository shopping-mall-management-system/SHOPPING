<?php

include ("ipconfig.php");
$user = 'user';

mysqli_select_db($conn, $dbname) or die('DB selection failed');

$selectValue = isset($_POST['selected']) ? $_POST['selected']: '';


$sq1 = "INSERT INTO cart(id, num_product) values ('$user','$selectValue');";
if($conn->query($sql) === TRUE){

}else{
    echo $conn->error;
}



$conn->close();
?>