<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = date('Y-m-d');
    $password = $_POST['password'];
    // Check if patient exists
    $sql = "SELECT * FROM reception_register WHERE phone = '$phone'";
    $query = mysqli_query($connection, $sql);
    if (mysqli_num_rows($query)> 0) {
        echo "Patient already registered!";
    } else {
        $stmt = "INSERT INTO reception_register (name, email, phone,  date,password) VALUES ('$name', '$email', '$phone', '$date','$password')";
        $query= mysqli_query($connection, $stmt);
        if ($query) {
        echo "Patient Registered Successfully";
        } else {
            echo "Error: " . $connection->error;
        }
    }
}
?>
