<?php
include('connection.php');
error_reporting(0);

$idnum = $_GET['idnum'];

$sqh = "INSERT INTO hosteller (firstname, lastname, idnum) SELECT firstname, lastname, idnum FROM students WHERE idnum = '$idnum'";   

$sql = "INSERT INTO centrallibrary (firstname, lastname, idnum, email) SELECT firstname, lastname, idnum, email FROM students WHERE idnum = '$idnum'";

$sqd = "INSERT INTO deptlibrary (firstname, lastname, idnum, email) SELECT firstname, lastname, idnum, email FROM students WHERE idnum = '$idnum'";

$sqc = "INSERT INTO cooperativestore (firstname, lastname, idnum, phone) SELECT firstname, lastname, idnum, phone FROM students WHERE idnum = '$idnum'";
        
if (mysqli_query($con, $sqh)){
    echo '';
}
else {echo 'Tr';}

if (mysqli_query($con, $sql)){
    echo '';
}
else{echo 'y';}


if (mysqli_query($con, $sqd)){
    echo '';
}
else{echo '  ag';}


if (mysqli_query($con, $sqc)){
    echo '';
}
else{echo 'ain.';} 


header("refresh:1; url=home.php");

?>