<?php

if(empty($_POST))
{
    header("Location:../HTML/Signup.html");
}





$conn = mysqli_connect("localhost", "root", "" , "project wt");

/*if($conn)
{
    echo "Connected";
}
else{
    echo "error".mysqli_connect_error();
}*/

$query = "insert into user_details(User_Fname,User_Sname,User_Email,User_Number,User_Pass) values('".$_POST['fname']."','".$_POST['sname']."','".$_POST['eemail']."','".$_POST['number']."','".$_POST['pass']."')";

if(mysqli_query($conn, $query))
{
    echo "Successfully data enter";
}
else
{
    echo "Error".mysqli_error($conn);
}

header("Location:User_HomePage.php");



?>