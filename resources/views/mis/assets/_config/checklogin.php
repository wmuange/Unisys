<?php
function check_login()
{
if(strlen($_SESSION['Admin_ID'])==0)
	{
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra="index.php";
		$_SESSION["Admin_ID"]="";
		header("Location: http://$host$uri/$extra");
	}
}
?>
