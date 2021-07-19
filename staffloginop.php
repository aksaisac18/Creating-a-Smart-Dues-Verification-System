<?php
	$email = $_POST['email'];
	$password = $_POST['password'];

	$con= new mysqli('localhost', 'root', '', 'shuats');
	if($con->connect_error){
		die('Failed to connect: '.$con->connect_error);
	}
	else{
		$stmt = $con->prepare("select * from staff where email= ?");
		$stmt->bind_param('s',$email);
		$stmt->execute();
		$stmt_result=$stmt->get_result();
		if($stmt_result->num_rows>0){
			$data = $stmt_result->fetch_assoc();
			if($data['password']===$password){
				echo "Login Successful";
				session_start();
        		$_SESSION['shuats']='true';
        		header('location:portal.php');
			}
			else{
				echo "Invalid email or password";
			}
		}
		else{
			echo "Invalid email or password";
		}
	}
?>