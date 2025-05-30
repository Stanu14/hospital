<?php
include '../admin/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  date_default_timezone_set('Asia/Kolkata');
    $patient_id = $_POST['patient_id'];
    $doctorid =$_POST['doctor_id'];
    $current_date = date("Y-m-d");

    // Check if the patient already has an appointment today
     $check_appointment_query = "SELECT id FROM appointments WHERE patient_id = '$patient_id' AND DATE(appointment_date) = '$current_date'";
    $check_appointment_result = mysqli_query($connection, $check_appointment_query);

    if (mysqli_num_rows($check_appointment_result) > 0) {
        echo "Patient already has an appointment today.";
        exit;
    }



    // Insert appointment if payment is valid
    $insert_appointment_query = "INSERT INTO appointments 
    (patient_id, appointment_date,  payment_date, doctorid)
                                 VALUES ('$patient_id', NOW(), '$current_date','$doctorid')";

    if (mysqli_query($connection, $insert_appointment_query)) {
        echo "Appointment successfully booked.";
    } else {
        echo "Error booking appointment.";
    }
}
?>
