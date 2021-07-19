<?php
// database connection code
$con = mysqli_connect('localhost', 'root', '', 'shuats');

if (!$con){
    echo 'Not connected to server.';
}
$email = $_SESSION(['email']);

$hostelform = $_POST['hostelform'];
$clibform = $_POST['clibform'];
$dlibform = $_POST['dlibform'];
$cstoreform = $_POST['cstoreform'];

$sql = "SELECT * FROM forms (hostelform, clibform, dlibform, cstoreform) VALUES ('$hostelform', '$clibform', '$dlibform', '$cstoreform') WHERE $_SESSION($_POST['email']) = '$email'";
        
?>