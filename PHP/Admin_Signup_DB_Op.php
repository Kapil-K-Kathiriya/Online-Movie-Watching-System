<?php

if(empty($_POST))
{
    header("Location:../HTML/Admin_Signup.html");
}



$conn = mysqli_connect("localhost", "root", "" , "project wt");

/*if($conn)
{
    echo "Connected";
}
else{
    echo "error".mysqli_connect_error();
}*/

$query = "insert into admin_details(Admin_Fname,Admin_Sname,Admin_Email,Admin_Number,Admin_Pass) values('".$_POST['fname']."','".$_POST['sname']."','".$_POST['eemail']."','".$_POST['number']."','".$_POST['pass']."')";

if(mysqli_query($conn, $query))
{
    echo "Successfully data enter";
   // header("Location:User_HomePage.php");

}
else
{
    echo "Error".mysqli_error($conn);
}




?>