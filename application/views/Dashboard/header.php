<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Dashboard - Gardening Dil Se</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Basic Css files -->
        <link href="<?= base_url() ?>assets/dashboard/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url() ?>assets/dashboard/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url() ?>assets/dashboard/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url() ?>assets/dashboard/css/style.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url() ?>assets/dashboard/css/custom.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="<?= base_url() ?>dashboard/" class="logo">
                        <!-- <img src="assets/images/logo.png" alt="" height="20" class="logo-large">
                        <img src="assets/images/logo-sm.png" alt="" height="22" class="logo-sm"> -->
                        <h3 class="mt-3">Dashboard</h3>
                    </a>
                </div>

                <nav class="navbar-custom">
                    <!-- Search input -->
                    <div class="search-wrap" id="search-wrap">
                        <div class="search-bar">
                            <input class="search-input" type="search" placeholder="Search" />
                            <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                <i class="mdi mdi-close-circle"></i>
                            </a>
                        </div>
                    </div>

                    <ul class="navbar-right d-flex list-inline float-right mb-0">
                        
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link waves-effect toggle-search" href="#"  data-target="#search-wrap">
                                <i class="mdi mdi-magnify noti-icon"></i>
                            </a>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                                <img src="<?= base_url() ?>assets/dashboard/images/users/avatar-6.jpg" alt="user" class="rounded-circle">
                                <span class="d-none d-md-inline-block ml-1">
                                    <?= ucfirst($this->session->userdata('user')) ?><i class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> Logout</a>
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>                        
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Plants</li>

                            <li>
                                <a href="<?= base_url() ?>dashboard/view" class=""><i class="typcn typcn-leaf"></i><span> View Plants </span></a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>dashboard/add" class=""><i class="typcn typcn-edit"></i><span> Add Plants </span></a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>dashboard/update" class=""><i class="typcn typcn-spanner-outline"></i><span> Update Plants </span></a>
                            </li>

                            <li class="menu-title">Blogs</li>

                            <li>
                                <a href="" class=""><i class="typcn typcn-leaf"></i><span> View Blogs </span></a>
                            </li>
                            <li>
                                <a href="" class=""><i class="typcn typcn-edit"></i><span> Add Blogs </span></a>
                            </li>
                            <li>
                                <a href="" class=""><i class="typcn typcn-spanner-outline"></i><span> Update Blogs </span></a>
                            </li>

                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
