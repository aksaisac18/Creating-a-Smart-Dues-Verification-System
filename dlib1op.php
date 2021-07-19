<?php
include('connection.php');
error_reporting(0);

$idnum = $_GET['idnum'];

$sqh = "INSERT INTO deptlibrary (firstname, lastname, idnum, email) SELECT firstname, lastname, idnum, email FROM students WHERE idnum = '$idnum'";   
        
if (mysqli_query($con, $sqh)){
    echo '';
}
else {echo 'Error';}

header("refresh:1; url=dlib1.php");

?>