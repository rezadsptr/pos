<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POS</title>

    <style type="text/css"  id="debugbar_dynamic_style"></style>
    
    <link rel="stylesheet" href="<?php echo base_url('themes/dist'); ?>/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo base_url('themes/plugins'); ?>/fontawesome-free/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->

    <script type="text/javascript"  id="debugbar_dynamic_script"></script>
    <!-- <script type="text/javascript"  id="debugbar_loader" data-time="1585277113" src="<?php echo base_url('themes/plugins'); ?>/index.php?debugbar"></script> -->

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">
 
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="<?php echo base_url('auth/logout'); ?>" class="dropdown-item">
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>  