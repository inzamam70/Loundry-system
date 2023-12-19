<?php
session_start();
include_once './dbconn.php';
if (!isset($_SESSION['admin_name'])) {
    header('location:./frontend/login.php');
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>Smart Home Service</title>
</head>

<body>
    <!-- header -->
    <div class="header">


        <div>
            <img src="./image/londrylogo.png" alt="" class="img">

        </div>

        <div class="header-item" style="display:flex;gap:10px;justify-content:space-between;">

            <h3>Welcome
                <?php echo $_SESSION['admin_name']; ?>
            </h3>
        </div>

        <div class="header-item">
            <a href="logout.php"><i class="fa-solid fa-power-off"></i></a>
        </div>

    </div>

    <!-- nav item -->
    <div class="template">
        <div class="nav-item">

            <ul>
                <li class="menu">
                    <a href="./admin.php">DashBoard</a>
                </li>
                <li class="menu">
                    <a href="./frontend/index.php"><i class="fas fa-home"></i>home</a>
                </li>
                <li class="menu">
                    <a href="" class="dropdown">
                        <div>
                            <i class="fas fa-sliders"></i>
                            Slider
                        </div>

                        <i class="fa fa-angle-right"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="./backend/sliders.php">Sliders</a></li>
                        <li><a href="./backend/createslider.php">Create Slider</a></li>
                    </ul>
                </li>
                <li class="menu">
                    <a href="" class="dropdown">
                        <div>
                            <i class="fas fa-list"></i>
                            Service Category
                        </div>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="./backend/categories.php">Categories</a></li>
                        <li><a href="./backend/createcategory.php">Add Category</a></li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="" class="dropdown">
                        <div>
                            <i class="fa-brands fa-first-order"></i>
                            Product
                        </div>

                        <i class="fa fa-angle-right"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="./backend/products.php">Products</a></li>
                        <li><a href="./backend/add-products.php">Add Product</a></li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="" class="dropdown">
                        <div>
                            <i class="fa-brands fa-first-order"></i>
                            Setting
                        </div>

                        <i class="fa fa-angle-right"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="./backend/users.php">Users</a></li>
                        <li><a href="./backend/roles.php">Roles</a></li>
                    </ul>
                </li>
                <li class="menu">
                    <a href="">
                        <i class="fas fa-circle-info"></i>
                        Help
                    </a>
                </li>
                <!-- <div class="log-menu">
                    <a href="./backend/logout.php" class="logout">
                        <i class="fas fa-right-from-bracket"></i>
                        Logout</a>
                </div> -->

            </ul>


        </div>

        <div class="body">
            <h1>Laundry System</h1>
            <?php
            include_once "dbconn.php";
            $sql = "SELECT * FROM carts";
            $result = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($result);

            $sql2 = "SELECT * FROM products";
            $result2 = mysqli_query($conn, $sql2);
            $count2 = mysqli_num_rows($result2);

            $sql3 = "SELECT * FROM contacts";
            $result3 = mysqli_query($conn, $sql3);
            $count3 = mysqli_num_rows($result3);

            ?>
            <div class="card-body">
                <a href="" class="btn btn-success "><i class="fa-solid fa-file" style="padding: 5px;"></i>New
                    <span><sup>
                            <?= $count2 ?>
                        </sup></span></a>
                <a href="" class="btn btn-primary"><i class="fa-solid fa-spinner" style="padding: 5px;"></i>Progress
                    <span><sup>
                            <?= $count ?>
                        </sup></span></a>
                <a href="" class="btn btn-warning"><i class="fa-solid fa-circle-check"
                        style="padding: 5px;"></i>Accepted </a>
                <a href="" class="btn btn-danger"><i class="fa-solid fa-check" style="padding: 5px;"></i>Finish</a>
                <a href="" class="btn btn-info"><i class="fa-solid fa-comments" style="padding: 5px;"></i>SMS
                    <span><sup>
                            <?= $count3 ?>
                        </sup></span></a>

                <div class="table-content-order">
                    <h2>Order List</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Sl</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Card No</th>
                                <th scope="col">Total Price</th>
                                <th scope="col">Transection Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once "dbconn.php";
                            $sql = "SELECT * FROM checkouts";
                            $result = mysqli_query($conn, $sql);
                            $id = 1;
                            $count = mysqli_num_rows($result);
                            while ($row = mysqli_fetch_assoc($result)) {

                                ?>
                                <tr>
                                    <td>
                                        <?= $id++ ?>
                                    </td>
                                    <td>
                                        <?= $row['full_name'] ?>
                                    </td>
                                    <td>
                                        <?= $row['email'] ?>
                                    </td>
                                    <td>
                                        <?= $row['card_num'] ?>
                                    </td>
                                    <td>
                                        <?= $row['grand_total'] ?>
                                    </td>
                                    <td>
                                        <?= $row['transection_date'] ?>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>

                        </tbody>
                    </table>

                </div>

                <div class="table-content-order">
                    <h2>Massage</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Sl</th>
                                <th scope="col"> Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Sms</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once "dbconn.php";
                            $sql = "SELECT * FROM contacts";
                            $result = mysqli_query($conn, $sql);
                            $id = 1;
                            while ($row = mysqli_fetch_assoc($result)) {

                                ?>
                                <tr>
                                    <td>
                                        <?= $id++ ?>
                                    </td>
                                    <td>
                                        <?= $row['name'] ?>
                                    </td>
                                    <td>
                                        <?= $row['email'] ?>
                                    </td>
                                    <td>
                                        <?= $row['massage'] ?>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>

            </div>


        </div>
    </div>




    <!-- body -->





    <!-- footer  -->
    <?php include('./backend/backend-component/footer.php') ?>

    <script>
        let hr = document.querySelector('#hr');
        let mn = document.querySelector('#mn');
        let sc = document.querySelector('#sc');

        setInterval(() => {
            let day = new Date();
            let hh = day.getHours() * 30;
            let mm = day.getMinutes() * 6;
            let ss = day.getSeconds() * 6;

            hr.style.transform = `rotateZ(${hh + (mm / 12)}deg)`;
            mn.style.transform = `rotateZ(${mm}deg)`;
            sc.style.transform = `rotateZ(${ss}deg)`;

            // digital clock
            let hours = document.getElementById('hour');
            let minutes = document.getElementById('minute');
            let seconds = document.getElementById('second');
            let ampm = document.getElementById('ampm');

            let h = new Date().getHours();
            let m = new Date().getMinutes();
            let s = new Date().getSeconds();

            let am = h >= 12 ? 'PM' : 'AM';

            if (h > 12) {
                h = h - 12;
            }

            h = (h < 10) ? "0" + h : h;
            m = (m < 10) ? "0" + m : m;
            s = (s < 10) ? "0" + s : s;

            hours.innerHTML = h;
            minutes.innerHTML = m;
            seconds.innerHTML = s;
            ampm.innerHTML = am;
        })



    </script>
    <script src="script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>