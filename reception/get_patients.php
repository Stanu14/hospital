<?php
include '../admin/config.php';

$result = $conn->query("SELECT * FROM patients ORDER BY id DESC");

$patients = [];
while ($row = $result->fetch_assoc()) {
    $patients[] = $row;
}

echo json_encode($patients);
?>
