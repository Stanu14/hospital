<?php
include '../admin/config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    // Check if patient exists
    $sql = "SELECT * FROM patients WHERE phone = '$phone'";
    $query = mysqli_query($connection, $sql);
    if (mysqli_num_rows($query)> 0) {
        echo "Patient already registered!";
    } else {
        $stmt = "INSERT INTO patients (name, email, phone) VALUES ('$name', '$email', '$phone')";
        $stmt = mysqli_query($connection, $stmt);
        if ($stmt) {
        echo "Patient Registered Successfully";
        } else {
            echo "Error: " . $connection->error;
        }
    }
}
?>
