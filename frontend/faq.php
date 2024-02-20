<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style2.css">
    <link rel="stylesheet" href="./css/faq.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Smart Home Service</title>
</head>

<body>
    <div class="body">
        <!-- nav -->
        <?php include_once('./frontend-component/nav.php')?>
        <!-- nav end -->

      <!-- faq -->
      <div class="faq-body">
        <div class="faq-container">
            <h1>Frequently Asked Questions</h1>
            <div class="faq-divider"></div>
            <div class="faq-tab">
                <input type="radio" name="acc" id="acc1">
                <label for="acc1">
                    <h2>01</h2>
                    <h3>How do I order?</h3>
                </label>
                <div class="faq-content">
                    <p>1.Visit Our Website or App
                        <br>
                        2.Sign In or Create an Account
                        <br>
                        3.Browse Services
                        <br>
                        4.Select Your Service
                        <br>
                        5.Choose Date and Time
                        <br>
                        6.Provide Location Details
                        <br>
                        7.Review Order Summary
                        <br>
                        8.Add Special Instructions (if any)
                        <br>
                        9.Proceed to Checkout
                        <br>
                        10.Choose Payment Method
                        <br>
                        11.Confirm and Place Order
                        <br>
                        12.Receive Order Confirmation
                    </p>
                </div>
            </div>

            <div class="faq-tab">
                <input type="radio" name="acc" id="acc2">
                <label for="acc2">
                    <h2>02</h2>
                    <h3>Lost or forgotten your password?</h3>
                </label>
                <div class="faq-content">
                    <p>
                        1.Visit the Login Page
                        <br>
                        2.Click on the Forgot Password link
                        <br>
                        3.Enter your registered email address
                        <br>
                        4.Click on the Send Reset Link button
                        <br>
                        5.Check your email inbox for the password reset link
                        <br>
                        6.Click on the link and follow the instructions to reset your password

                    </p>
                </div>
            </div>

            <div class="faq-tab">
                <input type="radio" name="acc" id="acc3">
                <label for="acc3">
                    <h2>03</h2>
                    <h3>How can I make a change to my  applications?</h3>
                </label>
                <div class="faq-content">
                    <p>
                        1.Log In
                        <br>
                        2.Locate Your order
                        <br>
                        3.Click on the Change button
                        <br>
                        4.Make the desired changes
                        <br>
                        5.Click on the Update button
                        
                    </p>
                </div>
            </div>

            <div class="faq-tab">
                <input type="radio" name="acc" id="acc4">
                <label for="acc4">
                    <h2>04</h2>
                    <h3>How can I update my name?</h3>
                </label>
                <div class="faq-content">
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>

        </div>
      </div>
      <!-- faq end -->

        <!-- footer -->
        <?php include('./frontend-component/footer.php')?>
        <!-- footer end -->


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>