<?php
include ("ipconfig.php");
mysqli_select_db($conn, $dbname) or die('DB selection failed');

$user = 'user';
$selectValue = isset($_POST['selected']) ? $_POST['selected']: '';

$sql = "select id, num_product from cart where id = '$user' and num_product = '$selectValue'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "success";
    $sq1 = "DELETE FROM cart WHERE id ='$user' and num_product = '$selectValue'";
    $result = mysqli_query($conn, $sq1);
    
    if (!$result) {
        echo $conn->error;
    }

}else{
    echo "error";
}

$conn->close();
?>