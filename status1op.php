<?php
// database connection code
$con = mysqli_connect('localhost', 'root', '', 'shuats');

if (!$con){
    echo 'Not connected to server.';
}
$email = $_SESSION(['email']);

$clibform = $_POST['clibform'];
$dlibform = $_POST['dlibform'];
$cstoreform = $_POST['cstoreform'];

$sql = 'SELECT * FROM forms (clibform, dlibform, cstoreform) VALUES ('$clibform', '$dlibform', '$cstoreform') WHERE $_SESSION($_POST['email']) = '$email'';
        
?>