<?php

include ("ipconfig.php");

mysqli_select_db($conn, $dbname) or die('DB selection failed');

$sql = "SELECT num_product, image_path, name_product, price, quantity From product;";

$result = $conn->query($sql);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		echo 
        "<div class='product-container'>
            <div class='product-card'>
                <img src='", $row["image_path"], "' alt='상품 이미지'>
                <h3>", $row["name_product"],"</h3>
                <p>가격: ", $row["price"], "원</p>
                <p>재고량: ", $row["quantity"], "개</p>
                <button type='button' onclick='addToCart(\"",$row["num_product"],"\");'>장바구니 추가</button>
            </div>
        </div>";
	}
}else{
	echo "0 Results";
}

$conn->close();
?>