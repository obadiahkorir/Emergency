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
    <title>THE EMERGENCY ALERT SYSTEM</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
        <link href="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/pace/flash.css" rel="stylesheet" type="text/css"/>
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
        <link href="assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>
        <link href="assets/dist/css/stylehealth.min.css" rel="stylesheet" type="text/css"/>
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
                            <img src="images/logo.png" class="img-circle" alt="User Image">
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
                            <img src="images/logo.png" class="img-circle" alt="User Image">
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
                   
                    <!-- sidebar menu -->
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
                                <li><a href="users_view.php">Users list</a></li>
                                
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
            
            <!-- =============================================== -->
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="header-icon">
                        <i class="pe-7s-box1"></i>
                    </div>
                    <div class="header-title">
                        <form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
                            <div class="input-group">
                                <input type="text" name="q" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button type="submit" name="search" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </form>   
                        <h1>ADD NEW HOTLINE NUMBERS</h1>
                        <small>HOTLINE NUMBERS LIST</small>
                        <ol class="breadcrumb hidden-xs">
                            <li><a href="admin_home.php"><i class="pe-7s-home"></i> Home</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </section>
                <!-- Main content -->
                <section class="content">
                    
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="btn-group"> 
                                        <a class="btn btn-success" href="add_police.php"> <i class="fa fa-plus"></i>Add Police</a>  
                                    </div>
                                    
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="panel-header">
                                            <div class="col-sm-4">
                                                <div class="dataTables_length" id="example_length">
                                                    <label>Display <select name="example_length">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> records per page</label>
                                                </div>
                                            </div>
                                              <div class="dataTables_length">
                                                         <a ><img src="images/copy.png" alt="">
                                                             <span>Copy</span></a>
                                                             <a><a href="admin_excel.php"><img src="images/excel.png" alt=""><span>Excel</span></a>
                                                             <a><a href="admin_report.php"><img src="images/pdf.png" alt=""><span>PDF</span></a>
                                                             <a><a  onclick="myFunction()"> <img src="images/print.png" alt=""><span>Print</span></a>
                                                           <a><a href="admin_report.php"><img src="images/share.png" alt=""><span>Share</span></a>
                                                           <a><a href="admin_report.php"><img src="images/download.png" alt=""><span>Download</span></a>
                                                 
                                             </div>
                                         </div>
                                         <div class="col-sm-4">
                                            <div class="dataTables_length">
                                                <div class="input-group custom-search-form">
                                                    <input type="search" class="form-control" placeholder="search..">
                                                    <span class="input-group-btn">
                                                      <button class="btn btn-primary" type="button">
                                                          <span class="glyphicon glyphicon-search"></span>
                                                      </button>
                                                  </span>
                                              </div><!-- /input-group -->
                                          </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead class="success">
                                        <tr>
                                            <th>Serial No</th>
                                                        <th>Hotline Numbers</th>
                                                        <th>Hotline Category</th>
                                                        <th>County</th>
                                                        <th>Date</th>
                                                        <th>Email</th>
                                                        <th>Address</th>
                                                        
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     <?php
                                          include("config.php");

                                        $sql = "SELECT * FROM hotline ORDER BY id";
                                       $result=mysqli_query($conn,"SELECT * FROM hotline ORDER BY id"); 

                             while ($row=mysqli_fetch_array($result))
                            { ?><!--open of while -->
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['hotline_number']; ?></td>
                                <td><?php echo $row['hotline_category']; ?></td>
                                <td><?php echo $row['county']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['address']; ?></td>
                                <td class="center"> 
                                    <a class="btn btn-info btn-xs" href="edit_data.php?uID=<?php echo $row['id']; ?>">
                                        <i class="fa fa-pencil"></i>  
                                    </a>
                                    <a class="btn btn-danger btn-xs" onclick="return confirmDel()" 
                                    href="hotline_delete.php?delID=<?php echo $row['id'];?>">
                                        <i class="fa fa-trash-o"></i> 
                                        
                                    </td>
                                </tr>
                                <?php
                               } //close of while
                            ?>
    </tbody>
</table>
</div>
<div class="page-nation text-right">
    <ul class="pagination pagination-large">
        <li class="disabled"><span>«</span></li>
        <li class="active"><span>1</span></li>
        <li><a href="#">2</a></li>
        <li class="disabled"><span>...</span></li><li>
        <li><a rel="next" href="#">Next</a></li>
    </ul>
</div>

</div>
</div>
</div>
</div>
</section> <!-- /.content -->
</div> <!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs"> <b></div>
    <strong>Copyright &copy; 2017-2018 <a href="#">Emeregency Management System</a>.</strong> All rights reserved.
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
        <script src="assets/dist/js/custom.js" type="text/javascript"></script>
    
    </body>

</html>