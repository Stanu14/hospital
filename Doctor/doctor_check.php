<?php

if(!isset($_SESSION))
{
    session_start();
}
if(isset($_SESSION['doctor']))


{
  $staff_id = $_SESSION['doctor'];



?>
    <?php include "top.php";  
    ?>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <h2 style="text-align:center;"> </h2>
    <style media="screen">
    table tbody tr:nth-child(odd) {
  background-color: #f9f9f9;
}
table thead tr:nth-child(1) {
background-color: #111;
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

  <div class="container mt-4">
    <h2 class="mb-4">Doctor Check Form</h2>
    <form action="doctor_check_submit.php" method="POST">
        <div class="row mb-3">
            <div class="col">
                <?php
                    $aid = $_GET['id'];
                    $sql="select * from appointments where id='$aid'";
                $query=mysqli_query($connection,$sql);
                $row=mysqli_fetch_array($query);
                $pid = $row['patient_id'];
                ?>
                
                <input type="hidden" class="form-control" id="patient_id" name="patient_id"  value="<?=$pid?>" required>
            </div>
            <div class="col">
                
                <input type="hidden" class="form-control" id="appointment_id" value="<?=$aid?>" name="appointment_id" required>
            </div>
           
        </div>

        <div class="row mb-3">
            <div class="col">
                <?php
                $email = $_SESSION['doctor'];
                $sql="select * from doctor where email='$email'";
                $query=mysqli_query($connection,$sql);
                $row=mysqli_fetch_array($query)
                ?>
                <input type="hidden" class="form-control" id="doctor_id"  value="<?=$row['id']?>"doctor_id" required>
            </div>
            <div class="col">
                <label for="problem" class="form-label">Problem</label>
                <textarea class="form-control" id="problem" name="problem" required></textarea>
            </div>
        </div>

        <div class="mb-3">
            <label for="medicine" class="form-label">Medicine</label>
            <input type="text" class="form-control" id="medicine" name="medicine" required>
        </div>

        <div class="mb-3">
            <label for="diagnosis" class="form-label">Diagnosis Text</label>
            <textarea class="form-control" id="diagnosis" name="diagnosis" rows="3" required></textarea>
        </div>

     <div class="mb-3">
            <label for="diagnosis" class="form-label">Prescription Text</label>
            <textarea class="form-control" id="prescription" name="prescription" rows="3" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
   
<div>
    <br><br>
<h3>Previous Record</h3>
<table style="width:100%" border="1">
<?php


$sql = "select * from doctor_check where pid = '$pid' order by id desc";
$query = mysqli_query($connection, $sql);
while($row = mysqli_fetch_array($query)){
  ?>
<p><?=substr($row['created_at'],0,10)?></p>

  <p><?=$row['problem']?></p>
  <p><?=$row['medicine']?></p>
  <p><?=$row['diagnosis']?></p>
  <p><?=$row['prescription']?></p>

  <hr>
  <?php
}
 ?>

<?php
include_once "bottom.php";
}
else{

header('Location:login.php');
}
 ?>
