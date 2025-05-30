<?php
if(!isset($_SESSION))
{
		session_start();
}
	unset($_SESSION["Doctor"]);

	session_destroy();
 header("location:login.php");
 ?>
