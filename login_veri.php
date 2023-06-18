<?php 
session_start();
$conn = new mysqli("localhost:3307", "root", "","serenebeauty") or die("Connect failed: %s\n". $conn -> error);

echo "Connected successfully";

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT id  FROM customer WHERE email = '$username' AND password = '$password' ";
$data = $conn->query($sql) ;
if($data->num_rows > 0){
	$row = $data->fetch_assoc();
	$id = $row["id"];
	$_SESSION['id'] = $id;

	$_SESSION['flag'] = 1;
	$_SESSION['conn'] = $conn;
	if($_SESSION['id'] === '3')
	{
		header("Location: ad_services.php");
	}
	else{
		header("Location: index2.php");
	}
	

}
else{
	echo "User does not exist";
}
?>