<?php
include_once("../dbconn.php");
if (isset($_POST["submit"])) {
    $title = $_POST["title"];

    $description = $_POST["description"];

    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $image = $_FILES["image"];

    $img_loc = $_FILES['image']['tmp_name'];

    $img_name = $_FILES['image']['name'];
    $path = "../uploads/" . $img_name;
    move_uploaded_file($img_loc, '../uploads/' . $img_name);
    $sql = "INSERT INTO sliders(title,description,image) VALUES('$title','$description','$path')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location:sliders.php");
    } else {
        echo "<script>alert('Slider Inserted Failed')</script>";
    }
}
