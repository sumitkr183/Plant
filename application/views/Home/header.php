<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gardening Dil Se</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/Pe-icon-7-stroke.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/animation.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/owl.theme.default.min.css">
    <link rel="shortcut icon" type="text/css" href="images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap-select.min.css">
    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styles.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/custom.css">
</head>

<body>
    <!-- HEADER -->
    <header id="main-header" class="header-v9 hidden-sm hidden-xs">
        <div class="container-fluid">
            <div class="inner row">
                <div class="main-menu col-lg-5 col-md-5">
                    <nav class="navbar collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="level1 hassub megamenu-default">
                                <a href="<?= base_url() ?>home/shop">Category</a>
                                <div class="submenu-v1">
                                    <img src="<?= base_url() ?>assets/images/banner_menu.jpg" alt="banner menu">
                                    <div class="row margin-b-30">
                                        <div class="col-md-3">
                                            <div class="title-submenu">
                                                <span>House Plants</span>
                                            </div>
                                            <ul>
                                                <?php
                                                if(!empty($house_plants)){ foreach($house_plants as $value){
                                                ?>
                                                <li><a href=""><?= $value['name'] ?></a></li>
                                                <?php } }?>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="title-submenu">
                                                <span>Office Plants</span>
                                            </div>
                                            <ul>
                                                <?php
                                                if(!empty($office_plants)){ foreach($office_plants as $value){
                                                ?>
                                                <li><a href=""><?= $value['name'] ?></a></li>
                                                <?php } }?>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="title-submenu">
                                                <span>Garden Plants</span>
                                            </div>
                                            <ul>
                                                <?php
                                                if(!empty($garden_plants)){ foreach($garden_plants as $value){
                                                ?>
                                                <li><a href=""><?= $value['name'] ?></a></li>
                                                <?php } }?>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="title-submenu">
                                                <span>Other Plants</span>
                                            </div>
                                            <ul>
                                                <?php
                                                if(!empty($other_plants)){ foreach($other_plants as $value){
                                                ?>
                                                <li><a href=""><?= $value['name'] ?></a></li>
                                                <?php } }?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="level1">
                                <a href="<?= base_url() ?>home/about">About</a>
                            </li>
                            <!-- <li class="level1">
                                <a href="">Blogs</a>
                            </li> -->
                            <li class="level1">
                                <a href="<?= base_url() ?>home/contact">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="logo col-lg-2 col-md-2 text-center">
                    <a href="<?= base_url() ?>" title="logo"><img alt="logo-theme" src="<?= base_url() ?>assets/images/logo.png" class="img-responsive"></a>
                </div>                
                <div class="header-right col-lg-5 col-md-5">
                    <div class="search-popup search_modal search">
                        <a href="#" class="tp_btn_search" data-toggle="modal" data-target=".mymodal">
                            <i class="pe-7s-search"></i>
                        </a>                        
                    </div>
                    
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER MOBILE-->
    <header id="header_mobile" class="header-mobile-default hidden-lg hidden-md">
        <div class="header-top">
            <div class="container">
                <div class="logo text-center">
                    <a href="<?= base_url() ?>" title="logo"><img alt="logo-theme" src="<?= base_url() ?>assets/images/logo.png" class="img-responsive"></a>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="inner">                
                    <div class="header-main">
                        <div class="main-left">
                            <button data-toggle="offcanvas" class="btn btn-offcanvas btn-toggle-canvas offcanvas" type="button">
                               <i class="ion ion-android-menu"></i>
                            </button>  
                        </div>
                        <div class="main-right">
                            <div  class="search-popup search_modal search">
                                <a href="#" class="tp_btn_search" data-toggle="modal" data-target="#Searchmobile">
                                    <i class="pe-7s-search"></i>
                                </a>
                                <div id="Searchmobile" class="modal fade" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal"><span class="pe-7s-close"></span></button>

                                            <form method="get" class="searchform" action="/home-v1.html">
                                                <div class="pbr-search input-group">
                                                    <input name="search" maxlength="40" class="form-control input-large input-search" size="20" placeholder="Search…" type="text">
                                                    <span class="input-group-addon input-large btn-search">
                                                        <input value="" type="submit">
                                                    </span>
                                                </div>
                                            </form>
                                        </div>                                
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>            
    </header>
    <!-- END-HEADER -->