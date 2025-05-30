<?php
include "./config.php";
session_start();
if(isset($_SESSION['hospital'])){
    $name = $_POST['name'];
 $qualification = $_POST['qualification'];
 $specialization = $_POST['specialization'];
 $phone = $_POST['phone'];
 $email= $_POST['email'];
 $password = $_POST['password'];

    
    

    $sql= "INSERT INTO doctor ( name, qualification, specialization, phone, email, password) 
    VALUES ( '$name', '$qualification', '$specialization', '$phone', '$email', '$password')";
    $query = mysqli_query($connection, $sql);
 
if($query)
{
  ?>
  <script>
    alert("Doctor added successfully!");
    history.go(-1);
  </script>
  <?php
  // echo "success";
}
else{
    echo "error";
}
}
else{
header('location:adddoctor.php');

}
?>

