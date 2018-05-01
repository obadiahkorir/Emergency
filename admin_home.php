<?php
session_start ();
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
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <a href="admin_home.php" class="logo"> <!-- Logo -->
                    <span class="logo-mini">
                        <img src="images/logo.png" alt="">
                    </span>
                    <span class="logo-lg">
                        <img src="images/logo.png" alt=""  width="180px">
                    </span>
                </a>
                <nav class="navbar navbar-static-top ">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> 
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-tasks"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Orders -->
                            <li class="dropdown messages-menu">
                               <a href="#" class="dropdown-toggle admin-notification" data-toggle="dropdown"> 
                                <i class="pe-7s-cart"></i>
                                <span class="label label-primary">5</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header"><i class="fa fa-shopping-basket"></i> 4 Orders</li>
                                <li>
                                    <ul class="menu">
                                        <li ><!-- start Order -->
                                         <a href="#" class="border-gray">
                                            <div class="pull-left">
                                                <img src="assets/dist/img/stethescope.png" class="img-thumbnail" alt="User Image"></div>
                                                <h4>stethescope</h4>
                                                <p><strong>total item:</strong> 21
                                                </p>
                                            </a>     
                                        </li>
                                        <li>
                                            <a href="#" class="border-gray">
                                                <div class="pull-left">
                                                    <img src="assets/dist/img/nocontrol.png" class="img-thumbnail" alt="User Image"></div>
                                                    <h4>Nocontrol</h4>
                                                    <p><strong>total item:</strong> 11
                                                    </p>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href="#" class="border-gray">
                                                    <div class="pull-left">
                                                        <img src="assets/dist/img/lab.png" class="img-thumbnail" alt="User Image"></div>
                                                        <h4>lab</h4>
                                                        <p><strong>total item:</strong> 16
                                                        </p>
                                                    </a> 
                                                </li>
                                                <li class="nav-list">
                                                    <a href="#" class="border-gray">
                                                        <div class="pull-left">
                                                            <img src="assets/dist/img/therm.jpg" class="img-thumbnail" alt="User Image"></div>
                                                            <h4>Pressure machine</h4>
                                                            <p><strong>total item:</strong> 10
                                                            </p>
                                                        </a> 
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="footer"><a href="#"> See all Orders <i class="fa fa-arrow-right"></i></a></li>
                                        </ul>
                                    </li>
                            <!-- Messages -->
                            <li class="dropdown messages-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="pe-7s-mail"></i>
                                    <span class="label label-success">4</span>
                                </a>
                                
                                <ul class="dropdown-menu">
                                    <li class="header"><i class="fa fa-envelope-o"></i>
                                    4 Messages</li>
                                    <li>
                                        <ul class="menu">
                                            <li><!-- start message -->
                                               <a href="#" class="border-gray">
                                                    <div class="pull-left">
                                                    <img src="assets/dist/img/avatar2.png" class="img-thumbnail" alt="User Image"></div>
                                                    <h4>Alrazy</h4>
                                                    <p>Lorem Ipsum is simply dummy text of...
                                                    </p>
                                                    <span class="label label-success pull-right">11.00am</span>
                                                </a>       

                                            </li>
                                            <li>
                                                <a href="#" class="border-gray">
                                                    <div class="pull-left">
                                                    <img src="assets/dist/img/avatar4.png" class="img-thumbnail" alt="User Image"></div>
                                                    <h4>Tanjil</h4>
                                                    <p>Lorem Ipsum is simply dummy text of...
                                                    </p>
                                                    <span class="label label-success pull-right"> 12.00am</span>
                                                </a>       

                                            </li>
                                            <li>
                                                <a href="#" class="border-gray">
                                                    <div class="pull-left">
                                                    <img src="assets/dist/img/avatar3.png" class="img-thumbnail" alt="User Image"></div>
                                                    <h4>Jahir</h4>
                                                    <p>Lorem Ipsum is simply dummy text of...
                                                    </p>
                                                    <span class="label label-success pull-right"> 10.00am</span>
                                                </a>       

                                            </li>
                                            <li>
                                               <a href="#" class="border-gray">
                                                    <div class="pull-left">
                                                    <img src="assets/dist/img/avatar4.png" class="img-thumbnail" alt="User Image"></div>
                                                    <h4>Shawon</h4>
                                                    <p>Lorem Ipsum is simply dummy text of...
                                                    </p>
                                                    <span class="label label-success pull-right"> 09.00am</span>
                                                </a>       

                                            </li>
                                            <li>
                                                <a href="#" class="border-gray">
                                                    <div class="pull-left">
                                                    <img src="assets/dist/img/avatar3.png" class="img-thumbnail" alt="User Image"></div>
                                                    <h4>Shipon</h4>
                                                    <p>Lorem Ipsum is simply dummy text of...
                                                    </p>
                                                    <span class="label label-success pull-right"> 03.00pm</span>
                                                </a>       
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">See all messages <i class=" fa fa-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Notifications -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="pe-7s-bell"></i>
                                    <span class="label label-warning">8</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header"><i class="fa fa-bell"></i> 8 Notifications</li>
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
                                    <i class="pe-7s-file"></i>
                                    <span class="label label-danger">9</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header"><i class="fa fa-file"></i> 9 tasks</li>
                                    <li>
                                        <ul class="menu">
                                            <li> <!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        <i class="fa fa-check-circle"></i> Data table error
                                                        <span class="label-primary label label-default pull-right">35%</span>
                                                    </h3>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-primary progress-bar-striped active" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" data-original-title="35%" style="width: 35%">
                                                            <span class="sr-only">35% Complete (primary)</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li> 
                                            <li> 
                                                <a href="#">
                                                    <h3>
                                                      <i class="fa fa-check-circle"></i>  Change theme color
                                                       <span class="label-success label label-default pull-right">55%</span>
                                                    </h3>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" data-original-title="55%" style="width: 55%">
                                                            <span class="sr-only">55% Complete (primary)</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li> 
                                            <li>
                                                <a href="#">
                                                    <h3>
                                                        <i class="fa  fa-check-circle"></i> Change the font-family 
                                                        <span class="label-info label label-default pull-right">60%</span>
                                                    </h3>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" data-original-title="60%" style="width: 60%">
                                                            <span class="sr-only">60% Complete (info)</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li> <!-- end task item -->
                                            <li> <!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                       <i class="fa  fa-check-circle"></i> Animation should be skip
                                                       <span class="label-warning label label-default pull-right">80%</span>
                                                    </h3>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" data-original-title="80%"  style="width: 80%">
                                                            <span class="sr-only">80% Complete (warning)</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">See all tasks <i class=" fa fa-arrow-right"></i></a></li>
                                </ul>

                            </li>
                            <!-- user -->
                            <li class="dropdown dropdown-user admin-user">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                                <div class="user-image">
                                <img src="assets/dist/img/avatar4.png" class="img-circle" height="40" width="40" alt="User Image">
                                </div>
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
                            <img src="images/logo.png" class="img-circle" alt="User Image">
                        </div>
                        <div class="info">
                            <h4>Welcome,<?php echo ($_SESSION['username']); 
                              ?>... <?php echo ($_SESSION['type'])?></h4>
                          <p><?php //echo base64_decode($_GET[msg]);?>
                            
                        </div>
                    </div>
                   
            
              <ul class="sidebar-menu">
                        <li class="active">
                            <a href="admin_home.php"><i class="fa fa-hospital-o"></i><span>Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
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
                                <li><a href="add_poilice.php">Add Police</a></li>
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
                            <li><a href="patient-wise-report.html">Accident Report</a></li>
                            <li><a href="doctor-wise-report.html">Fire Reports</a></li>
                            <li><a href="total-report.html">Attack Report</a></li>
                             <li><a href="total-report.html">Robbery Report</a></li>
                              <li><a href="total-report.html">Child Abuse Report</a></li>
                               <li><a href="total-report.html">Attack Report</a></li>
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
                            <li><a href="add_employee.php">Add Employee</a></li>
                            <li><a href="emp-list.html">Employee list</a></li>
                            <li><a href="add-ns.html">Add Nurse</a></li>
                            <li><a href="ns-list.html">Nurse list</a></li>
                            <li><a href="add-ph.html">Add pharmacist</a></li>
                            <li><a href="ph-list.html">pharmacist list</a></li>
                            <li><a href="add-rep.html">Add Representative</a></li>
                            <li><a href="rep-list.html">Representative list</a></li>
                            
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
                        <a href="mailbox.html">
                         <i class="fa fa-envelope"></i><span> Mail</span>
                     </a>
                 </li>
                 
                               
            </ul>
        </div> <!-- /.sidebar -->
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
                        <h4>Welcome,<?php echo ($_SESSION['username']); 
                              ?>... <?php echo ($_SESSION['type'])?></h4>
                          <p><?php //echo base64_decode($_GET[msg]);?>
                        <small> Report Any Emergency Incident</small>
                        <ol class="breadcrumb hidden-xs">
                            <li><a href="admin_home.php"><i class="pe-7s-home"></i> Home</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </section>
            <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">15</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                        <img src="images/acc.png">
                                        <h4 align="right">Accidents </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">19</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                        <img src="images/fire.png">
                                        <h4>Fire</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">05</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                       <img src="images/robbery.png">
                                        <h4>Robbery</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">9</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                        <img src="images/attack.png">
                                        <h4>Attacks</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">6</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                       <img src="images/child.png">
                                        <h4> Child Abuse</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">3</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                    <img src="images/police.png">
                                    <h4>Police on Duty</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">4</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                    <img src="images/about.png">
                                    <h4>Complaints</h4>
                                    </div>
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
                                   <img src="images/ambulance.png">
                                    <h4>Ambulances</h4>
                                    </div>
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
                                   <img src="images/email.png">
                                    <h4>Emails</h4>
                                    </div>
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
                                   <img src="images/statistics.png">
                                    <h4>Statistics</h4>
                                    </div>
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
                                   <img src="images/employee.png">
                                    <h4>Employees</h4>
                                    </div>
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
                                   <img src="images/response.png">
                                    <h4>Responses</h4>
                                    </div>
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
                                   <img src="images/call.png">
                                    <h4>Hotline Numbers</h4>
                                    </div>
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
                                   <img src="images/news.png">
                                    <h4>Notices</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                         </div>
                    </div> <!-- /.row -->
                </section> <!-- /.content -->

            </div> <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs"> <b>Version</b> 1.0</div>
                <strong>Copyright &copy; 2018-2019 <a href="#">OBADIAH KORIR</a>.</strong> All rights reserved.
            </footer>
        </div> <!-- ./wrapper -->
        <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- jquery-ui --> 
        <script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- lobipanel -->
        <script src="assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
        <!-- Pace js -->
        <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
        <!-- SlimScroll -->
        <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- FastClick -->
        <script src="assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
        <!-- Hadmin frame -->
        <script src="assets/dist/js/custom1.js" type="text/javascript"></script>
        <!-- End Core Plugins
        =====================================================================-->
        <!-- Start Page Lavel Plugins
        =====================================================================-->
        <!-- Toastr js -->
        <script src="assets/plugins/toastr/toastr.min.js" type="text/javascript"></script>
        <!-- Sparkline js -->
        <script src="assets/plugins/sparkline/sparkline.min.js" type="text/javascript"></script>
        <!-- Data maps js -->
        <script src="assets/plugins/datamaps/d3.min.js" type="text/javascript"></script>
        <script src="assets/plugins/datamaps/topojson.min.js" type="text/javascript"></script>
        <script src="assets/plugins/datamaps/datamaps.all.min.js" type="text/javascript"></script>
        <!-- Counter js -->
        <script src="assets/plugins/counterup/waypoints.js" type="text/javascript"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <!-- ChartJs JavaScript -->
        <script src="assets/plugins/chartJs/Chart.min.js" type="text/javascript"></script>
        <script src="assets/plugins/emojionearea/emojionearea.min.js" type="text/javascript"></script>
        <!-- Monthly js -->
        <script src="assets/plugins/monthly/monthly.js" type="text/javascript"></script>
        <!-- Data maps -->
        <script src="assets/plugins/datamaps/d3.min.js" type="text/javascript"></script>
        <script src="assets/plugins/datamaps/topojson.min.js" type="text/javascript"></script>
        <script src="assets/plugins/datamaps/datamaps.all.min.js" type="text/javascript"></script>
        <script src="assets/dist/js/custom.js" type="text/javascript"></script>
         <script>
                "use strict"; // Start of use strict
                // notification
                setTimeout(function () {
                    toastr.options = {
                        closeButton: true,
                        progressBar: true,
                        showMethod: 'slideDown',
                        timeOut: 1000
                    };
                    toastr.success('Responsive Admin Theme', 'Welcome to Health Admin');

                }, 1300);

                //counter
                $('.count-number').counterUp({
                    delay: 10,
                    time: 5000
                });

                //data maps
                var basic_choropleth = new Datamap({
                    element: document.getElementById("map1"),
                    projection: 'mercator',
                    fills: {
                        defaultFill: "#009688",
                        authorHasTraveledTo: "#fa0fa0"
                    },
                    data: {
                        USA: {fillKey: "authorHasTraveledTo"},
                        JPN: {fillKey: "authorHasTraveledTo"},
                        ITA: {fillKey: "authorHasTraveledTo"},
                        CRI: {fillKey: "authorHasTraveledTo"},
                        KOR: {fillKey: "authorHasTraveledTo"},
                        DEU: {fillKey: "authorHasTraveledTo"}
                    }
                });

                var colors = d3.scale.category10();

                window.setInterval(function () {
                    basic_choropleth.updateChoropleth({
                        USA: colors(Math.random() * 10),
                        RUS: colors(Math.random() * 100),
                        AUS: {fillKey: 'authorHasTraveledTo'},
                        BRA: colors(Math.random() * 50),
                        CAN: colors(Math.random() * 50),
                        ZAF: colors(Math.random() * 50),
                        IND: colors(Math.random() * 50)
                    });
                }, 2000);

        //bar chart
                var ctx = document.getElementById("barChart");
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                        datasets: [
                            {
                                label: "My First dataset",
                                data: [65, 59, 80, 81, 56, 55, 40, 25, 35, 51, 94, 16],
                                borderColor: "#009688",
                                borderWidth: "0",
                                backgroundColor: "#009688"
                            },
                            {
                                label: "My Second dataset",
                                data: [28, 48, 40, 19, 86, 27, 90, 91, 41, 25, 34, 47],
                                borderColor: "#009688",
                                borderWidth: "0",
                                backgroundColor: "#009688"
                            }
                        ]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                        }
                    }
                });
                      //radar chart
                var ctx = document.getElementById("radarChart");
                var myChart = new Chart(ctx, {
                    type: 'radar',
                    data: {
                        labels: [["Eating", "Dinner"], ["Drinking", "Water"], "Sleeping", ["Designing", "Graphics"], "Coding", "Cycling", "Running"],
                        datasets: [
                            {
                                label: "My First dataset",
                                data: [65, 59, 66, 45, 56, 55, 40],
                                borderColor: "#00968866",
                                borderWidth: "1",
                                backgroundColor: "rgba(0, 150, 136, 0.35)"
                            },
                            {
                                label: "My Second dataset",
                                data: [28, 12, 40, 19, 63, 27, 87],
                                borderColor: "rgba(55, 160, 0, 0.7",
                                borderWidth: "1",
                                backgroundColor: "rgba(0, 150, 136, 0.35)"
                            }
                        ]
                    },
                    options: {
                        legend: {
                            position: 'top'
                        },
                        scale: {
                            ticks: {
                                beginAtZero: true
                            }
                        }
                    }
                });

                // Message
                $('.message_inner').slimScroll({
                    size: '3px',
                    height: '320px'
                });

                //emojionearea
                $(".emojionearea").emojioneArea({
                    pickerPosition: "top",
                    tonesStyle: "radio"
                });

                //monthly calender
                $('#m_calendar').monthly({
                    mode: 'event',
                    //jsonUrl: 'events.json',
                    //dataType: 'json'
                    xmlUrl: 'events.xml'
                });
            
            
             //line chart
                var ctx = document.getElementById("lineChart");
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                        datasets: [
                            {
                                label: "My First dataset",
                                borderColor: "rgba(0,0,0,.09)",
                                borderWidth: "1",
                                backgroundColor: "rgba(0,0,0,.07)",
                                data: [22, 44, 67, 43, 76, 45, 12, 45, 65, 55, 42, 61, 73]
                            },
                            {
                                label: "My Second dataset",
                                borderColor: "#009688",
                                borderWidth: "1",
                                backgroundColor: "#009688",
                                pointHighlightStroke: "#009688",
                                data: [16, 32, 18, 26, 42, 33, 44, 24, 19, 16, 67, 71, 65]
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                });


        </script>

    </body>

</html>