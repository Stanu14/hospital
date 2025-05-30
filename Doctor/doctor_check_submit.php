<?php
session_start();
include "../admin/config.php";

$patient_id = $_POST['patient_id'];
$appointment_id = $_POST['appointment_id'];
$problem = $_POST['problem'];
$medicine = $_POST['medicine'];
$diagnosis = $_POST['diagnosis'];
$prescription = $_POST['prescription'];

$email = $_SESSION['doctor'];
$doctor_query = "SELECT id FROM doctor WHERE email = '$email'";
$result = mysqli_query($connection, $doctor_query);
$doctor_row = mysqli_fetch_assoc($result);
$doctor_id = $doctor_row['id'];

$sql = "INSERT INTO doctor_check (pid, aid, doctorid, problem, medicine, diagnosis, prescription)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $connection->prepare($sql);
$stmt->bind_param("iiissss", $patient_id, $appointment_id, $doctor_id, $problem, $medicine, $diagnosis, $prescription);

if ($stmt->execute()) {
    echo "✔️ Doctor check submitted successfully!";
    // Optionally redirect
    // header("Location: some_success_page.php");
} else {
    echo "❌ Error: " . $stmt->error;
}

$stmt->close();
$connection->close();
?>
