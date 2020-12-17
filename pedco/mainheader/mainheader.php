<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets\img\favicon.ico">
    <title>PEDCO FARMERS MANAGEMENT SYSTEM</title>
    <link rel="stylesheet" type="text/css" href="assets\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets\css\font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets\css\dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="assets\css\select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="assets\css\bootstrap-datetimepicker.min.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>


<body>
   		<!-- Header -->
        <div class="header">
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">  
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="assets\img\user.jpg" width="40" alt="Admin">
							<span class="status online"></span></span>
                        <span>Admin</span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="profile.html">My Profile</a>
						<a class="dropdown-item" href="login.html">Logout</a>
					</div>
                </li>
            </ul>
            
		<!--Header End-->
		



		<!-- Sidebar -->
        <div class="sidebar" id="sidebar">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>  
                        <li class="active">
                            <a class="active" href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                       
						<li class="submenu">
							<a href="#"><i class="fa fa-user"></i> <span> Farmer </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="add_farmer.php">Add Farmer</a></li>
                                <li><a href="add_farm.php">Farm Add</a></li>
							</ul>
						</li>
						
						<li class="submenu">
							<a href="#"><i class="fa fa-book"></i> <span> Services </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="#"> Spraying </a></li>
                                <li><a href="pruning.php"> Pruning </a></li>
                                <li><a href="#"> Harvesting </a></li>
                                <li><a href="#"> Weed Control </a></li>
                                <li><a href="#"> Planting </a></li>
                                <li><a href="#"> Lining and Pegging </a></li>
							</ul>
						</li>
						
                        
                        <li class="submenu">
                            <a href="#"><i class="fa fa-edit"></i> <span> Records</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="form-basic-inputs.html">Farmer Record</a></li>
                                <li><a href="form-input-groups.html">Payment Record</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
		<!-- Sidebar End -->
		



		
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets\js\jquery-3.2.1.min.js"></script>
	<script src="assets\js\popper.min.js"></script>
    <script src="assets\js\bootstrap.min.js"></script>
	<script src="assets\js\jquery.dataTables.min.js"></script>
	<script src="assets\js\dataTables.bootstrap4.min.js"></script>
 	<script src="assets\js\select2.min.js"></script>
    <script src="assets\js\jquery.slimscroll.js"></script>
    <script src="assets\js\app.js"></script>
    <script src="assets\js\moment.min.js"></script>
	<script src="assets\js\bootstrap-datetimepicker.min.js"></script>
	