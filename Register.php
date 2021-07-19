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
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center">
                            <h1>Registration Form</h1>
                        </div>
            
                        <div class="panel-body">
                            <form action="registerop.php" method="POST">
                                <div class="form-group">
                                    <label for="firstname">First Name</label>
                                    <input type="text" class="form-control" name="firstname"/>
                                </div>
                                
                                <div class="form-group">
                                    <label for="lastame">Last Name</label>
                                    <input type="text" class="form-control" name="lastname"/>
                                </div>
                                
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                        <div>
                                            <label for="male" class="radio-inline"><input type="radio" name="gender" value="m" id="male"/>Male</label>
                                            <label for="female" class="radio-inline"><input type="radio" name="gender" value="f" id="female"/>Female</label>
                                        </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password"/>
                                </div>
                                
                                <div class="form-group">
                                    <b>Department</b><br>
                                        <label for="department" class="dropdown" name="department"> 
                                            <select name="department">
                                            <option>Allahabad School of Education</option>
                                            <option>Chitamber School of Humanities and Social Sciences</option>
                                            <option>College of Forestry</option>
                                            <option>Department of Advanced Theological Studies</option>
                                            <option>Department of Biological Sciences</option>
                                            <option>Department of Chemistry</option>
                                            <option>Department of Forensic Science</option>
                                            <option>Department of Mathematics and Statistics</option>
                                            <option>Department of Physics</option>
                                            <option>Ethelind College of Home Science</option>
                                            <option>Gospel and Plough Institute of Theology</option>
                                            <option>Jacob Institute of Biotechnology and Bio-Engineering</option>
                                            <option>Joseph School of Business Studies and Commerce</option>
                                            <option>Makino School of Continuing and Non-Formal Education</option>
                                            <option>Naini Agriculture Institute</option>
                                            <option>School of Film and Mass Communication</option>
                                            <option>Shalom Institute of Health and Allied Sciences</option>
                                            <option>Vaugh Institute of Agriculture Engineering and Technology</option>
                                            <option>Warner College of Dairy Technology</option>
                                            <option>Yeshu Darbar Bible School</option>
                                                </select>
                                        </label>
                                </div>
                    
                                <div class="form-group">
                                    <label for="id">College ID Number</label>
                                    <input type="text" class="form-control" name="idnum"/>
                                </div>
                    
                                <div class="form-group">
                                    <label for="email">College Email</label>
                                    <input type="email" class="form-control" name="email"/>
                                </div>
                    
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="telephone" class="form-control" name="phone"/>
                                </div>
                                
                                <input type="submit" value="Submit" name="submit">
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
