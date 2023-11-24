<?php

include ("ipconfig.php");
mysqli_select_db($conn, $dbname) or die('DB selection failed');
$user = 'user';

$selectValue = isset($_POST['selected']) ? $_POST['selected']: '';


$sq1 = "INSERT INTO cart(id, num_product) values ('$user', '$selectValue');";
$result = mysqli_query($conn, $sq1);

if (!$result) {
    printf("에러: %s\n", mysqli_error($conn));
    echo $conn->error;
}


$conn->close();
?>