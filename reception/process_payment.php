<?php
include '../admin/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patient_id = $_POST['patient_id'];
    $amount = $_POST['amount'];
    $current_date = date("Y-m-d");

    // Validate amount
    if (!is_numeric($amount) || $amount <= 0) {
        echo "Invalid payment amount.";
        exit;
    }

    // Update the latest pending appointment to "paid"
    $update_payment = $connection->prepare("UPDATE appointments SET payment_status = 'paid', payment_date = ?, amount = ? WHERE patient_id = ? AND payment_status = 'pending' LIMIT 1");
    $update_payment->bind_param("sdi", $current_date, $amount, $patient_id);

    if ($update_payment->execute()) {
        echo "Payment successful. Appointment is now confirmed.";
    } else {
        echo "Payment failed. Try again.";
    }
}
?>
