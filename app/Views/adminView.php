<!DOCTYPE html>
<html lang="en">
<head>
	<title>BPMS | Dashboard </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('fonts/font-awesome-4.7.0/css/font-awesome.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('fonts/Linearicons-Free-v1.0.0/icon-font.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/animate/animate.css');?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/css-hamburgers/hamburgers.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/animsition/css/animsition.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/Jquery-ui/jquery-ui.min.css');?>">
<!--===============================================================================================-->
</head>
</head>
    <body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
    <div class="sidebar-header" style="background-color: rgb(255,105,178);">
        <h4>Restuarant</h4>
    </div>

    <ul class="list-unstyled components">
        <p></p>
        <li class="active">
            <a href="dashboard" class="fa fa-th"> Dashboard</a>

        </li>
         <li>
            <a href="#pageSubmenuRue"  data-toggle="collapse" aria-expanded="false" class="fa fa-user-circle-o dropdown-toggle">Customer</a>
            <ul class="collapse list-unstyled" id="pageSubmenuRue">
                <li>
                    <a href="/customer-form">Add</a>
                </li>

                <li>
                    <a href="/customer">view</a>
                </li>
            </ul>
        </li>
         
       <li>
            <a href="#pageSubmenuRuebaeRamus"  data-toggle="collapse" aria-expanded="false" class="fa fa-thermometer-half dropdown-toggle">Food</a>
            <ul class="collapse list-unstyled" id="pageSubmenuRuebaeRamus">
                <li>
                    <a href="/user-form">Add</a>
                </li>

                <li>
                    <a href="/user">view</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#pageSubmenuRuebae"  data-toggle="collapse" aria-expanded="false" class="fa fa-bug dropdown-toggle"> Employee</a>
            <ul class="collapse list-unstyled" id="pageSubmenuRuebae">
                <li>
                    <a href="#pageSubmenuRuebaeRamus1"  data-toggle="collapse" aria-expanded="false" class="fa fa-thermometer-half dropdown-toggle">chef</a>
                    <ul class="collapse list-unstyled" id="pageSubmenuRuebaeRamus1">
                <li>
                    <a href="/chef-form">Add</a>
                </li>

                <li>
                    <a href="/chef">view</a>
                </li>    
                    </ul>
                </li>

                <li>
                    <a href="#pageSubmenuRuebaeRamus2"  data-toggle="collapse" aria-expanded="false" class="fa fa-thermometer-half dropdown-toggle">waiter</a>
                    <ul class="collapse list-unstyled" id="pageSubmenuRuebaeRamus2">
                <li>
                    <a href="/waiter-form">Add</a>
                </li>

                <li>
                    <a href="/waiter">view</a>
                </li>    
                    </ul>
                </li>
                <li>
                    <a href="employee_view">Manager</a>
                </li>
            </ul>
        </li>
        
        <li>
            <a href="#pageSubmenu1"  data-toggle="collapse" aria-expanded="false" class="fa fa-users dropdown-toggle">Booking</a>
            <ul class="collapse list-unstyled" id="pageSubmenu1">
                <li>
                    <a href="add_booking">Add</a>
                </li>
                <li>
                    <a href="booking_view">view</a>
                </li>

            </ul>
        </li>

        </ul>
</nav>


<!-- Page Content  -->
<div id="content">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="btn sm-btn-toggle ">
            <i class="fa fa-align-left"></i>
            <span>Toggle</span>
        </button>
    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-align-justify"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
                
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="date_time"></a>
                <script type="text/javascript">window.onload = date_time('date_time');</script>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/logout" class="fa fa-power-off">logout</a>
            </li>
        </ul>
    </div>
    </div>
</nav>
            <div class="row">
           
    <div class="col-md-3">
      <div class="card-counter danger">
        <i class="fa fa-user-circle-o"></i>
        <span class="count-numbers">16</span>
        <span class="count-name">Customer</span>
      </div>
    </div>
 <!-- ss -->
 
    <!-- ss -->
 <div class="col-md-3">
      <div class="card-counter success">
        <i class="fa fa-info"></i>
        <span class="count-numbers">10</span>
        <span class="count-name">Food</span>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card-counter danger">
        <i class="fa fa-thermometer-half"></i>
        <span class="count-numbers">10</span>
        <span class="count-name">Employee</span>
      </div>
    </div>
     <div class="col-md-3">
      <div class="card-counter success">
        <i class="fa fa-users"></i>
        <span class="count-numbers">2</span>
        <span class="count-name">Booking</span>
      </div>
    </div>
    <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
             
                <h3><?php echo $foodcount;?></h3>

                <p>New Food</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/newfood" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
           
            </div>
           
            <div class="line"></div>
            
             <div class="line"></div>
                <footer>
            <p class="text-center sm-sys">
           Restuarant Management System 
            </p>
            </footer>
           <div class="line"></div> 
        
        </div>
    </div>
  
       
	
<!--===============================================================================================-->
<script src="<?php echo base_url('vendor/jquery/jquery-3.2.1.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('vendor/animsition/js/animsition.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('vendor/bootstrap/js/popper.js'); ?>"></script>
	<script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.min.js');?>"></script>
	<script src="<?php echo base_url('js/main.js'); ?>"></script>
    <script src="<?php echo base_url('vendor/Jquery-ui/jquery-ui.min.js');?>"></script>
</script>
</body>
</html>