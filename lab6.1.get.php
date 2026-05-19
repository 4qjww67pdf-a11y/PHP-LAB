<?php
#to start session
session_start();

#get email form session_start
$email=$_SESSION['email'];

#to get password form session_start
$password=$_SESSION['password'];

#to print or show on imagegrabscreen
echo "Email: ".$email."<br/>";
echo "Password: ".$password."<br/>";
 ?>
