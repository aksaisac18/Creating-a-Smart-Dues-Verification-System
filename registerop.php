<?php
// database connection code

$con = mysqli_connect('localhost', 'root', '', 'shuats');

if (!$con){
    echo 'Not connected to server.';
}

if (mysqli_select_db($con, 'shuats')){
    echo 'Database ';
}

            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $gender = $_POST['gender'];
            $password = $_POST['password'];
            $department = $_POST['department'];
            $idnum = $_POST['idnum'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

$sql = "INSERT INTO students (firstname, lastname, gender, password, department, idnum, email, phone) VALUES ('$firstname', '$lastname', '$gender', '$password', '$department', '$idnum', '$email', '$phone')";
        
if (mysqli_query($con, $sql)){
    echo 'Inserted';
}
else {
    echo 'Inserted';
}

header("refresh:1; url=hds.php");

?>