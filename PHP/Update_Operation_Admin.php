<?php      
        session_start();
        if(!isset($_SESSION['admin_id']))
        {
            header("location:./Admin_HomePage.php");
        }
                $adminid = $_SESSION['admin_id'];
                echo $adminid;
                
        
        $conn = mysqli_connect("localhost", "root", "" , "project wt");
        $updatequery="UPDATE Admin_Details
        SET Admin_Fname = '".$_POST['fname']."', Admin_Sname = '".$_POST['sname']."', Admin_Email = '".$_POST['email']."', Admin_Number='".$_POST['number']."'
        WHERE Admin_Id = '$adminid';";
        
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
?>