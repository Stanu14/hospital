<?php
session_start();
include "../admin/config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['username'];
    $password = $_POST['userpass'];

    $query = "SELECT * FROM reception_register  WHERE email='$email' AND password='$password' ";
    $result = $connection->query($query);

    if ($result->num_rows > 0) {
        $_SESSION['reception'] = $email;
        header('location:index.php');
        echo "success";
    } else {
        echo "Invalid credentials";
    }
}
?>
