<?php
include_once "../dbconn.php";

if (isset($_POST['update_cart_quantity'])) {
    $update_value = $_POST['update_quantity'];
    $update_id = $_POST['update_quantity_id'];
    $update_sql = "UPDATE carts SET quantity='$update_value' WHERE id='$update_id'";
    $update_result = mysqli_query($conn, $update_sql);
    if ($update_result) {
        header('location:cart.php');
    } else {
        echo "<script>alert('Quantity not updated')</script>";
    }
}
if (isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    $remove_sql = "DELETE FROM carts WHERE id='$remove_id'";
    $remove_result = mysqli_query($conn, $remove_sql);
    if ($remove_result) {
        header('location:cart.php');
    } else {
        echo "<script>alert('Product not removed')</script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Home Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style2.css">
    <link rel="stylesheet" href="./css/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="body">
        <?php include_once('./frontend-component/nav.php') ?>

        <div class="service">
            <div class="service-heading">
                <h1>My Cart</h1>
            </div>
            <div class="card-section">

                <div class="shopping_cart">
                    
                    <table>
                        <?php
                        include_once "../dbconn.php";
                        $sql = "SELECT * FROM carts";
                        $result = mysqli_query($conn, $sql);
                        $count = mysqli_num_rows($result);
                        $num = 1;
                        $grand_total = 0;
                        if ($count > 0) {
                            echo "
                    <thead>
                    <th>Sl No</th>
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Product Price</th>
                    <th>Product Quantity</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </thead>
                <tbody>";
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>

                                <tr>
                                    <td>
                                        <?= $num++ ?>
                                    </td>
                                    <td>
                                        <?= $row['title'] ?>
                                    </td>
                                    <td>
                                        <img src="../uploads/<?= $row['image'] ?>" alt="" style="border-redius:50%;width:100px;">
                                    </td>
                                    
                                    
                                    <td>$
                                        <?= number_format($row['price']) ?>/-
                                    </td>
                                    <td>
                                        <form action="" method="post">
                                            <input type="hidden" value="<?= $row['id'] ?>" name="update_quantity_id">
                                            <div class="quantity_box">
                                                <input type="number" min="1" value="<?= $row['quantity'] ?>"
                                                    name="update_quantity">
                                                <input type="submit" class="update_quantity" value="Update"
                                                    name="update_cart_quantity">
                                            </div>
                                        </form>
                                    </td>
                                    <td>$
                                        <?= $subtotal = number_format($row['price'] * $row['quantity']) ?>/-
                                    </td>
                                    <td>
                                        <a href="cart.php?remove=<?= $row['id'] ?>" class="delete_btn"
                                            style="display:flex; flex-direction:column;text-decoration:none;"
                                            onclick="return confirm('are you sure you want to delete this product?');"><i
                                                class="fa-solid fa-trash"></i>Remove</a>
                                    </td>
                                </tr>

                                <?php
                                $grand_total = $grand_total + ($row['price'] * $row['quantity']);
                            }
                        } else {
                            echo "<h1 style='text-align:center; margin-top:50px;'>No Product in cart</h1>";
                        }
                        ?>


                        </tbody>
                    </table>
                    <?php
                    if ($grand_total > 0) {
                        echo " <div class='table_bottom'>
                <a href='shop.php' class='bottom_btn' style='text-decoration: none;'>Continue Shopping</a>
                <h3 class='bottom_btn'>Grand Total: $<Span>$grand_total/-</Span></h3>
                <a href='payment.php' class='bottom_btn' style='text-decoration: none;'>Proceed to checkout</a>
            </div>";



                        ?>

                        <?php
                    } else {
                        echo "  
                ";
                    }
                    ?>

                </div>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>