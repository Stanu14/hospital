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


    <div class="container">




  <div class="container" style="margin-top:3%;">
  	<div class="row">



  


 </div>
  </div>





    </div>


<?php
include_once "bottom.php";
}
else{

header('Location:login.php');
}
 ?>
