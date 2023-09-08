<?php
include_once("../dbconn.php");
$id=$_GET["id"];
$sql="DELETE FROM categories WHERE id='$id'";
$result=mysqli_query($conn,$sql);
if($result){

    header("location:categories.php");
}
else{
    echo "<script>alert('Category Deleted Failed')</script>";
}


?>