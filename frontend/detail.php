<?php 
include_once "../dbconn.php";
if(isset($_POST['add-to-cart'])){
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
    <link rel="stylesheet" href="./css/detail.css">
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
                <h1>Product Details</h1>
                <p></p>
            </div>
            <div class="card-section">
                <?php
                include_once "../dbconn.php";
                $id = $_GET['id'];
                $sql = "SELECT * FROM products WHERE id = $id";

                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="detail-card">
                        <form action="" method="post">
                        <input type="hidden" name="update_quantity_id" value="<?=$row['id']?>">

                        <div class="left">
                            <img src="<?= $row ['image']?>" alt="shoe" >
                        </div>
                       
                        <div class="right">
                            <div class="detail-product-info">
                                <div class="detail-product-name">
                                <?php 
                                     $sql = "SELECT * FROM categories WHERE id = {$row['category_id']}";
                                        $result = mysqli_query($conn, $sql);
                                        while ($categoryRow  = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <h1><?= $categoryRow ['name']?></h1>
                                        <?php }
            
                    
                                    ?>
                                    
                                </div>
                           
                                <div class="detail-details">

                                    <h2><?= $row['title']?></h2>
                                    <h4 style="color:aqua;"><span class="fa fa-dollar"></span><?= $row['price']?>/-</h4>
                                   <p style="color:white;"> This is our one of the best service that is available now for the respective customers . By this service we want to earn the satisfying review from our honourable customers and make them happy.</p>
                                    <br>
                                    <h4>Product Qr Code</h4>
                                    <br>
                                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=<?= $row['title']?>  <?= $row['price']?>" alt="">
                                   
                                </div>
                                <input type="hidden" name="product_name" value="<?=$row['title']?>">
                                <input type="hidden" name="product_price" value="<?=$row['price']?>">
                                <input type="hidden" name="product_image" value="<?=$row['image']?>">
                                <input type="submit" name="add-to-cart" class="foot" value="Add to Cart">
                                
                            </div>
                        </div>
                        </form>
                
                    </div>


                <?php } ?>
            </div>
            <div class="review">
                <?php 
                include_once "../dbconn.php";
                if (isset($_POST['submit'])) {
                    $product_id = $_POST['product_id'];
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $sms = $_POST['sms'];
                    $sql = "INSERT INTO review (product_id, name, email, sms) VALUES ('$product_id', '$name', '$email', '$sms')";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        echo "<script>alert('Review Added Successfully')</script>";
                    } else {
                        echo "<script>alert('Review Not Added')</script>";
                    }
                }
                ?>
                <form action="" method="post">
                    <h1>Write a Review</h1>
                    <?php 
                    include_once "../dbconn.php";
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM products WHERE id = $id";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <input type="hidden" name="product_id" value="<?= $row['id']?>">
                    <?php }
                    ?>
                    <input type="text" name="name" placeholder="Enter your name">
                    <input type="email" name="email" placeholder="Enter your email">
                    <textarea name="sms" id="" cols="30" rows="10" placeholder="Enter your review"></textarea>
                    <input type="submit" name="submit" value="Submit" class="btn">
                </form>
                <div class="review-heading">
                    <h1>Reviews</h1>
                </div>
                <?php 
                include_once "../dbconn.php";
                $id = $_GET['id'];
                $sql = "SELECT * FROM review WHERE product_id = $id";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="review-card">
                            <div class="review-card-text">
                                <h1><?= $row['name']?></h1>
                                <p><?= $row['sms']?></p>
                            </div>
                        </div>
                    <?php }
                } else {
                    echo "<h1>No Review Found</h1>";
                }

                ?>
                
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