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

        <div class="service">
            <div class="service-heading">
                <h1>Products</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
            </div>
            <div class="card-section-item">
                <?php
                include_once "../dbconn.php";
                $categoryId = $_GET['category_id'];
                $sql = "SELECT * FROM products WHERE category_id = $categoryId";

                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>

                <div class="product-card-item">
                    <div class="card-img-item">
                        <img src="<?= $row['image'] ?>" alt="">
                    </div>
                    <div class="product-card-content-item">
                        <h3><?= $row['title'] ?></h3>
                        <p class="description-item">Price=<?= $row['price'] ?>/-</p>
                        <a href="detail.php?id=<?= $row['id'] ?>" class="card-btn-item">Show Details</a>
                    </div>
                </div>


                <?php } ?>
            </div>


        </div>

        <!-- footer -->
        <?php include('./frontend-component/footer.php') ?>
        <!-- footer end -->


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>