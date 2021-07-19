<?php
    $con = mysqli_connect('localhost', 'root', '', 'shuats');
    $sql = "SELECT * FROM deptlibrary";
    $result = mysqli_query($con, $sql);
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

               thead tr {
                    background-color: green;
                    color: #ffffff;
                    opacity: 0.8;
                    font-weight: bold;
                }

                th, td {
                    padding: 12px 15px;
                }

                tbody tr {
                    border-bottom: 1px solid #dddddd;
                }

                table{
                    margin-left: 100px;
                }

                .ph{
                    margin-left: 100px;
                }

                .nav{
                    width: 124%;
                    height: 40px;
                    margin-left: 10px;
                    background-color: rgba(35, 185, 25, 0.2);
                }
        </style>
        
        <nav class="nav">
            <div class="row">
                <div class="col-xs-1 nb">
                    <h3><a href="portal.php">SHUATS</a></h3>
                </div>
                <div class="col-xs-4 col-xs-offset-6">
                    <div class="col-xs-2"><a href="hostelp.php">Hostel</a></div>
                    <div class="col-xs-2 l"><a href="libp.php">Library</a></div>
                    <div class="col-xs-3 cs"><a href="storep.php">Cooperative Store</a></div>
                    <div class="col-xs-3 d"><a href="dlibp.php">Dept. Lib</a></div>
                    <div class="col-xs-2"><a href="acard.php">Admit Card</a></div>
                </div>
            </div>
        </nav>
        
    </head>
    
    <body>
        <div>
            <h1 class="ph">DEPARTMENTAL LIBRARY</h1>
            <table class='table-hover'>
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>ID Number</th>
                        <th>Email</th>
                        <th>Response</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        while($row =mysqli_fetch_assoc($result))
                        {
                    ?>
                        
                        <tr>
                            <td name='firstname'> <?php echo $row['firstname']; ?></td>
                            <td name='lastname'> <?php echo $row['lastname']; ?></td>
                            <td name='idnum'> <?php echo $row['idnum']; ?></td>
                            <td> <?php echo $row['email']; ?></td>

                    <?php
                            echo "
                            <td><a href='acceptdlib.php?idnum=$row[idnum]' name='accept'>Accept
                                <a href='declinedlib.php?idnum=$row[idnum]' name='decline'>Decline</td>
                            </tr>";

                        }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
