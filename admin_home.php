<?php
include("session.php");
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>THE EMERGENCY ALERT SYSTEM.</title>
     <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
   <link href="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/pace/flash.css" rel="stylesheet" type="text/css"/>
   <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
   <link href="assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/toastr/toastr.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/emojionearea/emojionearea.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/monthly/monthly.css" rel="stylesheet" type="text/css"/>
    <link href="assets/dist/css/stylehealth.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/chatStyle.css" type="text/css" media="screen" /> 
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <a href="admin_home.php" class="logo"> 
                    <span class="logo-mini">
                        <img src="images/logo.png" alt="">
                    </span>
                    <span class="logo-lg">
                        <img src="images/logo.png" alt=""  width="100px">
                    </span>
                </a>
                <nav class="navbar navbar-static-top ">
                    <a href="admin_home.php" class="sidebar-toggle" data-toggle="offcanvas" role="button"> 
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-tasks"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">

                            <li class="dropdown messages-menu">
                               <a href="#" class="dropdown-toggle admin-notification" data-toggle="dropdown"> 
                                <img src="images/alerts.png" class="img-thumbnail" alt="User Image">
                                <span class="label label-primary">5</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header"> 
                                    <img src="images/rotate.png" class="img-thumbnail" alt="User Image">
                                <?php
                                    $result = mysqli_query($conn,"SELECT * FROM accident" );
                                    $num_rows = mysqli_num_rows($result);
                                    echo "$num_rows \n";
                                    ?> Incidents</li>
                                <li>
                                    <ul class="menu">
                                        <li ><!-- start Order -->
                                         <a href="accident_list.php" class="border-gray">
                                            <div class="pull-left">
                                                <img src="images/acc.png" class="img-thumbnail" alt="User Image"></div>
                                                <h4>Accidents</h4>
                                                <p><strong>Total Incidents:</strong> 
                                        <?php
                                    $result = mysqli_query($conn,"SELECT * FROM accident" );
                                    $num_rows = mysqli_num_rows($result);
                                    echo "$num_rows \n";
                                    ?>
                                                </p>
                                            </a> 

                                        </li>
                                        <li>
                                            <a href="fire_list.php" class="border-gray">
                                                <div class="pull-left">
                                                    <img src="images/fire.png" class="img-thumbnail" alt="User Image"></div>
                                                    <h4>Fire</h4>
                                                    <p><strong>Total incidents:</strong>
                                         <?php
                                    $result = mysqli_query($conn,"SELECT * FROM fire" );
                                    $num_rows = mysqli_num_rows($result);
                                    echo "$num_rows \n";
                                    ?>
                                                    </p>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href="attack_list.php" class="border-gray">
                                                    <div class="pull-left">
                                                        <img src="images/attack.png" class="img-thumbnail" alt="User Image"></div>
                                                        <h4>Attacks</h4>
                                                        <p><strong>Total Incidents:</strong>
                                    <?php
                                    $result = mysqli_query($conn,"SELECT * FROM attack" );
                                    $num_rows = mysqli_num_rows($result);
                                    echo "$num_rows \n";
                                    ?>
                                                        </p>
                                                    </a> 
                                                </li>
                                                <li class="nav-list">
                                                    <a href="robbery_list.php" class="border-gray">
                                                        <div class="pull-left">
                                                            <img src="images/robbery.png" class="img-thumbnail" alt="User Image"></div>
                                                            <h4>Robbery</h4>
                                                            <p><strong>Total Incidents:</strong> 
                                                                 <?php
                                    $result = mysqli_query($conn,"SELECT * FROM fire" );
                                    $num_rows = mysqli_num_rows($result);
                                    echo "$num_rows \n";
                                    ?>
                                                            </p>
                                                        </a> 
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="footer"><a href="#">See All Alerts<i class="fa fa-arrow-right"></i></a></li>
                                        </ul>
                                    </li>
                           
                            <li class="dropdown messages-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="images/message.png" class="img-thumbnail" alt="User Image">
                                    <span class="label label-success">4</span>
                                </a>
                                
                                <ul class="dropdown-menu">
                                    <li class="header"><i class="fa fa-envelope-o"></i>
                                     <?php
                                    $result = mysqli_query($conn,"SELECT * FROM mails" );
                                    $num_rows = mysqli_num_rows($result);
                                    echo "$num_rows \n";
                                    ?> Messages</li>
                                    <li>
                                <li>
                                    <ul class="menu">
                                        <li ><!-- start Order -->
                                         <a href="accident_list.php" class="border-gray">
                                            <div class="pull-left">
                                                <img src="images/acc.png" class="img-thumbnail" alt="User Image"></div>
                                                <h4>Accidents</h4>
                                                <p><strong>Total Incidents:</strong> 
                                        <?php
                                    $result = mysqli_query($conn,"SELECT * FROM accident" );
                                    $num_rows = mysqli_num_rows($result);
                                    echo "$num_rows \n";
                                    ?>
                                                </p>
                                            </a> 

                                        </li>
                                        <li>
                                            <a href="fire_list.php" class="border-gray">
                                                <div class="pull-left">
                                                    <img src="images/fire.png" class="img-thumbnail" alt="User Image"></div>
                                                    <h4>Fire</h4>
                                                    <p><strong>Total incidents:</strong>
                                         <?php
                                    $result = mysqli_query($conn,"SELECT * FROM fire" );
                                    $num_rows = mysqli_num_rows($result);
                                    echo "$num_rows \n";
                                    ?>
                                                    </p>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href="attack_list.php" class="border-gray">
                                                    <div class="pull-left">
                                                        <img src="images/attack.png" class="img-thumbnail" alt="User Image"></div>
                                                        <h4>Attacks</h4>
                                                        <p><strong>Total Incidents:</strong>
                                    <?php
                                    $result = mysqli_query($conn,"SELECT * FROM attack" );
                                    $num_rows = mysqli_num_rows($result);
                                    echo "$num_rows \n";
                                    ?>
                                                        </p>
                                                    </a> 
                                                </li>
                                                <li class="nav-list">
                                                    <a href="robbery_list.php" class="border-gray">
                                                        <div class="pull-left">
                                                            <img src="images/robbery.png" class="img-thumbnail" alt="User Image"></div>
                                                            <h4>Robbery</h4>
                                                            <p><strong>Total Incidents:</strong> 
                                                                 <?php
                                    $result = mysqli_query($conn,"SELECT * FROM fire" );
                                    $num_rows = mysqli_num_rows($result);
                                    echo "$num_rows \n";
                                    ?>
                                                            </p>
                                                        </a> 
                                                    </li>
                                                </ul>
                                            </li>
                                    <li class="footer"><a href="#">See all Messages <i class=" fa fa-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Notifications -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  <img src="images/alert.png" class="img-thumbnail" alt="User Image">
                                    <span class="label label-warning">8</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header"><img src="images/msg.png" class="img-thumbnail" alt="User Image"></i> 8 Notifications</li>
                                    <li>
                                        <ul class="menu">
                                            <li>
                                            <a href="#" class="border-gray"><i class="fa fa-inbox"></i> Inbox  <span class=" label-success label label-default pull-right">9</span></a>
                                            </li>
                                            <li>
                                            <a href="#" class="border-gray"><i class="fa fa-cart-plus"></i> New Order <span class=" label-success label label-default pull-right">3</span> </a>
                                            </li>
                                            <li>
                                            <a href="#" class="border-gray"><i class="fa fa-money"></i> Payment Failed  <span class="label-success label label-default pull-right">6</span> </a>
                                            </li>
                                            <li>
                                            <a href="#" class="border-gray"><i class="fa fa-cart-plus"></i> Order Confirmation <span class="label-success label label-default pull-right">7</span> </a>
                                            </li>
                                            <li>
                                            <a href="#" class="border-gray"><i class="fa fa-cart-plus"></i> Update system status <span class=" label-success label label-default pull-right">11</span> </a>
                                            </li>
                                            <li>
                                            <a href="#" class="border-gray"><i class="fa fa-cart-plus"></i> client update <span class="label-success label label-default pull-right">12</span> </a>
                                            </li>
                                            <li>
                                            <a href="#" class="border-gray"><i class="fa fa-cart-plus"></i> shipment cancel 
                                            <span class="label-success label label-default pull-right">2</span> </a>
                                            </li>
                                        </ul>
                                    </li>
                                   <li class="footer">
                                   <a href="#"> See all Notifications <i class=" fa fa-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Tasks -->
                            <li class="dropdown tasks-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                     <img src="images/users.png" class="img-thumbnail" alt="User Image">
                                    <span class="label label-danger"> <?php
                                    $result = mysqli_query($conn,"SELECT * FROM users" );
                                    $num_rows = mysqli_num_rows($result);
                                    echo "$num_rows \n";
                                    ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">
                                    <img src="images/users.png" class="img-thumbnail" alt="User Image">
                                    <?php
                                    $result = mysqli_query($conn,"SELECT * FROM users" );
                                    $num_rows = mysqli_num_rows($result);
                                    echo "$num_rows \n";
                                    ?> Users</li>
                                    <li>
                                        <ul class="menu">
                                            <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Names</th>
                                                        <th>Passwords</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                      $result=mysqli_query($conn,"SELECT * FROM users ORDER BY id"); //rs.open sql,con
                                      while ($row=mysqli_fetch_array($result))
                                      { ?><!--open of while -->
                                 <tr>
                                <td><?php echo $row['username']; ?></td>
                                 <td><?php echo $row['password']; ?></td>
                                 <td><?php echo $row['status']; ?></td>
                                </tr>
                                <?php
                               } //close of while
                            ?>
                            </tbody>
                        </table>
                    </div>
                                            <!-- end task item -->
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="user_list.php">See All Users <i class=" fa fa-arrow-right"></i></a></li>
                                </ul>

                            </li>
                            <!-- user -->
                            <li class="dropdown dropdown-user admin-user">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                                <div class="user-image">
                                 <?php
                                include("config.php");
                                $sql = "SELECT * FROM admin where username = '".$_SESSION['session_email']."'";
                            $result=mysqli_query($conn,"SELECT * FROM admin where username = '".$_SESSION['session_email']."'"); while ($row=mysqli_fetch_array($result))
                            { ?><!--open of while -->
                            <img src="images/" class="img-circle" alt="User Image">
                        </div>
                         <?php
                               } //close of while
                            ?>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="profiles.php"><i class="fa fa-users"></i> User Profile</a></li>
                                    <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                                    <li><a href="login.php"><i class="fa fa-sign-out"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
          <aside class="main-sidebar">
                <div class="sidebar">
                    <div class="user-panel">
                        <div class="image pull-left">
                           <?php
                                include("config.php");
                                $sql = "SELECT * FROM admin where username = '".$_SESSION['session_email']."'";
                            { ?><!--open of while -->
                            <img src="images/<?php echo $row['Picture']; ?>" class="img-circle" alt="User Image">
                        </div>
                         <?php
                               } //close of while
                            ?>
                        <div class="info">
                            <h4>Welcome,<?php echo ($_SESSION['session_email']); 
                              ?>.</h4>
                          <p><?php //echo base64_decode($_GET[msg]);?>
                            
                        </div>
                    </div>
                   
            
                <ul class="sidebar-menu">
                        <li class="active">
                            <a href="admin_home.php"></i><span>Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="admin_home.php">
                                <i class="fa fa-user-md"></i><span>Admin</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                 <li><a href="add_admin.php">Add Admin</a></li>
                                <li><a href="add_user.php">Add User</a></li>
                                 <li><a href="admin_list.php">Admin List</a></li>
                                <li><a href="user_list.php">Users list</a></li>
                                
                            </ul>
                        </li>
                          <li>
                        <a href="profiles.php">
                         <i class="fa fa-envelope"></i><span> Profile</span>
                     </a>
                 </li>
                 
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user"></i><span>Accident</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="add_accident.php">Add Accident</a></li>
                                <li><a href="accident_list.php">Accidents lists</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-sitemap"></i><span>Fire</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="add_fire.php">Add Fire</a></li>
                                <li><a href="fire_list.php">Fire Lists</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-list-alt"></i> <span>Attack</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="add_attack.php">Add Attack</a></li>
                                <li><a href="attack_list.php">Attack lists</a></li>
                                
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-check-square-o"></i><span>Child Abuse</span>
                                <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="add_child.php">Add child Abuse</a></li>
                                <li><a href="child_list.php">ChildAbuse list</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-credit-card-alt"></i><span>Hotline Numbers</span>
                                <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="add_hotline.php">Add Hotline Number</a></li>
                                <li><a href="hotline_list.php">Hotline lists</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-credit-card-alt"></i><span>Police</span>
                                <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="add_police.php">Add Police</a></li>
                                <li><a href="police_list.php">Police lists</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-credit-card-alt"></i><span>Robbery</span>
                                <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="add_robbery.php">Add Robbery</a></li>
                                <li><a href="robbery_list.php">Robbery lists</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                              <i class="fa fa-file-text"></i><span>Reports</span>
                              <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="admin_report.php">Accident Report</a></li>
                            <li><a href="admin_report.php">Fire Reports</a></li>
                            <li><a href="admin_report.php">Attack Report</a></li>
                             <li><a href="admin_report.php">Robbery Report</a></li>
                              <li><a href="admin_report.php">Child Abuse Report</a></li>
                               <li><a href="admin_report.php">Attack Report</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="widgets.html">
                            <i class="fa fa-user-circle-o"></i><span>Human Resources</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="add_user.php">Add Employee</a></li>
                            <li><a href="users_list.php">Employee list</a></li>
                            <li><a href="add_admin.php">Add Admin</a></li>
                            <li><a href="admin_list">Admin list</a></li>
                            <li><a href="add_police.php">Add Police</a></li>
                            <li><a href="police_list.php">Police list</a></li>
                            <li><a href="add_user.php">Add users</a></li>
                            <li><a href="usr_list.php">Users List</a></li>
                            
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-file-text-o"></i><span>Notice</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="add-notice.html">Add Notice</a></li>
                            <li><a href="not-list.html">Notice list</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="mailbox.php">
                         <i class="fa fa-envelope"></i><span> Mail</span>
                     </a>
                 </li>                   
            </ul>
        </div> 
    </aside>
            <div class="content-wrapper">
                <section class="content-header">
                     <form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
                            <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button type="submit" name="search" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </form>   
                    <div class="header-icon">
                        <i class="fa fa-tachometer"></i>
                    </div>
                    <div class="header-title">
                        <h1> THE EMERGENCY ALERT SYSTEM</h1>
                        <marquee>THE EMERGENCY ALERT SYSTEM. SECURITY STARTS WITH YOU.</marquee>
                        <h4>Welcome,<?php echo ($_SESSION['session_email']); 
                              ?></h4>
                          <p><?php //echo base64_decode($_GET[msg]);?>
                        <small> Report Any Emergency Incident</small>
                        <ol class="breadcrumb hidden-xs">
                            <li><a href="admin_home.php"><i class="pe-7s-home"></i> Home</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                    </div>
                                    <div class="items pull-left">
                                        <img src="images/backup.png">
                                        <h4>DATABASE BACKUP</h4>
                                    </div>
                                     <a href="Database_Backup.php"><p align="right">BackUp</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                              
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2>
                                      <?php
                                    $result = mysqli_query($conn,"SELECT * FROM accident" );
                                    $num_rows = mysqli_num_rows($result);
                                    echo "$num_rows \n";
                                    ?>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">

                                        <img src="images/acc.png">

                                        <h4 align="right" >Accidents</h4>
                                    </div>
                                    <a href="accident_list.php"><img src="images/eye.png"><p align="right">View</a></p>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">
                                            <?php
                                    $result = mysqli_query($conn,"SELECT * FROM fire" );
                                    $num_rows = mysqli_num_rows($result);
                                    echo "$num_rows \n";
                                    ?>
                                        </span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                        <img src="images/fire.png">
                                        <h4>Fire</h4>
                                    </div>
                                     <a href="fire_list.php"><img src="images/eye.png"><p align="right">View</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">
                                        <?php
                                    $result = mysqli_query($conn,"SELECT * FROM accident" );
                                    $num_rows = mysqli_num_rows($result);
                                    echo "$num_rows \n";
                                    ?></span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                       <img src="images/robery.png">
                                        <h4>Robbery</h4>
                                    </div>
                                     <a href="robbery_list.php"><img src="images/eye.png"><p align="right">View</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">
                                            <?php
                                    $result = mysqli_query($conn,"SELECT * FROM attack" );
                                    $num_rows = mysqli_num_rows($result);
                                    echo "$num_rows \n";
                                    ?>
                                        </span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                        <img src="images/thief.png">
                                        <h4>Attacks</h4>
                                    </div>
                                     <a href="attack_list.php"><img src="images/eye.png"><p align="right">View</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">
                                    <?php
                                    $result = mysqli_query($conn,"SELECT * FROM accident" );
                                    $num_rows = mysqli_num_rows($result);
                                    echo "$num_rows \n";
                                    ?>
                                        </span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                       <img src="images/child.png">
                                        <h4> Child Abuse</h4>
                                    </div>
                                     <a href="child_list.php"><img src="images/eye.png"><p align="right">View</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">
                                    <?php
                                    $result = mysqli_query($conn,"SELECT * FROM police" );
                                    $num_rows = mysqli_num_rows($result);
                                    echo "$num_rows \n";
                                    ?>
                                        </span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                    <img src="images/police.png">
                                    <h4>Police on<br> Duty</h4>
                                    </div>
                                     <a href="police_list.php"><img src="images/eye.png"><p align="right">View</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">
                                     <?php
                                    $result = mysqli_query($conn,"SELECT * FROM accident" );
                                    $num_rows = mysqli_num_rows($result);
                                    echo "$num_rows \n";
                                    ?>
                                        </span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                    <img src="images/about.png">
                                    <h4>Wanted</h4>
                                    </div>
                                     <a href="complaints_list.php"><img src="images/eye.png"><p align="right">View</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">7</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                   <img src="images/location.png">
                                    <h4>Locations</h4>
                                    </div>
                                     <a href="locations_list.php"><img src="images/eye.png"><p align="right">View</a></p>
                                </div>
                            </div>
                        </div>
                         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">
                                    <?php
                                    $result = mysqli_query($conn,"SELECT * FROM accident" );
                                    $num_rows = mysqli_num_rows($result);
                                    echo "$num_rows \n";
                                    ?>
                                        </span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                   <img src="images/ambulance.png">
                                    <h4>Ambulances</h4>
                                    </div>
                                     <a href="ambulances_list.php"><img src="images/eye.png"><p align="right">View</a></p>
                                </div>
                            </div>
                        </div>
                         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">
                                    <?php
                                    $result = mysqli_query($conn,"SELECT * FROM accident" );
                                    $num_rows = mysqli_num_rows($result);
                                    echo "$num_rows \n";
                                    ?>
                                        </span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                   <img src="images/email.png">
                                    <h4>Emails</h4>
                                    </div>
                                     <a href="emails_list.php"><img src="images/eye.png"><p align="right">View</a></p>
                                </div>
                            </div>
                        </div>
                         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">
                                    <?php
                                    $result = mysqli_query($conn,"SELECT * FROM accident" );
                                    $num_rows = mysqli_num_rows($result);
                                    echo "$num_rows \n";
                                    ?>
                                        </span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                   <img src="images/statistics.png">
                                    <h4>Statistics</h4>
                                    </div>
                                     <a href="statistic_list.php"><img src="images/eye.png"><p align="right">View</a></p>
                                </div>
                            </div>
                        </div>
                         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">
                                    <?php
                                    $result = mysqli_query($conn,"SELECT * FROM accident" );
                                    $num_rows = mysqli_num_rows($result);
                                    echo "$num_rows \n";
                                    ?>
                                        </span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                   <img src="images/employee.png">
                                    <h4>Employees</h4>
                                    </div>
                                     <a href="employee_list.php"><img src="images/eye.png"><p align="right">View</a></p>
                                </div>
                            </div>
                        </div>
                         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">7</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                   <img src="images/report.png">
                                    <h4>Reports</h4>
                                    </div>
                                     <a href="reports_list.php"><img src="images/eye.png"><p align="right">View</a></p>
                                </div>
                            </div>
                        </div>
                         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">
                                        <?php
                                    $result = mysqli_query($conn,"SELECT * FROM accident" );
                                    $num_rows = mysqli_num_rows($result);
                                    echo "$num_rows \n";
                                    ?>
                                        </span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                   <img src="images/response.png">
                                    <h4>Responses</h4>
                                    </div>
                                     <a href="responses_list.php"><img src="images/eye.png"><p align="right">View</a></p>
                                </div>
                            </div>
                        </div>
                         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">
                                        <?php
                                    $result = mysqli_query($conn,"SELECT * FROM hotline" );
                                    $num_rows = mysqli_num_rows($result);
                                    echo "$num_rows \n";
                                    ?>
                                        </span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                   <img src="images/call.png">
                                    <h4>Hotline<br>Numbers</h4>
                                    </div>
                                    <a href="hotline_list.php"><img src="images/eye.png"><p align="right">View</a></p>
                                </div>
                            </div>
                        </div>
                         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">
                                    <?php
                                    $result = mysqli_query($conn,"SELECT * FROM accident" );
                                    $num_rows = mysqli_num_rows($result);
                                    echo "$num_rows \n";
                                    ?>
                                        </span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                   <img src="images/news.png">
                                    <h4>Notices</h4>
                                    </div>
                                     <a href="notice_list.php"><img src="images/eye.png"><p align="right">View</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                
                         </div>
                    </div> 
                </section> 

            </div> 
            <footer class="main-footer">
                <div class="pull-right hidden-xs"></div>
                <strong>Copyright &copy; 2018-2019 <a href="#">OBADIAH KORIR</a>.</strong> All rights reserved.
            </footer>
        </div> 
        <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
        <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
        <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
        <script src="assets/dist/js/custom1.js" type="text/javascript"></script>
        <script src="assets/plugins/toastr/toastr.min.js" type="text/javascript"></script>
        <script src="assets/plugins/sparkline/sparkline.min.js" type="text/javascript"></script>
        <script src="assets/plugins/datamaps/d3.min.js" type="text/javascript"></script>
        <script src="assets/plugins/datamaps/topojson.min.js" type="text/javascript"></script>
        <script src="assets/plugins/datamaps/datamaps.all.min.js" type="text/javascript"></script>
        <script src="assets/plugins/counterup/waypoints.js" type="text/javascript"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="assets/plugins/chartJs/Chart.min.js" type="text/javascript"></script>
        <script src="assets/plugins/emojionearea/emojionearea.min.js" type="text/javascript"></script>
        <script src="assets/plugins/monthly/monthly.js" type="text/javascript"></script>
        <script src="assets/plugins/datamaps/d3.min.js" type="text/javascript"></script>
        <script src="assets/plugins/datamaps/topojson.min.js" type="text/javascript"></script>
        <script src="assets/plugins/datamaps/datamaps.all.min.js" type="text/javascript"></script>
        <script src="assets/dist/js/custom.js" type="text/javascript"></script>
         
    </body>
</html>