<?php

include ("ipconfig.php");

mysqli_select_db($conn, $dbname) or die('DB selection failed');

$sql = "SELECT image_path, name_product, price, quantity From product;";

$result = $conn->query($sql);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		echo 
        "<div class='product-container'>
            <div class='product-card'>
                <img src='", $row["image_path"], "' alt='��ǰ �̹���'>
                <h3>", $row["name_product"],"</h3>
                <p>����: ", $row["price"], "</p>
                <p>���: ", $row["quantity"], "</p>
                <button type='button' onclick='addToCart();'>��ٱ��Ͽ� �߰�</button>
            </div>
        </div>";
	}
}else{
	echo "0 Results";
}

$conn->close();
?>