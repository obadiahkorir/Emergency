
<!DOCTYPE html>
<html lang="en">

 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PU E-HEALTH</title>

   
    <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
    

    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   
    <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>

    <link href="assets/dist/css/stylehealth.min.css" rel="stylesheet" type="text/css"/>
 
</head>
<body>

    <div class="login-wrapper">
        <div class="back-link">
            <a href="index-2.html" class="btn btn-success">Back to Dashboard</a>
        </div>
        <div class="container-center">
            <h3>PU E-HEALTH  SYSTEM</h3>
            <div class="panel panel-bd">
                <div class="panel-heading">
                    <div class="view-header">
                        <div class="header-icon">
                            <i class="pe-7s-unlock"></i>
                        </div>
                        <div class="header-title">
                            <h3>Login</h3>
                            <small><strong>Please enter your credentials to login.</strong></small>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <form method="post" action="checklogin.php" id="loginForm"  >
                        <div class="form-group">
                            <label class="control-label" for="username">Username</label>
                            <input type="text" placeholder="korir400@gmail.com" title="Please enter you username" required=""  value="" name="username" id="username" class="form-control">
                            <span class="help-block small">Your unique username to the app</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Password</label>
                            <input type="password" title="Please enter your password" placeholder="******" required=""  value="" name="password" id="password" class="form-control">
                            <span class="help-block small">Your strong password</span>
                        </div>
                        <div>
                            <input type='submit'  name = 'submit' value = 'LOGIN' class="btn btn-primary"/>
                            <a class="btn btn-warning" href="register.html">Register</a>
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