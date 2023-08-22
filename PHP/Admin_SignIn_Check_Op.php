<?php
if(empty($_POST))
{
    header("Location:../HTML/Admin_SignIn.html");
}

if($_SERVER['REQUEST_METHOD'] =='POST')
    {    
    
        $conn = mysqli_connect("localhost", "root", "" , "project wt");
        $query= "SELECT * FROM Admin_details WHERE Admin_Email = '".$_POST['email']."' AND Admin_Pass = '". $_POST['pass']."' ";
        $result = mysqli_query($conn,$query);
       $count  = mysqli_num_rows($result);

        $row =mysqli_fetch_array($result);
        
        if($count==1)
        {
            
            // Fetch value from the database
                 $id = $row['Admin_ID'];
                $fname = $row['Admin_Fname'];
                $sname = $row['Admin_Sname'];

                $name = $fname."  ".$sname;
                session_start();
                //Using session pass full name and user id
                $_SESSION['name'] = $name;
                $_SESSION['adminid'] = $id;
                header("location:./Admin_HomePage.php");
            
           
        }
        else
        {
?>
<script>
alert('UserId or Password wrong!!!');
location.replace('../HTML/Admin_SignIn.html');
</script>

<?php
        }
    }

?>