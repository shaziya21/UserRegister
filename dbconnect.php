<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');

$Firstname = $_POST['Firstname'];
$Lastname = $_POST["Lastname"];
$Password = $_POST["Password"];
$ConfirmPassword = $_POST["ConfirmPassword"];

$s= " select * from user where name = '$Firstname'  ";

$result = mysqli_query($con , $s);
$num = mysqli_num_rows($result); # it will count the no of rows how many time this name appeared in the database table.

if ($num == 1)
{
  echo "Username Already Taken.";
}
else {
  $reg= "INSERT INTO user (`Firstname`, `Lastname`, `Email`, `Password`, `Confirm Password`) VALUES ('$Firstname', '$Lastname', '$Email','$Password','$ConfirmPassword')";
  mysqli_query($con , $reg);
  echo "Registration Successfull";
}



?>
