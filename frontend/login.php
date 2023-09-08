<?php
require_once("../dbconn.php");
if(isset($_POST["login"])){
    $email=$_POST["email"];
    $password=$_POST["password"];
    $sql="SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        session_start();
        $_SESSION["id"]=$row["id"];
        $_SESSION["name"]=$row["name"];
        $_SESSION["email"]=$row["email"];
        $_SESSION["phone"]=$row["phone"];
        $_SESSION["address"]=$row["address"];
        $_SESSION["password"]=$row["password"];
        header("Location:../admin.php");
    }
    else{
        echo "<script>alert('Login Failed')</script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="../frontend/css/style2.css">
</head>

<body>




    <!-- nav -->
    <?php include_once('./frontend-component/nav.php')?>
    <!-- nav end -->
    <!-- login -->

    <section>
        <div class="login-box">
        
            <form action="login.php" method="post">
                <h1>Login Here</h1>

                <div class="input-box">
                    <i class="fa-regular fa-envelope"></i>
                    <input type="email" placeholder="Enter your email.." name="email" />
                </div>
                <div class="input-box">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Enter your password.." name="password" />
                </div>
                <div class="forget">
                    <label for=""><input type="checkbox">Remember me <a href="">Forget Password</a></label>

                </div>
                <div class="form-btn">
                    <input type="submit" value="Login" name="login" class="btn btn-primary" style="width: 100%;">
                </div>
                <div class="register">
                    <p>Don't have a account <a href="./registration.php">Register Here</a></p>
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