<?php
session_start();

if (isset($_SESSION['email'])){
	session_destroy();
	header('location:stdslogin.php');
}
else{
	header("refresh:1; url=stdslogin.php");
}
?>