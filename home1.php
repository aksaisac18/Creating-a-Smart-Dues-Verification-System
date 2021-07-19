<?php 
session_start();
?>

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
                height: 600px;
               }
        </style>

        <nav class='nav'>
            <div class="row">
                <div class="col-xs-1 nb">
                    <h3>SHUATS</h3>
                </div>
                <div class="col-sm-3 col-sm-offset-8 lb">
                    <div><a href='status1.php'>Form Status</a></div>
                </div>
                <div class="col-sm-2 col-sm-offset-10 lb">
                    <div name='logout' action='logout1.php'><a href='logout1.php'>Logout</a></div>
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
                    header('location:stdslogin.php');
                }
                ?>
                </div>

                <div class="contentBI panel panel-default home">
                    <h4 class="panel-heading text-center">FORMS</h4>
                    <p>Fill Form in All CAPS.</p>
                    <div class="panel-body">
                        <form action="home1op.php" method="POST">
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
                                <label for="ID"><b>ID Number</b></label>
                                <br>
                                    <tr>
                                        <td name='idnum'> <?php echo $row['idnum']; ?></td>
                                    </tr>
                            </div>
                                
                            <div class="form-group">
                                <label for="dept"><b>Department</b></label>
                                <input type="text" class="form-control" name="dept" id='dept'/>
                            </div>
                    
                            <div class="form-group">
                                <label for="email"><b>College Email</b></label>
                                <br>
                                    <tr>
                                        <td name='email'> <?php echo $row['email']; ?></td>
                                    </tr>
                            </div>
                    
                            <div class="form-group">
                                <label for="phone"><b>Phone Number</b></label>
                                <input type="telephone" class="form-control" name="phone" id='phone'/>
                            </div>
                            
                            <?php
                                echo "
                                <td><a href='home1op.php?idnum=$row[idnum]' name='Submit' value='Submit'>Submit
                                </tr>";
                            ?>
                            <br><br><br>
                        </form>
                </div>   
            </div>
    </body>
</html>

