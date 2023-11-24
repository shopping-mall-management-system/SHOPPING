<?php

include ("ipconfig.php");

mysqli_select_db($conn, $dbname) or die('DB selection failed');

$sql = "
SELECT P.num_product, P.image_path, P.name_product, P.price, P.quantity
From cart C JOIN product P
on C.num_product = P.num_product;";

$result = $conn->query($sql);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		echo 
        "<div class='cart-container'>
            <div class='cart-card'>
                <img src='", $row["image_path"], "' alt='상품 이미지'>
                <div>
                    <h3>", $row["name_product"],"</h3>
                    <p>가격: ", $row["price"], "</p>
                </div>
                <div>
                    <p>Input Quantity</p>
                    <input type='number' class='p_c' id='p", $row["num_product"],"' value='1' min='1' max='", $row["quantity"], "'>
                </div>
                <button type='button' onclick='deleteinCart(\"", $row["num_product"], "\");'>삭제</button>
            </div>
        </div>";
	}
}else{
	echo "장바구니에 담긴 상품이 없습니다.";
}

$conn->close();
?>