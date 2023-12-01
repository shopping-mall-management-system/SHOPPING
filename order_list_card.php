<?php

include ("ipconfig.php");

mysqli_select_db($conn, $dbname) or die('DB selection failed');
session_start();
$user = $_SESSION["id"];

$sql = "
SELECT P.num_product, P.image_path, P.name_product, P.price, O.quantity
From order O JOIN product P
on O.num_product = P.num_product
WHERE O.id = '$user';
";


$result = $conn->query($sql);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		echo 
        "<div class='order-container'>
            <div class='order_card'>
                <img src='", $row["image_path"], "' alt='상품 이미지'>
                <div>
                    <h3>", $row["name_product"],"</h3>
                    <p>가격: ", $row["price"], "</p>
                </div>
                <div>
                    <p>주문개수</p>
                    <p> ", $row["quantity"], "</p>
                </div>";
	}
}else{
	echo "주문한 상품이 없습니다.";
}

$conn->close();
?>