<?php
include "config.php";
$id = $_GET['id'];



// $sql ="select * from  product where id = '$id'";
// $query = mysqli_query($con,$sql);
// $row= mysqli_fetch_array($query);




 $sql = "delete from doctor where id ='$id'";
$query=mysqli_query($connection,$sql);

if($query){
    ?>
    <script>
    alert("success");
    window.location.href = "viewdoctor.php";
  </script>
  <?php
}
else{
    echo "error";
}
?>
