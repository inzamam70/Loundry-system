
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
  <link rel="stylesheet" href="./css/cssfile.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Smart Home Service</title>
</head>

<body>
<!-- nav -->
<?php include_once('./frontend-component/nav.php')?>
<!-- nav-end -->

  <!-- slider -->

  <div class="slider">
    <!-- fade css -->
    <?php

    include_once '../dbconn.php';
    $sql = "SELECT * FROM sliders";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    $id = 10;

    if ($resultCheck > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="myslide ">';
        echo '<div class="txt">';
        echo '<h1>' . $row['title'] . '</h1>';
        echo '<p>' . $row['description'] . '</p>';
        echo '</div>';
        echo '<img class="slider-img" src="../uploads/' . $row['image'] . '" style="width: 100%; height: 100%;">';
        echo '</div>';
      }
    }


    ?>

    <!-- /fade css -->

    <!-- onclick js -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  		<a class="next" onclick="plusSlides(1)">&#10095;</a>
		
		<div class="dotsbox" style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
			<span class="dot" onclick="currentSlide(4)"></span>
			<span class="dot" onclick="currentSlide(5)"></span>
      
		</div>
    <!-- /onclick js -->
  </div>

  <!-- slider-end -->

  <!-- services -->
  <div id="service" class="service">
    <div class="service-heading">
      <h1>Our Services</h1>
      <div class="service-devider"></div>
      <p  style="text-align:center;width:90%;">At the Home Servie Website we understand the demands of modern life and
         the importance of a well-maintained home. Our comprehensive range of services is designed to simplify your life, 
         providing convenience and peace of mind.</p>
    </div>

    <div class="service-body">
      <div class="service-container">
        <?php
        include_once '../dbconn.php';
        $sql = "SELECT * FROM categories";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
       
        if ($resultCheck > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="service-card" style="--clr:#ff3e7f;">';
            echo '<div class="imgBx">';
            echo '<img class="service-img" src="../uploads/' . $row['image'] . '" alt="" >';
            echo '</div>';
            echo '<div class="service-content">';
            echo '<h2>' . $row['name'] . '</h2>';
            echo '<p>' . $row['description'] . '</p>';
            echo '<a href="product-item.php?category_id='.$row['id'].'">See More</a>';
            echo '</div>';
            echo '</div>';
          }
        }
        ?>
      </div>
    </div>
  </div>

  <!-- service end -->

  <!-- footer -->
  <?php include('./frontend-component/footer.php')?>
  <!-- footer end -->



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <script src="./css/jsfile.js"></script>
</body>

</html>