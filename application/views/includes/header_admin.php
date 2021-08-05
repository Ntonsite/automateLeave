<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.dataTables.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dataTables.bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/buttons.dataTables.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/sweet-alert.css') ?>">
    <title><?php if (!empty($title)) {
            echo $title;
        } ?></title>
    <style type="text/css">
        body{
            background-color: #E8EFF2;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo site_url('admin');?>">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarNavDropdown" class="navbar-collapse collapse">
            <ul class="navbar-nav mr-auto">
                <li style="display: none;" class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('group') ?>">Groups</a>
                </li>
                <li style="display: none;" class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('role') ?>">Roles</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <div class="dropdown">
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a onClick="javascript: return confirm('Are you sure, you want to logout?');" class="dropdown-item" href="<?php echo site_url('admin/logout') ?>">Logout<i class="fas fa-out"></i></a>
                    </div>
                </div>
            </ul>
        </div>
    </nav>
</div>


   
