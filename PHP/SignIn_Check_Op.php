<?php
if(empty($_POST))
{
    header("Location:../HTML/SignIn.html");
}

if($_SERVER['REQUEST_METHOD'] =='POST')
    {    
    
        $conn = mysqli_connect("localhost", "root", "" , "project wt");
        $query= "SELECT * FROM user_details WHERE User_Email = '".$_POST['email']."' AND User_Pass = '". $_POST['pass']."' ";
        
        $result = mysqli_query($conn,$query);
        $row =mysqli_fetch_array($result);
        $count  = mysqli_num_rows($result);
        if($count==1)
        {
                // Fetch value from the database
                $id = $row['User_Id'];
                $fname = $row['User_Fname'];
                $sname = $row['User_Sname'];

                $name = $fname."  ".$sname;
                session_start();
                //Using session pass full name and user id
                $_SESSION['name'] = $name;
                $_SESSION['userid'] = $id;
                header("location:./User_HomePage.php");
            
           
        }
        else
        {
?>
<script>
alert('UserId or Password wrong!!!');
location.replace('../HTML/SignIn.html');
</script>

<?php
        }
    }

?>