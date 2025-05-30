<?php

if(!isset($_SESSION))
{
    session_start();
}
if(isset($_SESSION['reception']))



  $staff_id = $_SESSION['reception'];



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
      <h2>Patient Details</h2>



            <?php
          $id = $_GET['id'];
            $sql1 = "SELECT * from `patients`  where id = '$id'";
                  $query1 = mysqli_query($connection,$sql1);
                  while ($row1 = mysqli_fetch_array($query1)) {
                    $id = $row1['id'];
                  ?>
                    <tr>

            <p>Name: <?=$row1['name'];?></p>
            <p>Email: <?=$row1['email'];?></p>
            <p>Phone: <?=$row1['phone'];?></p>
            <p>Registered Date: <?=$row1['reg_date'];?></p>


            
              <form action="book_appointment.php" method="post">

            
            <input type="hidden" name="patient_id" value="<?=$row1['id']?>">
            <br>
            <br>
            
            <select name="doctor_id">
              <option value="">select</option>
                <?php
                $sql11 = "select * from doctor";
                $query11=mysqli_query($connection,$sql11);
                while($row11 = mysqli_fetch_array($query11)){
                ?>
                <option value="<?=$row11['id']?>"><?=$row11['name']?>(<?=$row11['specialization']?>)</option>
              <?php
            }?>
            </select>
                
            <br><br>
             <button class='btn btn-primary '>Take Appointment</button>
              </form>
         
                            

<br><br>
<h3>Previous Appointment</h3>
<table style="width:100%" border="1">
<?php
$sql = "select * from appointments where patient_id = '$id' order by id desc";
$query = mysqli_query($connection, $sql);
while($row = mysqli_fetch_array($query)){
  ?>
  <tr>
    <td><?=$row['appointment_date']?></td>
    <td><?=$row['amount']?></td>
    <td><?=$row['payment_status']?></td>
  </tr>
  <?php
}
 ?>
</table>
    </div>


<?php
include_once "bottom.php";
}
{

header('Location:login.php');
}
 ?>