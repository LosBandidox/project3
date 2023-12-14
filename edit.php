<?php
include "connections.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$Userid = $_POST['Userid'];


$query = "UPDATE parlour SET email='$email', password='$password', Userid='$Userid' WHERE username='$username'";
mysqli_query($conn, $query);

header("Location: view.php"); 
?>
