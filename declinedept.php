<?php
include('connection.php');
error_reporting(0);

$idnum = $_GET['idnum'];

$query = "INSERT INTO forms (firstname, lastname, idnum) SELECT firstname, lastname, idnum FROM department WHERE idnum = '$idnum'";
$sq = "UPDATE forms SET dept='decline' WHERE idnum = '$idnum'";
$sql = "DELETE FROM department WHERE idnum = '$idnum'";

        
if (mysqli_query($con, $query)){
    echo "Approved";
}
else {
    echo 'Declined';
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

header("refresh:1; url=portal.php");

?>