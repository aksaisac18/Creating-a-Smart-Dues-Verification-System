<?php
session_start();

$con= new mysqli('localhost', 'root', '', 'shuats');

	if($con->connect_error){
		die('Failed to connect: '.$con->connect_error);
	}



if(isset($_POST['login']))
{
	if(empty($_POST['email']) || empty($_POST['password']))
	{
		echo "Invalid Email or Password";
	}
	else
	{
		$query="SELECT * FROM students where email='".$_POST['email']."' and password='".$_POST['password']."'";
		$result=mysqli_query($con,$query);

		if(mysqli_fetch_assoc($result))
		{
			if ($_SESSION['email']=$_POST['email']){	
			echo "Welcome " .$_SESSION['email'];			
			header('location:home.php');
			}
			else{
				echo "invalid";
				}
		}
		else
		{
			echo "Invalid ID and Password";
		}
	}
}
else
{
	echo "Invalid";
}
?>