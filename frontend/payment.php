<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style2.css">
   
    <link rel="stylesheet" href="./css/payment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Hello, world!</title>
</head>

<body>
    <div class="body">
        <!-- nav -->
        <?php include_once('./frontend-component/nav.php')?>
        <!-- nav end -->

        <!-- About Us -->
        <div class="payment-body">
            <?php 
                require_once ('../dbconn.php');
                $sql = "SELECT * FROM `carts`";
                $result = mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
            
        
            <div class="payment-product">
                <img src="<?=$row['image']?>" alt="">
                <h3>Product name:<?=$row['title']?></h3>
                <h4>Product Price:<?=$row['price']?></h4>
                <p>Product Quantity:<?=$row['quantity']?></p>
            </div>
            <?php } ?>
            <div class="payment-section">
            <h2>Payment Form</h2>
            <form action="" method="post">
            <h4>Account</h4>
            <div class="payment-input-group">
                <div class="payment-input-box">
                    <input type="text" placeholder="Full name" required class="name" name="full_name">
                    <i class="fa-solid fa-user icon"></i>
                </div>
                <!-- <div class="payment-input-box">
                    <input type="text" placeholder="Nick Name" required class="name" name="nick_name">
                    <i class="fa-solid fa-user icon"></i>
                </div> -->
            </div>

            <div class="payment-input-group">
                <div class="payment-input-box">
                    <input type="email" placeholder="Enter Email" required class="name" name="email">
                    <i class="fa-solid fa-envelope icon"></i>
                </div>
            </div>

            

            <div class="payment-input-group">
                <div class="payment-input-box">
                    <h4>Date of Birth</h4>
                    <input type="text" placeholder="DD" class="dob">
                    <input type="text" placeholder="MM" class="dob">
                    <input type="text" placeholder="YYYY" class="dob">
                </div>

                <div class="payment-input-box">
                    <h4>Gender</h4>
                    <input type="radio" id="b1" name="gender" checked class="radio">
                    <label for="b1">Male</label>
                    <input type="radio" id="b2" name="gender"  class="radio">
                    <label for="b2">Female</label>
                </div>
            </div>

                

                <div class="payment-input-group">
                    <div class="payment-input-box">
                        <h4>Payment Details</h4>
                        <input type="radio" name="pay" id="bc1" checked class="radio">
                        <label for="bc1"><span><i class="fa-brands fa-cc-visa"></i>Credit Card</span></label>
                        <input type="radio" name="pay" id="bc2" class="radio">
                        <label for="bc2"><span><i class="fa-brands fa-cc-paypal"></i>Paypal</span></label>
                    </div>
                </div>

                <div class="payment-input-group">
                    <div class="payment-input-box">
                        <input type="tel" placeholder="Card-Number" required class="name">
                        <i class="fa-solid fa-credit-card icon"></i>
                    </div>
                </div>

                <div class="payment-input-group">
                    <div class="payment-input-box">
                        <input type="tel" placeholder="Card CVC" required class="name" style="height: 100%;">
                        <i class="fa-solid fa-user icon"></i>
                    </div>
                    <div class="payment-input-box">
                        <input type="date" class="date">
                    </div>
                </div>
                <div class="payment-input-group">
                    <div class="payment-input-box">
                        <button type="submit">Pay Now</button>
                    </div>
                </div>
            
        </form>

            </div>
        
        
    </div>
        <!-- about end -->

        <!-- footer -->
  <?php include('./frontend-component/footer.php')?>
        <!-- footer end -->


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>