<html>
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="main.css"> <!-- CSS 파일을 연결합니다 -->
      <link rel="stylesheet" href="cart.css">
      <title>WELCOME COUPANG SHOPPING MALL</title>
  </head>

  <!-- header-top: 상단 로그인, 회원가입 버튼 -->
  <header class="header-top">
      <div class="header-top-right">
        <ul>
          <li class="header-top-contact">
            <a href="#">Log In</a>
          </li>
          <li class="header-top-contact">
              <a href="#">Sign Up</a>
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
    <selection class="selection-top">
      <div class="container">
          <?php include "product_cart.php"; ?>
          <div id="buy">
            
          </div>
      </div>

      <div class = "input_delivery" style = "heigth:100%;">
        <h2> 배송지 정보 입력 </h2>
          <form action="order.php" method="POST">
                <div class="form-group" >
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="text" id="phone" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" required>
                </div>

                <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea id="comment" name="comment"></textarea>
                </div>
                <div class ="form-group">
                    <button type='submit' onclick='purchase();'>주문하기</button>
                </div>  
              
                <!--
                <div class="form-group">
                    <button type="submit">Submit</button>
                </div>
              -->
            </form>
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
    <script type='text/javascript' src='javascript3.js'></script>
    <script type='text/javascript' src='javascript2.js'></script>
  </body>
</html>