<?php 
session_start();
$conn = $_SESSION['conn'];
$_SESSION['flag'] = 1;

$f_name = $_POST["first-name"];
$l_name = $_POST["last-name"];
$email = $_POST["email"];
$mob_no = $_POST["phone"];
$age = $_POST["age"];
$city = $_POST["city"];
$area = $_POST["area"];
$password = $_POST["password"];

$sql = "INSERT INTO customer (f_name,l_name,email,mob_no,age,city,area,password) 
VALUES('$f_name' ,' $l_name' ,'$email' , $mob_no , $age , '$city' , '$area',
'$password')";


if ($conn->query($sql) === TRUE) 
{
	header("Location: index2.php");
  echo "<br>New record created successfully";
} 


?>