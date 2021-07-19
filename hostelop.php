<?php
include('connection.php');
error_reporting(0);

$idnum = $_GET['idnum'];

$sqh = "INSERT INTO hosteller (firstname, lastname, idnum) SELECT firstname, lastname, idnum FROM students WHERE idnum = '$idnum'";   
        
if (mysqli_query($con, $sqh)){
    echo '';
}
else {echo 'Error';}

header("refresh:1; url=home.php");

?>