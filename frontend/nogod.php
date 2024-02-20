



<?php 
session_start();
include_once('../dbconn.php');
if (!isset($_SESSION['user_name'])) {
    header('location:login.php');
}
?>

<?php
include_once "../dbconn.php";
if (isset($_POST['submit'])) {
    $grand_total = $_POST['grand_total'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $card_num = $_POST['card_num'];
    $card_cvc = $_POST['card_cvc'];
    $transection_date = $_POST['transection_date'];
     $sql ="INSERT INTO checkouts(grand_total,full_name,email,dob,gender,card_num,card_cvc,transection_date) 
        VALUES('$grand_total','$full_name','$email','$dob','$gender','$card_num','$card_cvc','$transection_date')";
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
        <title>Smart Home Service</title>
</head>

<body>
    <div class="body">
        <!-- nav -->
        <?php include_once('./frontend-component/nav.php') ?>
        <!-- nav end -->

        <!-- About Us -->
        <div class="payment-body">
        <?php

$sql = "SELECT * FROM carts";
$result = mysqli_query($conn, $sql);
$sl = 1;
$grand_total = 0;
while ($row = mysqli_fetch_assoc($result)) {

    ?>
                <?php
                            $grand_total = $grand_total + ($row['price'] * $row['quantity']);
                    } ?>
    <form action="" method="POST">
            <div class="payment-section">
                <img src="./css/nogod.png" alt="" style="display:flex;justify-content:center;align-item:center;padding:20px;margin-left:45px;">

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
                        <input type="radio" id="b1" name="gender" checked class="radio" >
                        <label for="b1">Male</label>
                        <input type="radio" id="b2" name="gender" class="radio">
                        <label for="b2">Female</label>
                    </div>
                </div>



                <!-- <div class="payment-input-group">
                    <div class="payment-input-box">
                        <h4>Payment Details</h4>
                        <div class="payments-system">
                        <a href="credit.php" class="payment-button" style="background:#FFFF00;"><span><i class="fa-brands fa-cc-visa"></i>Credit Card</span></a>
                        <a href="" class="payment-button" style="background:#ddd;"><span><i class="fa-solid fa-hand-holding-dollar"></i>Cash On</span></a>
                        <a href="" class="payment-button" style="background:#FF007F;"><span><i class="fa-solid fa-paper-plane"></i>Bkash</span></a>
                        <a href="" class="payment-button" style="background:#FF4500;"><span><i class="fa-solid fa-sack-dollar"></i>Nogod</span></a>
                        </div>
                        
                    </div>
                </div> -->

                <div class="payment-input-group">
                    <div class="payment-input-box">
                        <input type="tel" placeholder="Enter Your Nogod Number" required class="name" name="card_num">
                        <i class="fa-solid fa-credit-card icon"></i>
                    </div>
                </div>

                <div class="payment-input-group">
                    <div class="payment-input-box">
                        <input type="tel" placeholder="Enter Pin Code " required class="name" style="height: 100%;"
                            name="card_cvc">
                        <i class="fa-solid fa-user icon"></i>
                    </div>
                    <div class="payment-input-box">
                        <input type="date" class="date" name="transection_date">
                    </div>
                </div> 
                 <input type="hidden" name="grand_total" value="<?= $grand_total?>">
                <div class="payment-input-group">
                    <div class="payment-input-box">
                        <button type="submit" name="submit" style="background:#FF4500;">Pay Now</button>
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