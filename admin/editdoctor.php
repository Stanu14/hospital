<?php

if(!isset($_SESSION))
{
    session_start();
}
if(isset($_SESSION['hospital']))


{
  $staff_id = $_SESSION['hospital'];



?>

<?php
include "config.php";
$id=$_GET['id'];
$sql="select * from doctor  where id='$id'";
$query=mysqli_query($connection,$sql);
$row=mysqli_fetch_array($query);
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


    <div class="container">
<div class="col-md-12">

<h1>Edit Doctor</h1>
<form class="" action="editdoctor_submit.php" method="POST"  enctype="multipart/form-data">

  
 <div class="mb-3">
    <input type="hidden" class="form-control" name="id" value="<?=$row['id']?>" id="exampleInputname1">
  </div>

 <div class="mb-3">
    <label for="exampleInputTile" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="<?=$row['name']?>" id="exampleInputname1">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputAuthorname" class="form-label">Qualification</label>
    <input type="text" class="form-control" name="qualification" value="<?=$row['qualification']?>" id="exampleInputbrand1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPrice" class="form-label">Specialization</label>
    <input type="text" class="form-control" name="specialization" value="<?=$row['specialization']?>" id="exampleInputPrice">
  </div>

  <div class="mb-3">
    <label for="exampleInputPrice" class="form-label">Phone No.</label>
    <input type="text" class="form-control" name="phone" value="<?=$row['phone']?>" id="exampleInputPrice">
  </div>

  <div class="mb-3">
    <label for="exampleInputPrice" class="form-label">Email</label>
    <input type="text" class="form-control" name="email" value="<?=$row['email']?>" id="exampleInputPrice">
  </div>

  <div class="mb-3">
    <label for="exampleInputPrice" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" value="<?=$row['password']?>" id="exampleInputPrice">
  </div>
  
    <div class="d-grid gap-2">
 
 <br>
  <input type="submit" class="btn btn-info" value="Update Doctor">
 
 </div> 

</form>
</div>
  


<?php
include_once "bottom.php";
}
else{

header('Location:login.php');
}
 ?>
