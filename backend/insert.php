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
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> Product Added Successfully.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Product Not Added.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
}