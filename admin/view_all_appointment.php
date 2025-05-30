<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['reception'])) {
    $reception_id = $_SESSION['reception'];
    include "top.php";
?>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<style media="screen">
table tbody tr:nth-child(odd) { background-color: #f9f9f9; }
table thead tr:nth-child(1) { background-color: #000; color:#fff; }
table tbody tr:nth-last-child(1) { background-color: #fff!important; }
table tbody tr input { margin: 5px; }
table tr td, table tr th { padding:5px; }
</style>

<div class="container">
    <h2>Book All Appointment</h2>
    <table id="example">
        <thead>
            <tr>
                <th>sn</th>
                <td>Patient Name</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Appointment Date</td>
            </tr>
        </thead>
        <tbody>

<?php
$a = 1;
$sql = "SELECT 
            appointments.id AS app_id,
            appointments.appointment_date,
            patients.name,
            patients.email,
            patients.phone
        FROM appointments
        INNER JOIN patients ON appointments.patient_id = patients.id
        ORDER BY appointments.id DESC";

$query = mysqli_query($connection, $sql);

while ($row = mysqli_fetch_array($query)) {
?>
    <tr>
        <th><?= $a++; ?></th>
        <td><?= $row['name']; ?></td>
        <td><?= $row['email']; ?></td>
        <td><?= $row['phone']; ?></td>
        <td><?= substr($row['appointment_date'], 0, 10); ?></td>
    </tr>
<?php } ?>
        </tbody>
        <tfoot style="display:none">
            <tr>
                <th>sn</th>
                <td>Patient Name</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Appointment Date</td>
            </tr>
        </tfoot>
    </table>
</div>

<?php
include_once "bottom.php";
} else {
    header('Location:login.php');
}
?>