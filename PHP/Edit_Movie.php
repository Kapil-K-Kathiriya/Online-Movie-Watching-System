<?php
        $movieid = $_GET['id'];
        
        session_start();
         $_SESSION['movie_id'] = $movieid;
        

        $conn = mysqli_connect("localhost", "root", "" , "project wt");
        $selectquery="select * from Movies_details where Mv_Id= '$movieid'";
        $query=mysqli_query($conn,$selectquery);
        $result=mysqli_fetch_array($query);
?>


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <title>Add Movie</title>
    <link rel="stylesheet" type="text/css" href="../CSS/Add_Movie.css" />
</head>

<body>
    <div class="maindiv">
        <div class="signup">
            <h1 class="add">Adding Movie</h1>

            <form id="myform" method="post" action="./Update_Movie_Details.php" enctype="multipart/form-data">
                <div class="leftside">
                    <label>Enter Movie Name :</label><br />
                    <input class="input" type="text" name="Mname" id="Mname" value="<?php echo $result['Mv_Name'];?>"
                        required /><br />
                    <span id="mnm"> </span><br />

                    <label>Enter Movie Language :</label><br />
                    <input class="input" type="text" name="Lan" id="Lan" value="<?php echo $result['Mv_Language'];?>"
                        required /><br />
                    <span id="mlan"> </span><br />

                    <label>Enter Movie release date :</label><br />
                    <input class="input" type="text" name="date" id="date" value="<?php echo $result['Mv_Date'];?>"
                        placeholder="Ex. 02-04-2021" required /><br />
                    <span id="mdt"> </span><br />

                    <label>Select Movie :</label><br />
                    <input class="input" type="file" name="mv" id="mv" value="<?php echo $result['Mv_Video'];?>"
                        required />
                    <br />
                    <span id="mv"> </span><br />

                    <input type="submit" class="submit" name="submit" />
                </div>
                <div class="rightside">
                    <label>Select Movie Poster :</label><br />
                    <input class="input" type="file" name="mp" id="mp" value="<?php echo $result['Mv_Poster'];?>"
                        required />
                    <br />
                    <span id="mvp"> </span><br />

                    <label>Select Movie Banner :</label><br />
                    <input class="input" type="file" name="mb" id="mb" value="<?php echo $result['Mv_Banner'];?>"
                        required />
                    <br />
                    <span id="mvb"> </span><br />

                    <label>Enter Movie Description :</label><br />
                    <textarea class="input" id="subject" name="subject" placeholder="Write something.."
                        style="height: 141px" required> <?php echo $result['Mv_Des'];?></textarea>

                    <!-- <button class="reset" type="reset">Reset</button> -->
                </div>

                <br />

                <!-- <a href="Admin_Signup.html" class="admin">SignUp as Admin</a><a href="#" class="needhelp">need help ?</a> -->
            </form>
            <!-- <script type="text/javascript" src="JS/Add_Movie_Formvalid.js"></script> -->
        </div>
    </div>
</body>

</html>