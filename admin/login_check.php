<?php
if(!isset($_SESSION))
{
      session_start();
}
if(!isset($_SESSION['admin']))
{
  $username = $_POST['username'];

  $userpass = $_POST['userpass'];
   if ($username!='' && $userpass!='')
{
// connect to the server and select database
   require_once('config.php');


   // to prevent mysql injection
   $username = stripcslashes($username);
   $userpass = stripcslashes($userpass);
   $username = mysqli_real_escape_string($connection,$username);
   $userpass = mysqli_real_escape_string($connection,$userpass);



   // Query the database for user
   $query = "SELECT * FROM admin where username  = '$username' and userpass = '$userpass'";
   $result = mysqli_query($connection,$query)
                or die("Failed to query database ".mysqli_error());
   $row = mysqli_fetch_array($result);
   if ($row['username'] == $username && $row['userpass'] == $userpass )
   {


          $_SESSION['admin'] = $username;
          header("location: index.php");

   	}
    else
    {
   		header("location: login.php");
      // echo "2";
   	}
   }
   else
   {
   header("location: login.php");
  // echo "3";
   }
}


else{
  header("location: login.php");
}
?>
