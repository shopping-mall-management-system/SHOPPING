<?php

include ("ipconfig.php");
mysqli_select_db($conn, $dbname) or die('DB selection failed');
session_start();
$user = $_SESSION["id"];

$data = json_decode(file_get_contents("php://input"), true);

$array1 = $data['array1'];
$array2 = $data['array2'];

for ($i = 0; $i < count($array1); $i++){
    $id = $array1[$i];
    $value = $array2[$i];
    $sql = "UPDATE cart SET quantity = $value WHERE num_product = $id;";

    $result = $conn->query($sql);

    if (!$result) {
        echo $conn->error;
    }
}

$conn->close();
?>