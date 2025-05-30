<?php
include '../admin/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['file'])) {
    $patient_id = $_POST['patient_id']; 
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = pathinfo($file_name, PATHINFO_EXTENSION);

    move_uploaded_file($file_tmp, "uploads/" . $file_name);

    $query = "INSERT INTO uploads (patient_id, file_name, file_type, uploaded_by)
              VALUES ('$patient_id', '$file_name', '$file_type', 'patient')";

    if (mysqli_query($conn, $query)) {
        echo "File Uploaded!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
