<?php

session_start();
if(!isset($_SESSION['name']))
{
    header("location:../HTML/SignIn.html");
}

    // For User Details
    $userid = $_SESSION['userid'];

        //    For Movies Details
        $conn = mysqli_connect("localhost", "root", "" , "project wt");
        $selectquery="select * from Movies_details";
        $query=mysqli_query($conn,$selectquery);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/User_HomePage.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <style type="text/css">
    body {
        background: rgb(15, 15, 15) !important;
    }

    .navbar {
        background-color: rgb(15, 15, 15);
    }

    .navbar-brand {
        margin-left: 30px;
    }

    .nav-link {
        margin-left: 20px;
    }

    .btn {
        margin-left: 30px;

    }

    /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
    </style>

    <title>User Home Page </title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="../HTML/home.html">MoviesFlix</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Movies
                        </a>
                        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-white" href="#">Hindi</a></li>
                            <li><a class="dropdown-item text-white" href="#">English</a></li>
                            <li><a class="dropdown-item text-white" href="#">Gujarati</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="./about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="./contact.html">Contact Us</a>
                    </li>
                </ul>


                <!-- User Details -->
            </div>
            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../img/user.jpg" class="userdetails"> <?php echo $_SESSION['name'] ?>
                </a>
                <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item text-white" href="./User_Details.php ?id=<?php echo $userid; ?>">Your
                            Profile</a></li>
                    <li><a class="dropdown-item text-white" href="./User_Logout.php">Logout</a></li>
                </ul>
            </li>
    </nav>


    <!-- Show Movies From Databse -->
    <h1 class="heading">Popular shows</h1>


    <div class="container">
        <div class="posterdiv">
            <?php
            while($result=mysqli_fetch_array($query))
            {
        ?>
            <div class="posterdivimg">
                <a href="./Play_Movie.php ?id=<?php echo $result['Mv_Id']; ?>" class="posterlink">
                    <span class="posterimg">
                        <div class="posterinimg">
                            <img class="posterimg01" src="../PHP/upload/<?php  echo $result['Mv_Poster']; ?>" alt=""
                                class="posterimg01" />
                        </div>
                    </span>
                </a>
            </div>
            <?php 
            }
        ?>
        </div>
    </div>

    <!-- Hover iffect in cards -->
    <script>
    $(document).ready(function() {
        $(".posterinimg").hover(
            function() {
                $(this).animate({
                        marginTop: "-=1%",
                    },
                    200
                );
            },

            function() {
                $(this).animate({
                        marginTop: "0%",
                    },
                    200
                );
            }
        );
    });

    // add another movies function

    // function myFunction() {
    //   var node = document.createElement("div");
    //   var imgnode = document.create
    //   node.appendChild(textnode);
    //   document.getElementById("myList").appendChild(node);
    // }
    function add() {
        const mylist = document.getElementById("posterdivid");
        var elemn = document.getElementById("posterimgid");
        var cln = elemn.cloneNode(true);
        document.getElementById("posterdivid").appendChild(cln);
    }
    </script>
</body>

</html>