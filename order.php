<?php

include ("ipconfig.php");
mysqli_select_db($conn, $dbname) or die('DB selection failed');
$user = 'user';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // POST로 전송된 데이터 수신
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $address = $_POST['address'];
    $comment = $_POST['comment'];
} else {
    // POST로 데이터가 전송되지 않은 경우에 대한 예외처리
    echo "No data received.";
}

$sql1 = "select num_product, quantity from cart where id = '$user'";
$result = $conn->query($sql1);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $sql = "INSERT INTO `order` (`id`, `num_product`, `quantity`, `address`, `comment`, `phone`, `name`) 
                VALUES ('$user', '" . $row['num_product'] . "', '" . $row['quantity'] . "', '$address', '$comment', '$phone', '$name')";
        $result1 = mysqli_query($conn, $sql);
        include "cart.php";
        if (!$result1) {
            echo $conn->error;
        }
    }
}else{
    echo "error";
}

$conn->close();
?>