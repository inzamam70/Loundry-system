<?php
include_once("../dbconn.php");
$id=$_GET["id"];
$sql="DELETE FROM sliders WHERE id='$id'";
$result=mysqli_query($conn,$sql);
if($result){

    header("location:sliders.php");
}
else{
    echo "<script>alert('Slider Deleted Failed')</script>";
}



?>