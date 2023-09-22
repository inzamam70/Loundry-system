  <!-- nav -->
  <div class="menu-ber fixed-top">
    <a href="./index.php"><img src="../backend/image/londrylogo.png" alt=""></a>

    <ul class="menu-item">
      <li><a href="./index.php">Home</a></li>
      <li><a href="./about.php">About Us</a></li>
      <li><a href="#service">Services</a></li>
      <li><a href="./price.php">Prices</a></li>
      <li><a href="./contact.php">Contact Us</a></li>
      <li><a href="./faq.php">FAQs</a></li>
      <li><a href="./login.php">Login</a></li>
      <li><a href="./shop.php">Shop</a></li>
      <div>
        <?php 
          include_once "../dbconn.php";
          $sql = "SELECT * FROM carts";
          $result = mysqli_query($conn, $sql);
          $count = mysqli_num_rows($result);

        ?>
      <li><a href="./cart.php"><i class="fa-solid fa-cart-shopping"></i><span><sup><?=$count?></sup></span></a></li>
      </div>
      
      
    </ul>
  </div>
  <!-- nav end -->