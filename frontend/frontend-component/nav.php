  <!-- nav -->
  <div class="header">
      <div class="logo-section">
        <a href="./index.php"><img src="../backend/image/londrylogo.png" alt=""  class="header-logo"></a>
        <h3>Smart Home service</h3>
    </div>
    
    <div class="header-nav">
        <ul class="menu-item">
          <li><a href="./index.php">Home</a></li>
          <li><a href="./about.php">About Us</a></li>
          <li><a href="./contact.php">Contact Us</a></li>
          <li><a href="./faq.php">FAQs</a></li>
          <li><a href="./login.php">Login</a></li>
          <li><a href="./shop.php">Shop</a></li>
          <!-- search -->
          <div class="serch">
    
            <form action="search.php" method="get">
              <input type="text" name="search" id="search" placeholder="Search">
              <button type="submit" name="submit-search"><i class="fa-solid fa-search"></i></button>
            </form>
          </div>
          <div>
            <?php 
              include_once "../dbconn.php";
              $sql = "SELECT * FROM carts";
              $result = mysqli_query($conn, $sql);
              $count = mysqli_num_rows($result);

            ?>
          <li><a href="./cart.php"><i class="fa-solid fa-cart-shopping"></i><span><sup><?=$count?></sup></span></a></li>
          
          </div>
          <li><a href="../backend/logout.php"><i class="fa-solid fa-power-off"></i></a></li>
          
          
        </ul>
    </div>
 
  </div>
  <!-- nav end -->