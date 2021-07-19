<?php
include('connection.php');
error_reporting(0);

$idnum = $_GET['idnum'];

$query = "INSERT INTO admitcard (firstname, lastname, idnum) SELECT firstname, lastname, idnum FROM department WHERE idnum = '$idnum'";
$sq = "UPDATE forms SET dept='accept' WHERE idnum = '$idnum'";
$sql = "DELETE FROM department WHERE idnum = '$idnum'";
        
if (mysqli_query($con, $query)){
    echo 'Accepted';
}
else {
    echo 'Approved';
}

if (mysqli_query($con, $sq)){
    echo '!';
}
else {
    echo '!';
}

if (mysqli_query($con, $sql)){
    echo '!';
}
else {
    echo '!';
}

header("refresh:2; url=portal.php");

?>