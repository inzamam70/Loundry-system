<div class="header">
        <div>
            <img src="./image/londrylogo.png" alt="" class="img">
        </div>
        <h4 class="header-item">Admin DashBoard</h4>
        <div class="header-item">
            <?php 
                include_once "./dbconn.php";
                if(isset($_SESSION['id'])){
                   $user_id = $_SESSION['id'];
                }else{
                    $user_id = "";
                }
                $sql = "SELECT * FROM users WHERE id = '$user_id'";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                   ?>
                   <a href=""><i class="fa-solid fa-user"></i><?=$row['name']?></a>
                     <?php
                }
            ?>
            <a href="./backend/logout.php"><i class="fa-solid fa-power-off"></i></a>
            
        </div>
    </div>