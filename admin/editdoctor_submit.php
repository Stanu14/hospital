<?php
session_start();
if(isset($_SESSION['hospital'])){
    include "config.php";
    $name = $_POST['name'];
    $qualification = $_POST['qualification'];
 $specialization = $_POST['specialization'];
 $phone = $_POST['phone'];
 $email= $_POST['email'];

  $sql="update doctor set name='$name',qualification = '$qualification', 
                specialization = '$specialization', 
                phone = '$phone', 
                email = '$email' ";
            // WHERE id = '$id'";
          $query = mysqli_query($con,$sql);
  if ($query){
//     $query = mysqli_query($connection, $sql);
 
//   if ($query){
    echo "sucess";
}

else{
    "error";
}
    
   

  $sql = "update doctor set name='$name', qualification = '$qualification', 
                specialization = '$specialization', 
                phone = '$phone', 
                email = '$email' ";
//    where id ='$id'";
$query = mysqli_query($con, $sql);
if($query){
    echo "success";
}

else{
    "error";
}
   
    }

else{
    header('location: login.php');
}
?>