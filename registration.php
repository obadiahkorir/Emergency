<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Emergency Application</title>
    <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
    <link href="assets/dist/css/stylehealth.min.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="login-wrapper">
        <div class="back-link">
           <center> <a href="index.php" class="btn btn-success">WELCOME TO EMERGENCY MANAGEMENT SYSTEM ADMIN PANEL</a></center>
        </div>
        <div class="container-center lg">
            <div class="panel panel-bd">
                <div class="panel-heading">
                    <div class="view-header">
                        <div class="header-icon">
                            <i class="pe-7s-unlock"></i>
                        </div>
                        <div class="header-title">
                            <h3>EMERGENCY MANAGEMENT SYSTEM </h3>
                            <small><strong>Please enter your data to register.</strong></small>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <form action="register_admin.php" id="loginForm" method="POST" >
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Username</label>
                                <input type="text" value="" id="username" class="form-control" name="username">
                                <span class="help-block small">Your unique username to app</span>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Password</label>
                                <input type="password" value="" id="password" class="form-control" name="password">
                                <span class="help-block small">Your hard to guess password</span>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Category</label>
                                <input type="text" value="" id="category" class="form-control" name="category">
                                <span class="help-block small">Please Enter your Category</span>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Email Address</label>
                                <input type="text" value="" id="email" class="form-control" name="email">
                                <span class="help-block small">Your address email to contact</span>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-warning">Register</button>
                            <a class="btn btn-primary" href="index.php">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>