<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/slider.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                    <a href="" class="dropdown">
                        <div>
                            <i class="fa-brands fa-first-order"></i>
                            Setting
                        </div>

                        <i class="fa fa-angle-right"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="./users.php">Users</a></li>
                        <li><a href="./roles.php">Roles</a></li>
                    </ul>
                </li>
    <li class="menu">
        <a href="">
            <i class="fas fa-circle-info"></i>
            Help
        </a>
    </li>
 
</ul>


</div>


        <div class="body">

            <div class="from-body">
                <div class="title">
                    <h1 class="title-item">Categories</h1>
                </div>

                <div class="form">
                    <div class="from-btn">
                        <a href="./createcategory.php" class="btn btn-success"><i class="fa-solid fa-plus"></i></a>
                        <a href="../admin.html" class="btn btn-danger">Back</a>
                    </div>
                    <div class="table-container">
                        <table class="table-content">
                            <thead class="table-item">
                                <tr>
                                    <th>Sl</th>
                                    <th>Category Name</th>
                                    <th style="width: 300px;">Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                include_once "../dbconn.php";
                                $sql = "SELECT * FROM categories";
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
                                            <p style="width: 300px;white-space:break-spaces;"><?= $row['description'] ?></p>
                                       </td>
                                        <td><img src="<?php echo $row['image'] ?> " width='100px' height='70px'></td>
                                        <td>
                                            <div class="action-btn">
                                                <a href="./editcategory.php?id=<?= $row['id'] ?>" class="btn btn-primary"><i class="fa-solid fa-pen-nib"></i></a>
                                                <a href="./deletecategory.php?id=<?= $row['id'] ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                            </div>
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


    </div>




    <!-- body -->





    <!-- footer  -->
    <?php include('./backend-component/footer.php')?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>