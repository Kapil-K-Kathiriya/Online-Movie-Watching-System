<?php

if(empty($_POST))
{
    header("Location:../HTML/Add_Movie.html");
}



    $conn = mysqli_connect("localhost", "root", "" , "project wt");

    if(isset($_POST['submit']))
    {

        $file = $_FILES['mv']['name'];
        $file_type=$_FILES['mv']['tmp_name'];
        move_uploaded_file($file_type,"upload/".$file);

        $file1 = $_FILES['mp']['name'];
        $file_type1=$_FILES['mp']['tmp_name'];
        move_uploaded_file($file_type1,"upload/".$file1);

        $file2 = $_FILES['mb']['name'];
        $file_type2=$_FILES['mb']['tmp_name'];
        move_uploaded_file($file_type2,"upload/".$file2);

        $query = "insert into Movies_details(Mv_Name,Mv_Language,Mv_Date,Mv_Video,Mv_Poster,Mv_Banner,Mv_Des) values('".$_POST['Mname']."','".$_POST['Lan']."','".$_POST['date']."','$file','$file1','$file2','".$_POST['subject']."')";

        if(mysqli_query($conn, $query))
        {
?>
<script>
alert('your data will be successfully submit');
location.replace('../PHP/User_HomePage.php');
</script>

<?php
        }
        else
        {
            echo "Error".mysqli_error($conn);
        }
    }
?>