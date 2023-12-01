<?php
include ("ipconfig.php");
mysqli_select_db($conn, $dbname) or die('DB selection failed');



if($_SERVER["REQUEST_METHOD"] == "POST"){
    $userid = $_POST["id"];
    $password = $_POST["password"];
    $sql = "SELECT id 
            FROM user 
            WHERE id ='$userid' AND pw = '$password';";

    $result = $conn->query($sql);

    if($result->num_rows >0){
        session_start();
        $_SESSION["id"] = $userid;
        header("location: main.php");
    }else{
        $error = "아이디 또는 비밀번호가 잘못되었습니다.";
    }
}
?>



<html>
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="login.css"> <!-- CSS 파일을 연결합니다 -->
      <title>WELCOME COUPANG SHOPPING MALL</title>
  </head>


<body>
    <div class="login-wrapper">
        <h2>Login</h2>
        <form action="login.php" method="post" id="login-form">
            <input type="text" name="id" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <label for="remember-check">
                <input type="checkbox" id="remember-check">아이디 저장하기
            </label>
            <input type="submit" value="Login">
        </form>
        <button href='register.php'>Register</button>
    </div>
</body>

</html>