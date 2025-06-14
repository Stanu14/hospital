<?php

if(!isset($_SESSION))
{
    session_start();
}
if(isset($_SESSION['reception']))


{
  $reception_id = $_SESSION['reception'];



?>
    <?php include "top.php"; ?>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <h2 style="text-align:center;"> </h2>
    <style media="screen">
    table tbody tr:nth-child(odd) {
  background-color: #f9f9f9;
}
table thead tr:nth-child(1) {
background-color: #000;
color:#fff;
}
table tbody tr:nth-last-child(1) {
background-color: #fff!important;

}
table tbody tr input{
      margin: 5px;
}
table  tr td, table tr th{
  padding:5px;
}
    </style>


    <div class="container">
      <h2>Patient List</h2>

      <table id="example">
        <thead>
          <tr>
            <th>Sl.No</th>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Date</td>
            <td>view</td>
          </tr>
        </thead>
        <tbody>
            <?php
            $a=1;
            $sql1 = "SELECT * from `patients`  order by id desc";
                  $query1 = mysqli_query($connection,$sql1);
                  while ($row1 = mysqli_fetch_array($query1)) {
                    $id = $row1['id'];
                  ?>
                    <tr>
            <th><?=$a++;?></th>
            <td><?=$row1['name'];?></td>
            <td><?=$row1['email'];?></td>
            <td><?=$row1['phone'];?></td>
            <td><?=$row1['reg_date'];?></td>
            <td> <a href="patient_details.php?id=<?=$id?>"><i class="fa fa-eye"></i></a></td>
          </tr>
        <?php }  ?>
        </tbody>
        <tfoot>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tfoot>
      </table>



    </div>


<?php
include_once "bottom.php";
}
else{

header('Location:login.php');
}
 ?>
