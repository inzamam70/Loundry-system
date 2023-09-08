<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style2.css">
    <link rel="stylesheet" href="./css/price.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Hello, world!</title>
</head>

<body>
    <div class="body">
        <!-- nav -->
        <?php include_once('./frontend-component/nav.php')?>
        <!-- nav end -->

        <!-- Price -->
        <div class="price-body">
            <div class="price-header">
                <h1>OUR PRICES</h1>
                <div class="price-divider"></div>
                <p>We make doing your laundry simple. We can save your time, so you can enjoy doing the things you love. We can save you money on soap, water, heating and electricity. So you can enjoy even more of the things you love. Our prices are simple and affordable</p>
            </div>
            <div class="card-body">
                <h1 class="header-1">AFFORDABLE PRICES</h1>
                <div class="price-divider"></div>
                <div class="grid">
                    <div class="grid-item">
                        <div class="card"><img class="card-img" src="../frontend/image/shirt.png">
                            <div class="card-content">
                                <h1 class="card-header">From ৳10 Per Shirt</h1>
                                <p class="card-text">Shirt Service</p>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item">
                        <div class="card"><img class="card-img" src="../frontend/image/washing-machine.png">
                            <div class="card-content">
                                <h1 class="card-header">From ৳50 Per Item</h1>
                                <p class="card-text">Laundry Service</p>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item">
                        <div class="card"><img class="card-img" src="../frontend/image/laundry.png">
                            <div class="card-content">
                                <h1 class="card-header">From ৳60 Per Item</h1>
                                <p class="card-text">Dry Cleaning</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="price-section">
                <h1>FULL PRICE LIST</h1>
                <div class="price-divider"></div>
                <div class="price-list">
                    <a href="./laundry.php" class="a">
                        <div class="price-item">
                            <img src="../frontend/image/laundry-machine.png" alt="">
                            <p>Laundry</p>
                        </div>
                    </a>
                    <a href="./dry-clean.php" class="a">
                        <div class="price-item">
                            <img src="../frontend/image/drying.png" alt="">
                            <p>Dry Cleaning</p>
                        </div>
                    </a>
                    <a href="./ironing.php" class="a">
                        <div class="price-item">
                            <img src="../frontend/image/ironing.png" alt="">
                            <p>Ironing</p>
                        </div>
                    </a>
                    <a href="./car-wash.php" class="a">
                        <div class="price-item">
                            <img src="../frontend/image/car-service.png" alt="">
                            <p>Car Wash</p>
                        </div>
                    </a>
                    <a href="./ac-wash.php" class="a">
                        <div class="price-item">
                            <img src="../frontend/image/cleaning.png" alt="">
                            <p>Ac Wash</p>
                        </div>
                    </a>
                    <a href="./lpg.php" class="a">
                        <div class="price-item">
                            <img src="../frontend/image/gas.png" alt="">
                            <p>LPG Gash </p>
                        </div>
                    </a>
                    <a href="./home-clean.php" class="a">
                        <div class="price-item">
                            <img src="../frontend/image/house-cleaning.png" alt="">
                            <p>Home Cleaning</p>
                        </div>
                    </a>
                </div>
            </div>

        </div>
        <!-- Price end -->

        <!-- footer -->
        <?php include('./frontend-component/footer.php')?>
        <!-- footer end -->


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>