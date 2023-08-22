<?php      
        session_start();
        if(!isset($_SESSION['user_id']))
        {
            header("location:./User_HomePage.php");
        }
                $userid = $_SESSION['user_id'];
                echo $userid;
                
        
        $conn = mysqli_connect("localhost", "root", "" , "project wt");
        $updatequery="UPDATE User_Details
        SET User_Fname = '".$_POST['fname']."', User_Sname = '".$_POST['sname']."', User_Email = '".$_POST['email']."', User_Number='".$_POST['number']."'
        WHERE User_Id = '$userid';";
        
        $query=mysqli_query($conn,$updatequery);
        
        //$result=mysqli_fetch_array($query);
       
        if($query)
        {
            ?>
<script>
alert('Your data is successfully updated!!!');
location.replace('./User_HomePage.php');
</script>

<?php
        }
        else{
            echo "Error".mysqli_error($conn);
        }
?>