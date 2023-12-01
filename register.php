<?php
include ("ipconfig.php");
mysqli_select_db($conn, $dbname) or die('DB selection failed');



// 회원가입 폼에서 제출된 데이터를 받아옴
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $address = $_POST['address'];

    // 이후 데이터 유효성 검사, 비밀번호 해싱, 중복 아이디 체크 등 추가적인 처리가 필요합니다.
    // 예시: 간단한 회원가입 정보를 users 테이블에 삽입하는 쿼리
    $sql = "INSERT INTO user(id, pw, name, email, tel, address) VALUES ('$id', '$pw', '$name', '$email', '$tel', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "회원가입이 성공적으로 완료되었습니다.";
        
        // 회원가입 데이터 처리 등의 작업 수행
        // 회원가입이 성공적으로 이루어졌다고 가정하고 로그인 페이지로 리디렉션
        header("Location: login.php");
        exit();

    } else {
        echo "회원가입 과정에서 문제가 발생했습니다: " . $conn->error;
    }
}
?>



<html>
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="register.css"> <!-- CSS 파일을 연결합니다 -->
      <title>WELCOME COUPANG SHOPPING MALL</title>
  </head>


<body>
    <div class="login-wrapper">
        <h2>Login</h2>
        <form action="register.php" method="post" id="login-form">
            <input type="id" name="id" placeholder="id">
            <input type="password" name="password" placeholder="비밀번호">
            <input type="text" name="name" placeholder="이름">
            <input type="text" name="tel" placeholder="번호">
            <input type="email" name="email" placeholder="이메일">
            <input type="text" name="address" placeholder="주소">
            <input type="submit" value="SIGN UP">
        </form>
    </div>
</body>

</html>