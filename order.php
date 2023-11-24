<?php

include ("ipconfig.php");
mysqli_select_db($conn, $dbname) or die('DB selection failed');
$user = 'user';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // POST로 전송된 데이터 수신
    $name = $_POST["name"];
    $phonenumber = $_POST["email"];

    // 수신된 데이터 사용 또는 처리
    echo "Name: $name<br>";
    echo "Email: $email";
} else {
    // POST로 데이터가 전송되지 않은 경우에 대한 예외처리
    echo "No data received.";
}





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