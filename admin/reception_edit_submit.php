<?php
session_start();
if(isset($_SESSION['hospital'])){
    include "config.php";
    $name = $_POST['name'];
 $phone = $_POST['phone'];
 $email= $_POST['email'];

  $sql="update reception_register set name='$name',
                phone = '$phone', 
                email = '$email' 
            WHERE id = '$id'";

    $query = mysqli_query($connection, $sql);
 
  if ($query){
    echo "sucess";
}

else{
    "error";
}
    
   

  $sql = "update reception_register set name='$name', 
                phone = '$phone', 
                email = '$email' 
   where id ='$id'";
$query = mysqli_query($connection, $sql);
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