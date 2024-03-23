<?php 
session_start();
$conn = new mysqli("sql107.infinityfree.com", "if0_36221387", "A39wg4zrYDpLcT","if0_36221387_serenebeauty") or die("Connect failed: %s\n". $conn -> error);
$_SESSION['conn'] = $conn;
$_SESSION['flag'] = 0;
?>
