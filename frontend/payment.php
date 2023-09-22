<?php
include_once "../dbconn.php";
if (isset($_POST['submit'])) {
    $product_name = $_POST['product_name'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];
    $product_price = $_POST['product_price'];
    $product_subtotal = $_POST['product_subtotal'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $pay = $_POST['pay'];
    $card_num = $_POST['card_num'];
    $card_cvc = $_POST['card_cvc'];
    $transection_date = $_POST['transection_date'];
    $sql = "INSERT INTO checkouts (product_name,product_image,product_quantity,product_price,product_subtotal,
    full_name,email,dob,gender,pay,card_num,card_cvc,transection_date) VALUES ('$product_name','$product_image','$product_quantity','$product_price','$product_subtotal',
    '$full_name','$email','$dob','$gender','$pay','$card_num','$card_cvc','$transection_date')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('Payment Successfully')</script>";
        echo "<script>window.location.href = './index.php'</script>";
    }else{
        echo "<script>alert('Payment Failed')</script>";
        echo "<script>window.location.href = './payment.php'</script>";
    }


}


?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style2.css">
    <link rel="stylesheet" href="./css/cart.css">
    <link rel="stylesheet" href="./css/payment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Hello, world!</title>
</head>

<body>
    <div class="body">
        <!-- nav -->
        <?php include_once('./frontend-component/nav.php') ?>
        <!-- nav end -->

        <!-- About Us -->
        <div class="payment-body">
            <div class="payment-product">
                <h2>Product Details</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Product Name</th>
                            <th>Image</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <?php

                    $sql = "SELECT * FROM carts";
                    $result = mysqli_query($conn, $sql);
                    $sl = 1;
                    $grand_total = 0;
                    while ($row = mysqli_fetch_assoc($result)) {

                        ?>
                        <form action="" method="post">
                            <tbody>
                                <tr>
                                    <td>
                                        <?php echo $sl++ ?>
                                    </td>
                                    <td>
                                        <?php echo $row['title'] ?>
                                    </td>
                                    <td><img src="<?php echo $row['image'] ?>" alt="" style="height: 100px; width: 100px;">
                                    </td>
                                    <td>
                                        <?php echo $row['quantity'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['price'] ?>/-
                                    </td>
                                    <td>
                                        <?php echo $subtotal = number_format($row['price'] * $row['quantity']) ?>/-
                                    </td>

                                    <input type="hidden" name="product_name" value="<?= $row['title'] ?>">
                                    <input type="hidden" name="product_image" value="<?= $row['image'] ?>">
                                    <input type="hidden" name="product_quantity" value="<?= $row['quantity'] ?>">
                                    <input type="hidden" name="product_price" value="<?= $row['price'] ?>">
                                    <input type="hidden" name="product_subtotal" value="<?= $subtotal ?>">
                                </tr>

                            </tbody>
                            <?php
                            $grand_total = $grand_total + ($row['price'] * $row['quantity']);
                    } ?>
                </table>
                <div class="total">
                    <h3>Grand Total:
                        <?php echo number_format($grand_total) ?>/-
                    </h3>
                </div>
            </div>

            <div class="payment-section">
                <h2>Payment Form</h2>

                <h4>Account</h4>
                <div class="payment-input-group">
                    <div class="payment-input-box">
                        <input type="text" placeholder="Full name" required class="name" name="full_name">
                        <i class="fa-solid fa-user icon"></i>
                    </div>
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
                        <input type="date" class="date" name="dob">
                    </div>

                    <div class="payment-input-box">
                        <h4>Gender</h4>
                        <input type="radio" id="b1" name="gender" checked class="radio">
                        <label for="b1">Male</label>
                        <input type="radio" id="b2" name="gender" class="radio">
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
                        <input type="tel" placeholder="Card-Number" required class="name" name="card_num">
                        <i class="fa-solid fa-credit-card icon"></i>
                    </div>
                </div>

                <div class="payment-input-group">
                    <div class="payment-input-box">
                        <input type="tel" placeholder="Card CVC" required class="name" style="height: 100%;"
                            name="card_cvc">
                        <i class="fa-solid fa-user icon"></i>
                    </div>
                    <div class="payment-input-box">
                        <input type="date" class="date" name="transection_date">
                    </div>
                </div>
                <div class="payment-input-group">
                    <div class="payment-input-box">
                        <button type="submit" name="submit">Pay Now</button>
                    </div>
                </div>

                </form>

            </div>


        </div>
        <!-- about end -->

        <!-- footer -->
        <?php include('./frontend-component/footer.php') ?>
        <!-- footer end -->


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>