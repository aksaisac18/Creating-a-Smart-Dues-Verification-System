<?php 
session_start();
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

             .home{
                height:800px;
             }
        </style>

        <nav class='nav'>
            <div class="row">
                <div class="col-xs-1 nb">
                    <h3>SHUATS</h3>
                </div>
                <div class="col-sm-3 col-sm-offset-8 lb">
                    <div><a href='status.php'>Form Status</a></div>
                </div>
                <div class="col-sm-2 col-sm-offset-10 lb">
                    <div name='logout' action='logout.php'><a href='logout.php'>Logout</a></div>
                </div>
                
            </div>
        </nav>

    </head>
    
    <body>
        <div class="BI">
            <div><br>
                
                <div>
                <?php 
                if (isset($_SESSION['email'])){
                    echo "Welcome " .$_SESSION['email'];
                }
                else{
                    header('location:stdlogin.php');
                }
                ?>
                </div>

                <div class="contentBI panel panel-default home">
                    <h4 class="panel-heading text-center">FORMS</h4>
                    <p>Fill Form in All CAPS.</p>
                    <div class="panel-body">
                        <form action="homeop.php" method="POST">
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <?php
                                    $email=$_SESSION['email'];
                                    //$idnum='17BTCSE003';
                                    $con = mysqli_connect('localhost', 'root', '', 'shuats');
                                    if (!$con){
                                        echo 'Not connected to server.';
                                    }

                                $sql2 = "SELECT * FROM students WHERE email='$email'";
                                $result = mysqli_query($con, $sql2);
                                $row =mysqli_fetch_assoc($result);
                                ?>    <br>       
                                    <tr>
                                        <td name='firstname'> <?php echo $row['firstname']; ?></td>
                                    </tr>
                            </div>
                                
                            <div class="form-group">
                                <label for="lastame">Last Name</label>
                                    <br>
                                    <tr>
                                        <td name='lastname'> <?php echo $row['lastname']; ?></td>
                                    </tr>
                            </div>
                            
                            <div class="form-group">
                                <label for="ID">ID Number</label>
                                <br>
                                    <tr>
                                        <td name='idnum'> <?php echo $row['idnum']; ?></td>
                                    </tr>
                            </div>
                            
                            <div class='row'>
                                <label class="radio-inline"> <input type="radio" name="hostel" value="womenshostel"/><b> Women's Hostel</b></label>
                                <label class='radio-inline'> <input type="radio" name="hostel" value="menshostel"/><b> Men's Hostel</b></label>
                            </div>
                            <br><br>

                            <div>
                                <b>Hostel Name:</b><br>
                                    <label class="dropdown" name='hostelname'> 
                                        <select name="hostelname">
                                            <option value='OldHostel'>Old Hostel</option>
                                            <option value='NewHostel'>New Hostel</option>
                                            <option value='NewHostel1'>New Hostel 1</option>
                                            <option value='NewHostel2A'>New Hostel 2A</option>
                                            <option value='NewHostel2B'>New Hostel 2B</option>
                                            <option value='Ethlind'>Ethlind</option>
                                            <option value='OBC'>OBC</option>
                                            <option value='International'>International</option>
                                        </select> 
                                    </label>
                            </div>
                            <br>
            
                            <div>
                                <b>Hostel Room Number:</b><br>
                                <input type='text' placeholder='Room Number' name='roomnum'>
                            </div>
                            <br>
                            
                            <div class="form-group">
                                <label for="dept">Department</label>
                                <input type="text" class="form-control" name="dept" id='dept'/>
                            </div>
                    
                            <div class="form-group">
                                <label for="email">College Email</label>
                                <br>
                                    <tr>
                                        <td name='email'> <?php echo $row['email']; ?></td>
                                    </tr>
                            </div>
                    
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="telephone" class="form-control" name="phone" id='phone'/>
                            </div>
                            
                    <?php
                        echo "
                            <td><a href='homeop.php?idnum=$row[idnum]' name='Submit' value='Submit'>Submit
                            </tr>";
                    ?>

                    <br><br><br>
                    </form><br><br>
                </div>
            </div>
        </div>
    </body>
</html>
