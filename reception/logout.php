<?php
if(!isset($_SESSION))
{
		session_start();
}
	unset($_SESSION["reception"]);

	session_destroy();
 header("location:login.php");
 ?>
