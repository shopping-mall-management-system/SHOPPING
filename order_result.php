<?php

include ("ipconfig.php");
mysqli_select_db($conn, $dbname) or die('DB selection failed');


$sql1 = "select distinct id, num_product, quantity, address, comment, phone, name from order where id = '$user'";
$result = $conn->query($sql1);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        //원하는 모양대로 출력
    }
}else{
    echo "error";
}

$conn->close();
?>