<?php
include '../admin/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $appointment_id = $_POST['appointment_id'];
    $complaints = $_POST['complaints'];
    $tests = $_POST['tests'];
    $medicines = $_POST['medicines'];

    $query = "INSERT INTO prescriptions (appointment_id, complaints, tests, medicines)
              VALUES ('$appointment_id', '$complaints', '$tests', '$medicines')";

    if (mysqli_query($conn, $query)) {
        echo "Prescription Added!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
