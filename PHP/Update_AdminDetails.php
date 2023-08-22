<?php
session_start();
if(!isset($_SESSION['admin_id']))
{
    header("location:./Admin_HomePage.php");
}
        $adminid = $_SESSION['admin_id'];
        
        

        $conn = mysqli_connect("localhost", "root", "" , "project wt");
        $selectquery="select * from Admin_details where Admin_Id= '$adminid'";
        $query=mysqli_query($conn,$selectquery);
        $result=mysqli_fetch_array($query);
?>


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <title>Update Your Information</title>
    <link rel="stylesheet" type="text/css" href="../CSS/User_Details.css" />
    <style>
    .in {
        width: 89%;
        margin-left: 20px;
        height: 30px;
        background-color: rgba(0, 0, 0, 0.8);
        border-style: none;
        color: white;
        font-size: 16px;


    }
    </style>
</head>

<body>
    <div class="maindiv">
        <div class="signup">
            <h1 class="add">Admin Information</h1>
            <h2 class="name"><u><i> <?php echo $result['Admin_Fname']." ".$result['Admin_Sname'];?></i></u></h2>

            <form id="myform" method="post" action="./Update_Operation_Admin.php" enctype="multipart/form-data">
                <div class="leftside">

                    <label class="head1">First Name :</label><br /><br>
                    <input type="text" class="in" name="fname" value="<?php echo $result['Admin_Fname'];?>">
                    <!-- <label class="data"><?php echo $result['Admin_Fname'];?></label><br>-->
                    <hr>

                    <label class="head1">Second Name :</label><br /><br>
                    <input type="text" class="in" name="sname" value="<?php echo $result['Admin_Sname'];?>">
                    <!-- <label class="data"><?php echo $result['Admin_Sname'];?></label><br> -->
                    <hr>



                    <input type="submit" class="submit" name="submit" value="Update Your Data" />
                </div>
                <div class="rightside">

                    <label class="head1">Email Address :</label><br /><br>
                    <input type="text" class="in" name="email" value="<?php echo $result['Admin_Email'];?>">
                    <!-- <label class="data"><?php echo $result['Admin_Email'];?></label><br> -->
                    <hr>

                    <label class="head1">Mobile Number :</label><br /><br>
                    <input type="text" class="in" name="number" value="<?php echo $result['Admin_Number'];?>">
                    <!-- <label class="data"><?php echo $result['Admin_Number'];?></label><br> -->
                    <hr>

                </div>

                <br />

                <!-- <a href="Admin_Signup.html" class="admin">SignUp as Admin</a><a href="#" class="needhelp">need help ?</a> -->
            </form>
            <!-- <script type="text/javascript" src="JS/Add_Movie_Formvalid.js"></script> -->
        </div>
    </div>
</body>

</html>