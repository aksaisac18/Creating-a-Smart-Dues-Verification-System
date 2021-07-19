<?php
include('connection.php');
error_reporting(0);

$idnum = $_GET['idnum'];

$sqh = "INSERT INTO cooperativestore (firstname, lastname, idnum, phone) SELECT firstname, lastname, idnum, phone FROM students WHERE idnum = '$idnum'";   
        
if (mysqli_query($con, $sqh)){
    echo '';
}
else {echo 'Error';}

header("refresh:1; url=store.php");

?>