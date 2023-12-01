<?php
include ("ipconfig.php");
  
$category = isset($_GET['category']);
$search = isset($_GET['search']);
mysqli_select_db($conn, $dbname) or die('DB selection failed');

$userId = $_SESSION["id"];
echo "로그인한 사용자의 ID는: " . $userId;
      
if(empty($search)){
  $sql = "SELECT num_product, image_path, name_product, price, quantity From product;";
}
else{
  $category = $_GET['category'];
  $search = $_GET['search'];
  $sql = "SELECT num_product, image_path, name_product, price, quantity 
          From product WHERE $category 
          like '%$search%';";
}
$result = $conn->query($sql);
$conn->close();

?>


<html>
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="main.css">
      <link rel="stylesheet" href="productlist.css"> <!-- CSS 파일을 연결합니다 -->
      <title>WELCOME COUPANG SHOPPING MALL</title>
  </head>

  <!-- header-top: 상단 로그인, 회원가입 버튼 -->
  <header class="header-top">
      <div class="header-top-right">
        <ul>
          <li class="header-top-contact">
            <a href="login.php">Log In</a>
          </li>
          <li class="header-top-contact">
              <a href="register.php">Sign Up</a>
          </li>
        </ul>
      </div>
  </header>

  <!-- header-top: 로고 title -->
  <header>
    <h1>WELCOME COUPANG SHOPPING MALL</h1> 
  </header>
    
  <nav class="navbar">
        <ul class="navbar__menu">
          <li><a href="./main.php">Home</a></li>
          <li><a href="./cart.php" >장바구니</a></li>
          <li><a href="./order_list.php" >주문내역</a></li>
      </ul>
  </nav>
  <!-- main -->
  <body>
  <main>
  <div class="search_box">
      <form action="main.php" method="get">
          
          <select name="category">
            <option value="name_product">상품이름</option>
          </select>
          <input type="search" name="search" size="40" style ="width:30%; border:1px solid black;"/>
          <button>검색</button>
      </form>
</div>



    <selection class="selection-top">
    <div class="container">
        <?php 
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
          ?>
        
    </div>

    </selection>

    
    <selction style="color:black;">
          <h4>Young TEDx speaker and #1 Online JEE Educator | Founder of 5 YouTube Channels with 2.5 million young hustlers. </h4>
          <h5>I help students across India find their right career path. I have been a guest speaker at 22 Colleges including Top IITs, BITS Pilani, IIIT's, NIT's, SRCC, Jadavpur University etc. I am the #1 Educator of JEE on India's biggest online platform
              and I believe that everyone has the right to quality education and with the help of my social media platforms, I have helped millions of students find their path to success in the last 5 years. In the next few decades, India will rise
              as the leader of the world with the maximum young workforce, but for this, we need some good pilots who can take us through this. I help these young hustlers find their true potential so that they can fly us to victory.</h5>
      <footer>
        <a href="#">FAQ</a>
        <a href="#">Contact Us</a>
        <a href="#">Terms of Use</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Refund Policy</a>
        <a href="#">&copy; 2020 | Apni Kaksha</a>
      </footer>
    </selection>
      
    </main>
    <script type="text/javascript" src='javascript.js'></script>
  </body>
</html>

