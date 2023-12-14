<?php
include "connections.php";

if (isset($_POST['delete'])) {
    $username = $_POST['username'];
    $query = "DELETE FROM user WHERE username='$username'";
    mysqli_query($conn, $query);
    header("Location: view.php" );
}

?>