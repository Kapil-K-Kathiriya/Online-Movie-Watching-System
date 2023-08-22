<?php

if(empty($_POST))
{
    header("Location:./PHP/Admit_HomePage.php");
}


        session_start();
        $movieid = $_SESSION['movie_id'];
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

        

        $updatequery="UPDATE Movies_Details
        SET Mv_Name = '".$_POST['Mname']."', Mv_Language = '".$_POST['Lan']."', Mv_Date = '".$_POST['date']."',Mv_Video='$file',Mv_Poster='$file1',Mv_Banner='$file2',Mv_Des='".$_POST['subject']."'
        WHERE Mv_Id = '$movieid';";
        
        $query=mysqli_query($conn,$updatequery);
        
        //$result=mysqli_fetch_array($query);
       
        if($query)
        {
            ?>
<script>
alert('Your data is successfully updated!!!');
location.replace('./Admin_HomePage.php');
</script>

<?php
        }
        else{
            echo "Error".mysqli_error($conn);
        }
    }
        ?>