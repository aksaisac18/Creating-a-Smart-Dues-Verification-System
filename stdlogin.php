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
    </head>

    <body>
        <div class="container">
            <div class='row'>
                <div class='col-xs-6 col-xs-offset-3'>
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center">
                            <h1>Student Login</h1>
                        </div>
                        <form id="login" action="login.php" method='POST'>
                            <div class="form-body">
                                <p>Don't have an account? <a href='register.php'>Register</a></p>
                                <br>
                                <input type='email' name="email" placeholder="Email">
                                <br><br>
                                <input type='password'name="password" placeholder='Password'><br><br>
                                
                                <input type="submit" value="Login" name="login">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>

