<?php

include ("ipconfig.php");

mysqli_select_db($conn, $dbname) or die('DB selection failed');

$sql = "
SELECT P.num_product, P.image_path, P.name_product, P.price
From cart C JOIN product P
on C.num_product = P.num_product;";

$result = $conn->query($sql);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		echo 
        "<div class='product-container'>
            <div class='product-card'>
                <img src='", $row["image_path"], "' alt='Product Image'>
                <h3>", $row["name_product"],"</h3>
                <p>Price: ", $row["price"], "</p>
                <label for='p", $row["num_product"],"'> Input Quantity: </label>
                <input type='number' id='p", $row["num_product"],"'>
            </div>
        </div>";
	}
}else{
	echo "0 Results";
}

$conn->close();
?>