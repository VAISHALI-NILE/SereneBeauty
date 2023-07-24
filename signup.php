<?php 
session_start();
$conn = new mysqli("sql100.infinityfree.com", "if0_34678114", "943Uw88q1QdrSMC","if0_34678114_serenebeauty")or die("Connect failed: %s\n". $conn -> error);


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
  $sql = "SELECT id  FROM customer WHERE email = '$email' AND password = '$password' ";
  $data = $conn->query($sql) ;
  $row = $data->fetch_assoc();
  $_SESSION['flag'] = 1;
	$id = $row["id"];
	$_SESSION['id'] = $id;
	header("Location: index2.php");
  echo "<br>New record created successfully";
} 


?>