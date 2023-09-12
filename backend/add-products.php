<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/slider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Hello, world!</title>
</head>

<body>
    <!-- header -->
    <?php include('./backend-component/header.php') ?>

    <!-- nav item -->
    <div class="template">
        <div class="nav-item">

            <ul>
                <li class="menu">
                    <a href="../admin.php">DashBoard</a>
                </li>
                <li class="menu">
                    <a href="../frontend/index.php"><i class="fas fa-home"></i>home</a>
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
                        <li><a href="./sliders.php">Sliders</a></li>
                        <li><a href="./createslider.php">Create Slider</a></li>
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
                        <li><a href="./categories.php">Categories</a></li>
                        <li><a href="./createcategory.php">Add Category</a></li>
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
                        <li><a href="./products.php">Products</a></li>
                        <li><a href="./add-products.php">Add Product</a></li>
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
                    <a href="./logout.php" class="logout">
                        <i class="fas fa-right-from-bracket"></i>
                        Logout</a>
                </div>

            </ul>


        </div>


        <div class="body">

            <div class="from-body">
                <div class="title">
                    <h1 class="title-item">Add Product</h1>
                </div>
                <?php
                include_once "../dbconn.php";
                if (isset($_POST['submit'])) {
                    $category_id = $_POST['category_id'];
                    $title = $_POST['title'];
                    $price = $_POST['price'];
                    $targetDir = "uploads/";
                    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                    $image = $_FILES["image"];
                    $img_loc = $_FILES['image']['tmp_name'];
                    $img_name = $_FILES['image']['name'];
                    $path = "../uploads/" . $img_name;
                    move_uploaded_file($img_loc, $path);
                    $sql = "INSERT INTO products (category_id, title, price, image) VALUES ('$category_id', '$title', '$price', '$path')";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        echo "<script>alert('Product Added Successfully')</script>";
                        echo "<script>window.location.href = './products.php'</script>";
                    } else {
                        echo "<script>alert('Product Added Failed')</script>";
                        echo "<script>window.location.href = './add-products.php'</script>";
                    }

                }



                ?>

                <div class="form">
                    <form action="" class="form-item" method="post" enctype="multipart/form-data">
                        <label for="category_id">Category</label>
                        <select name="category_id" id="">
                            <?php
                            include_once "../dbconn.php";
                            $sql = "SELECT * FROM categories";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                            <?php } ?>
                        </select>
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter Title">
                        <label for="description">Price</label>
                        <input type="text" name="price" class="form-control" placeholder="Enter Price">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control" accept="image/*">
                        <input type="submit" class="btn btn-warning" value="Submit" name="submit" style="width:100%;">
                    </form>
                </div>

            </div>

        </div>


    </div>




    <!-- body -->





    <!-- footer  -->
    <?php include('./backend-component/footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>