<?php
if(!isset($_SESSION))
{
		session_start();
}
	unset($_SESSION["hospital"]);

	session_destroy();
 header("location:login.php");
 ?>
