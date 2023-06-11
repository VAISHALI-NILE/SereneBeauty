<?php 
session_start();
$conn = new mysqli("localhost:3307", "root", "","serenebeauty") or die("Connect failed: %s\n". $conn -> error);
$_SESSION['conn'] = $conn;
echo "Connected successfully";
?>