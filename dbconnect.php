<?php 
session_start();
$conn = new mysqli("sql100.infinityfree.com", "if0_34678114", "943Uw88q1QdrSMC","if0_34678114_serenebeauty") or die("Connect failed: %s\n". $conn -> error);
$_SESSION['conn'] = $conn;
$_SESSION['flag'] = 0;
?>