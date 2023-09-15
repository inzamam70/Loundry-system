<?php 
include_once "../dbconn.php";
if(isset($_POST['add_to_cart'])){
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = 1;
    $select_sql = "SELECT * FROM carts WHERE title = '$product_name'";
    $select_result = mysqli_query($conn, $select_sql);
    $select_count = mysqli_num_rows($select_result);
    if($select_count > 0){
        echo "<script>alert('Product Already Added')</script>";
        echo "<script>window.location.href = './cart.php'</script>";
    }else{
        $sql = "INSERT INTO carts (title, price, image, quantity) VALUES ('$product_name', '$product_price', '$product_image', '$product_quantity')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "<script>alert('Product Added Successfully')</script>";
            echo "<script>window.location.href = './cart.php'</script>";
        }else{
            echo "<script>alert('Product Added Failed')</script>";
            echo "<script>window.location.href = './cart.php'</script>";
        }
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="body">
        <?php include_once('./frontend-component/nav.php') ?>

        <div class="service">
            <div class="service-heading">
                <h1>Lets Shop</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
            </div>
            <div class="card-section">
            <?php
            include_once "../dbconn.php";
            $sql = "SELECT * FROM products";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="product-card">
                        <form action="" method="post">
                            <input type="hidden" name="update_quantity_id" value="<?=$row['id']?>">
                            <div class="card-img">
                                <img src="<?=$row['image']?>" alt="">
                            </div>
                            <div class="product-card-content">
                                <h3><?=$row['title']?></h3>
                                <p class="description">Price=<?=$row['price']?>/-</p>
                                <input type="hidden" name="product_name" value="<?=$row['title']?>">
                                <input type="hidden" name="product_price" value="<?=$row['price']?>">
                                <input type="hidden" name="product_image" value="<?=$row['image']?>">
                                <input type="submit" class="submit_btn cart_btn btn btn-danger" value="Add to cart" name="add_to_cart">
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }else   {
                echo "<h1>No Products Found</h1>";
            }
            ?>

                        


            </div>
        </div>
    </div>


    <?php include('./frontend-component/footer.php') ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>