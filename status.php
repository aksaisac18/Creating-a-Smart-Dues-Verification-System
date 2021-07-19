<?php 
session_start();
error_reporting(0);
if (isset($_SESSION['email'])){
}
else{
    header('home.php');
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type=" text/css">

        <!-- jQuery library -->
        <script src="bootstrap/js/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="fyp.css">
        
        <style>a:link{color:black;}
               a:visited{color:black;}
        </style>

        <nav class='nav'>
            <div class="row">
                <div class="col-xs-1 nb">
                    <h3>SHUATS</h3>
                </div>
                <div class="col-sm-3 col-sm-offset-8 lb">
                    <div><a href='home.php'>Home</a></div>
                </div>
                <div class="col-sm-2 col-sm-offset-10 lb">
                    <div name='logout' action='logout.php'><a href='logout.php'>Logout</a></div>
                </div>
                
            </div>
        </nav>

    </head>

    <body>
        <div class="BI">
            <div class="container">
                <div class="panel panel-default contentBI status">
                    <div class="panel-heading text-center">
                        <h4>FORM STATUS</h4>
                    </div>
                    
                    <div class="panel-body">
                        <form class="SB" action='statusop.php' method="POST">
                            <div class="row" name='hostelform'>
                                 <div class="col-xs-6">
                                     <h4>Hostel Form</h4>
                                 </div>
                                 
                                 <div class="col-xs-5" name='hostelform'>
                                    <?php
									$email=$_SESSION['email'];
									//$idnum='17BTCSE003';
                                    $con = mysqli_connect('localhost', 'root', '', 'shuats');
                                    if (!$con){
                                        echo 'Not connected to server.';
                                    }

                                   // $hostelform = $_POST('hostelform');
                                
                                $sql2 = "SELECT * FROM students WHERE email='$email'";
                            
                                $result2 =mysqli_query($con, $sql2);
                                $row2 = mysqli_fetch_array($result2);
                                $idnum= $row2['idnum']; 

                                $sql = "SELECT * FROM forms WHERE idnum ='$idnum'";
							    $result = mysqli_query($con, $sql);
						        $row = mysqli_fetch_array($result);

                                    if ($result){
                                        if ($row["hostelform"] == 'accept'){
                                            echo 'Accepted';
                                        }
                                        else if ($row["hostelform"]== 'decline'){
                                            echo 'Declined. ';
                                            echo "<a href='hostel.php'> Click to resubmit</a>";
                                        }
                                        else {
                                            echo 'Pending/Form not filled.';
                                        }
                                    }
                                    ?>
                                 </div>
                            </div>
                            
                            <br><br>

                            <div class="row">
                                 <div class="col-xs-6">
                                     <h4>Central Library Form</h4>
                                 </div>
                                 
                                 <div class="col-xs-5" name='clibform'>
                                    <?php
                                    if (mysqli_query($con, $sql)){
                                        if ($row["clibform"] == 'accept'){
                                            echo 'Accepted';
                                        }
                                        else if ($row["clibform"] == 'decline'){
                                            echo 'Declined. ';
                                            echo "<a href='lib.php'>Click to resubmit</a>";
                                        }
                                        else {
                                            echo 'Pending/Form not filled.';
                                        }
                                    }
                                    ?>
                                 </div>
                            </div>

                            <br><br>
                            
                            <div class="row">
                                 <div class="col-xs-6">
                                     <h4>Departmental Library Form</h4>
                                 </div>
                                 
                                 <div class="col-xs-5" name='dlibform'>
                                    <?php
                                    if (mysqli_query($con, $sql)){
                                        if ($row["dlibform"] == 'accept'){
                                            echo 'Accepted';
                                        }
                                        else if ($row["dlibform"] == 'decline'){
                                            echo 'Declined. ';

                                            echo "<a href='dlib.php'>Click to resubmit</a>";
                                        }
                                        else {
                                            echo 'Pending/Form not filled.';
                                        }
                                    }
                                    ?>
                                 </div>
                            </div>
                            
                            <br><br>

                            <div class="row">
                                 <div class="col-xs-6">
                                     <h4>Cooperative Store Form</h4>
                                 </div>
                                 
                                 <div class="col-xs-5">
                                    <div class="form-group">
                                        <div>
                                        <?php
                                        if (mysqli_query($con, $sql)){
                                            if ($row["cstoreform"] == 'accept'){
                                                echo 'Accepted';
                                            }
                                            elseif ($row["cstoreform"] == 'decline'){
                                                echo 'Declined. ';
                                                echo "<a href='store.php'>Click to resubmit</a>";
                                            }
                                            else {
                                                echo 'Pending/Form not filled.';
                                            }   
                                        }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

<?php 
if ($row["cstoreform"] == 'accept' && $row["dlibform"] == 'accept' &&  $row["clibform"] == 'accept' && $row["hostelform"] == 'accept' )
{
                echo "<center><input type='submit' id='but' value='Submit to Department'></center>";
}
$sql1 = "INSERT INTO department (firstname, lastname, idnum) SELECT firstname, lastname, idnum FROM forms WHERE idnum = '$idnum'";
                
if (mysqli_query($con, $sql1)){
    echo '';
}
else {
    echo '';
}
?>

<div class='text-center'>
<?php
if (mysqli_query($con, $sql)){
    if ($row["dept"] == 'accept'){
        echo "Get your Admit Card from Department.";
        }
    elseif ($row["dept"] == 'decline'){
        echo 'Declined. Please Resubmit.';
        }
    else {
        echo '';
        }   
    }

header("refresh:20; url=status.php");
?>
</div>


                </div>
            </div>
        </div>
    </body>
</html>