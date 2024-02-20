<?php
include_once "../dbconn.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $massage = $_POST['massage'];

    $sql = "INSERT INTO contacts(name,email,massage) VALUES('$name','$email','$massage')";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Contact Inserted Successfully')</script>";
    }else{
        echo "<script>alert('Contact Inserted Failed')</script>";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style2.css">
    <link rel="stylesheet" href="./css/about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Smart Home Service</title>
</head>

<body>
    <div class="body">
        <!-- nav -->
        <?php include_once('./frontend-component/nav.php')?>
        <!-- nav end -->

<!-- contact us -->
<section class="contact">
    <div class="contact-content">
        <h2>Contact Us</h2>
        <div class="contact-divider"></div>
        <p>This is our contact us page. By this page customers can easily contact with us for any kinds of problems about services or products immidiately.</p>

    </div>
    <div class="contact-container">
        <div class="contactinfo">
            <div class="box">
                <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                <div class="text">
                    <h2>Address</h2>
                    <p>120/16 Notun bazer,Badda,Dhaka</p>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                <div class="text">
                    <h2>Email</h2>
                    <p>lova@gmail.com</p>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa-solid fa-phone"></i></div>
                <div class="text">
                    <h2>Phone No</h2>
                    <p>01865016322</p>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="contactFrom">
            <form action="contact.php" method="post" enctype="multipart/form-data">
                <h2>Send Message</h2>
                <div class="inputBox">
                    <input type="text" name="name" required="required">
                    <span>Full Name</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="email" required="required">
                    <span>Email</span>
                </div>
                <div class="inputBox">
                    <textarea name="massage" id=""  required="required"></textarea>
                    <span>Type your Message...</span>
                </div>
                <div class="inputBox">
                <input type="submit" class="btn btn-warning" value="Submit" name="submit" style="width:100%;">
                    
                </div>
            </form>
        </div>
    </div>
   </section>
<!-- contact us end -->

        <!-- footer -->
        <?php include('./frontend-component/footer.php')?>
        <!-- footer end -->


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>