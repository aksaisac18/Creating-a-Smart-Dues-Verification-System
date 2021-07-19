<?php
include('connection.php');
error_reporting(0);

$idnum = $_GET['idnum'];

$query = "INSERT INTO forms (firstname, lastname, idnum) SELECT firstname, lastname, idnum FROM hosteller WHERE idnum = '$idnum'";
$sq = "UPDATE forms SET hostelform='accept' WHERE idnum = '$idnum'";
$sql = "DELETE FROM hosteller WHERE idnum = '$idnum'";
        
if (mysqli_query($con, $query)){
    echo 'Accepted';
}
else {
    echo 'Approved';
}

if (mysqli_query($con, $sq)){
    echo ' and Updated';
}
else {
    echo ', Not Updated';
}


if (mysqli_query($con, $sql)){
    echo '!';
}
else {
    echo '!';
}

header("refresh:2; url=hostelp.php");

?>