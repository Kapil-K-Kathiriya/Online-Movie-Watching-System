<?php

// if(empty($_POST))
// {
//     header("Location:./User_HomePage.php");
// }

        $movieid = $_GET['id'];
        echo "$movieid";

        $conn = mysqli_connect("localhost", "root", "" , "project wt");
        $selectquery="select * from Movies_details where Mv_Id= '$movieid'";
        $query=mysqli_query($conn,$selectquery);
        $result=mysqli_fetch_array($query)
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../CSS/Play_Movie.css" />
    <style>
    body {
        background-image: url("../PHP/upload/<?php echo $result['Mv_Banner']; ?>");
        background-size: cover;
    }
    </style>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $result['Mv_Name']; ?></title>
</head>

<body>
    <header>
        <a href="#" class="logo">
            <img src="#" alt="" />
        </a>
        <div class="toggle">
            <a href="../PHP/User_HomePage.php">
                <img src="../img/toggle.png" alt="" />
            </a>
        </div>
    </header>

    <div class="banner">
        <div class="content">
            <h2><span><?php echo $result['Mv_Name']; ?></span></h2>
            <p>
                <?php echo $result['Mv_Des']; ?>
            </p>
            <a href="#" class="play" onclick="toggle();">
                <img src="../img/play.png" alt="" />watch now
            </a>
        </div>
    </div>
    <div class="trailer">


        <video src="../PHP/upload/<?php echo $result['Mv_Video']; ?>" controls="true"></video>
        <img src="../img/close.png" alt="" class="close" onclick="toggle();" />
    </div>
    <script>
    function toggle() {
        var trailer = document.querySelector(".trailer");
        let video = document.querySelector(".video");
        trailer.classList.toggle("active");
        video.currentTime = 0;
        video.pause();
    }
    </script>
</body>

</html>