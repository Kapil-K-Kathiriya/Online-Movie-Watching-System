<?php
session_start();
session_destroy();
header("location:../HTML/SignIn.html");
?>