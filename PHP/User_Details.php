<?php
        $userid = $_GET['id'];
        
        session_start();
         $_SESSION['user_id'] = $userid;
        

        $conn = mysqli_connect("localhost", "root", "" , "project wt");
        $selectquery="select * from User_details where User_Id= '$userid'";
        $query=mysqli_query($conn,$selectquery);
        $result=mysqli_fetch_array($query);
?>


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <title>User Information</title>
    <link rel="stylesheet" type="text/css" href="../CSS/User_Details.css" />
</head>

<body>
    <div class="maindiv">
        <div class="signup">
            <h1 class="add">User Information</h1>
            <h2 class="name"><u><i> <?php echo $result['User_Fname']." ".$result['User_Sname'];?></i></u></h2>

            <form id="myform" method="post" action="./Update_UserDetails.php" enctype="multipart/form-data">
                <div class="leftside">

                    <label class="head1">First Name :</label><br /><br>
                    <label class="data"><?php echo $result['User_Fname'];?></label><br>
                    <hr>

                    <label class="head1">Second Name :</label><br /><br>
                    <label class="data"><?php echo $result['User_Sname'];?></label><br>
                    <hr>



                    <input type="submit" class="submit" name="submit" value="Update Your Data" />
                </div>
                <div class="rightside">

                    <label class="head1">Email Address :</label><br /><br>
                    <label class="data"><?php echo $result['User_Email'];?></label><br>
                    <hr>

                    <label class="head1">Mobile Number :</label><br /><br>
                    <label class="data"><?php echo $result['User_Number'];?></label><br>
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