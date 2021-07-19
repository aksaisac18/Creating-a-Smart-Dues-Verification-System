<?php
include('connection.php');
error_reporting(0);

$idnum = $_GET['idnum'];

$query = "INSERT INTO forms (firstname, lastname, idnum) SELECT firstname, lastname, idnum FROM centrallibrary WHERE idnum = '$idnum'";
$sq = "UPDATE forms SET clibform='decline' WHERE idnum = '$idnum'";
$sql = "DELETE FROM centrallibrary WHERE idnum = '$idnum'";
        
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

header("refresh:2; url=libp.php");

?>