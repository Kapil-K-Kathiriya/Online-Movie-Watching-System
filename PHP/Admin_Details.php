<?php
        $adminid = $_GET['id1'];
        session_start();
         $_SESSION['admin_id'] = $adminid;

        $conn = mysqli_connect("localhost", "root", "" , "project wt");
        $selectquery="select * from Admin_details where Admin_Id= '$adminid'";
        $query=mysqli_query($conn,$selectquery);
        $result=mysqli_fetch_array($query);
?>


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <title>Add Movie</title>
    <link rel="stylesheet" type="text/css" href="../CSS/User_Details.css" />
</head>

<body>
    <div class="maindiv">
        <div class="signup">
            <h1 class="add">Admin Information</h1>
            <h2 class="name"><u><i> <?php echo $result['Admin_Fname']." ".$result['Admin_Sname'];?></i></u></h2>

            <form id="myform" method="post" action="./Update_AdminDetails.php" enctype="multipart/form-data">
                <div class="leftside">

                    <label class="head1">First Name :</label><br /><br>
                    <label class="data"><?php echo $result['Admin_Fname'];?></label><br>
                    <hr>

                    <label class="head1">Second Name :</label><br /><br>
                    <label class="data"><?php echo $result['Admin_Sname'];?></label><br>
                    <hr>



                    <input type="submit" class="submit" name="submit" value="Update Your Data" />
                </div>
                <div class="rightside">

                    <label class="head1">Email Address :</label><br /><br>
                    <label class="data"><?php echo $result['Admin_Email'];?></label><br>
                    <hr>

                    <label class="head1">Mobile Number :</label><br /><br>
                    <label class="data"><?php echo $result['Admin_Number'];?></label><br>
                    <hr>

                    <!-- <button class="reset" formaction="./Admin_HomePage.php">Go back</button> -->
                    <!-- <button class="reset" onclick="Admin_HomePage.php;">Go to back</button> -->

                </div>

                <br />

                <!-- <a href="Admin_Signup.html" class="admin">SignUp as Admin</a><a href="#" class="needhelp">need help ?</a> -->
            </form>
            <!-- <script type="text/javascript" src="JS/Add_Movie_Formvalid.js"></script> -->
        </div>
    </div>
</body>

</html>