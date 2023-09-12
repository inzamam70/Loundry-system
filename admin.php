<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("Location:./frontend/login.php");
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

    <title>Hello, world!</title>
</head>

<body>
    <!-- header -->
    <?php include('./backend/backend-component/header.php') ?>

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
                    <a href="">
                        <i class="fas fa-gears"></i>
                        Settings
                    </a>
                </li>
                <li class="menu">
                    <a href="">
                        <i class="fas fa-circle-info"></i>
                        Help
                    </a>
                </li>
                <div class="log-menu">
                    <a href="./backend/logout.php" class="logout">
                        <i class="fas fa-right-from-bracket"></i>
                        Logout</a>
                </div>

            </ul>


        </div>

        <div class="body">
            <h1>Laundry System</h1>
            <div class="card-body">
                <a href="" class="btn btn-success "><i class="fa-solid fa-file" style="padding: 5px;"></i>New</a>
                <a href="" class="btn btn-primary"><i class="fa-solid fa-spinner" style="padding: 5px;"></i>Progress</a>
                <a href="" class="btn btn-danger"><i class="fa-solid fa-check" style="padding: 5px;"></i>Finish</a>
                <a href="" class="btn btn-warning"><i class="fa-solid fa-circle-check"
                        style="padding: 5px;"></i>Accepted</a>
            </div>

        </div>
    </div>




    <!-- body -->





    <!-- footer  -->
    <?php include('./backend/backend-component/footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>