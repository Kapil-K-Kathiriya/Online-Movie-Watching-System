<?php

$movieid = $_GET['id'];
        
        $conn = mysqli_connect("localhost", "root", "" , "project wt");
        $deletequery="DELETE FROM Movies_Details WHERE Mv_Id = '$movieid'";

        

        $query=mysqli_query($conn,$deletequery);
        
       
        
        //$result=mysqli_fetch_array($query);
       
        if($query)
        {
            ?>
<script>
alert('Movie is Deleted successfully !!!');
location.replace('./Admin_HomePage.php');
</script>

<?php
        }
        else{
            echo "Error".mysqli_error($conn);
        }
?>




?>