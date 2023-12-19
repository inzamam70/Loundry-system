<?php
include_once '../dbconn.php';
if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    $select = " SELECT * FROM users WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {

        $error[] = 'user already exist!';
    } else {

        if ($pass != $cpass) {
            $error[] = 'password not matched!';
        } else {
            $insert = "INSERT INTO users(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
            mysqli_query($conn, $insert);
            header('location: ./login.php');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Home Service</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/style2.css">
    <link rel="stylesheet" href="./css/register.css">
</head>

<body>




    <!-- nav -->
    <?php include_once('./frontend-component/nav.php') ?>
    <!-- nav end -->
    <!-- login -->
    <div class="log-body">

        <form action="" class="form" method="post">

            <span></span>

            <span></span>

            <span></span>

            <span></span>

            <div class="form-inner">

                <h2>Registration</h2>

                <div class="content">

                    <input class="input" type="text" name="name" placeholder="Username" />

                    <input class="input" type="email" name="email" placeholder="Email" />

                    <input class="input" type="password" name="password" placeholder="Password" />

                    <input class="input" type="password" name="cpassword" placeholder="Confirm Password" />

                    <select name="user_type" class="input">
                        <option value="user">user</option>
                        <option value="admin">admin</option>
                    </select>
                    <button type="submit" name="submit" class="btn">Sign Up</button>
                    <div class="login-register">
                                <p>Already have an account? <a href="./login.php" class="login-link">Sign in</a></p>
                    </div>
                </div>

            </div>

        </form>
    </div>


    <!-- login end -->

    <!-- footer -->
    <?php include('./frontend-component/footer.php') ?>
    <!-- footer end -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</body>

</html>