<?php

include ("ipconfig.php");
mysqli_select_db($conn, $dbname) or die('DB selection failed');
session_start();
$user = $_SESSION["id"];

$selectValue = isset($_POST['selected']) ? $_POST['selected']: '';

$sql = "select id, num_product from cart where id = '$user' and num_product = '$selectValue'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "error";
}else{
    echo "success";
    $sq1 = "INSERT INTO cart(id, num_product) values ('$user', '$selectValue');";
    $result = mysqli_query($conn, $sq1);
    
    if (!$result) {
        echo $conn->error;
    }
}

$conn->close();
?>