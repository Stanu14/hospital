<?php

if(!isset($_SESSION))
{
    session_start();
}
if(isset($_SESSION['hospital']))


{
  $staff_id = $_SESSION['hospital'];



?>


    <?php include "top.php";  
    ?>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
    <h2 style="text-align:center;">Reception List</h2>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table thead tr {
            background-color: #111;
            color: #fff;
        }

        table tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        table tbody tr:last-child {
            background-color: #fff !important;
        }

        table td, table th {
            padding: 10px;
            border: 1px solid #ddd;
        }

        table tbody tr input {
            margin: 5px;
        }

        a {
            text-decoration: none;
            color: blue;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>

<table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone No.</th>
                <th>Email</th>
                 <th>date</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "config.php";
            $sql1 = "select * from reception_register";
            $query = mysqli_query($connection, $sql1);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['phone'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['date'] ?></td>
                    <td><a href="reception_edit.php?id=<?= $row['id'] ?>">Edit</a></td>
                    <td><a href="reception_delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this doctor?')">Delete</a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    
  


<?php
include_once "bottom.php";
}
else{

header('Location:login.php');
}
 ?>
