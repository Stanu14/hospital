<?php
include '../admin/config.php';

$result = $conn->query("SELECT * FROM patients ORDER BY id DESC");

echo "<table border='1'>
<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Last Visit</th>
<th>Payment Status</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>".$row['name']."</td>
    <td>".$row['email']."</td>
    <td>".$row['phone']."</td>
    <td>".$row['last_visit']."</td>
    <td>".$row['payment_status']."</td>
    </tr>";
}
echo "</table>";
?>
