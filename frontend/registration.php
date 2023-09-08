<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/style2.css">
    <link rel="stylesheet" href="./css/register.css">
</head>

<body>




    <!-- nav -->
    <?php include_once('./frontend-component/nav.php')?>
    <!-- nav end -->
    <!-- login -->

    <section class="register-section">
  <?php
  require_once("../dbconn.php");
  if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];
    $password=$_POST["password"];
    $retype_password=$_POST["retype_password"];
    if($password==$retype_password){
        $sql="INSERT INTO `users`(`name`, `email`, `phone`, `address`, `password`) VALUES ('$name','$email','$phone','$address','$password')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "<script>alert('Registration Successfull')</script>";
        }
        else{
            echo "<script>alert('Registration Failed')</script>";
        }
    }
    else{
        echo "<script>alert('Password Not Matched')</script>";
    }
  }
  
  
  ?>
        
        
        <div class="register-box">
            <form action="registration.php" method="post">
                <h1>Register Here</h1>
                <div class="input-box">
                <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Enter your name.." name="name" />
                </div>
                <div class="input-box">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" placeholder="Enter your email.." name="email" />
                </div>
                <div class="input-box">
                <i class="fa-solid fa-phone"></i>
                    <input type="number" placeholder="Enter your phone no.." name="phone" />
                </div>
                <div class="input-box">
                <i class="fa-solid fa-house"></i>
                    <input type="text" placeholder="Enter your address.." name="address" />
                </div>
                <div class="input-box">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Enter your password.." name="password" />
                </div>
                <div class="input-box">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="retype your password.." name="retype_password" />
                </div>
                <div class="form-btn">
                    <input type="submit" class="btn btn-primary" value="Register" name="submit" style="width:100%;">
                </div>
                <!-- <button type="submit">Registration</button> -->
                <div class="register">
                    <p>Already have a account <a href="./login.php">Login Here</a></p>
                </div>




            </form>


        </div>


    </section>

    <!-- login end -->

    <!-- footer -->
    <?php include('./frontend-component/footer.php')?>
    <!-- footer end -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</body>

</html>