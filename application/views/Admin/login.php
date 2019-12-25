<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Admin - Gardening Dil Se</title>
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

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div class="accountbg"></div>

        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">
                    <?php if($this->session->flashdata('error')){?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <?= $this->session->flashdata('error'); ?>
                    </div>
                    <?php } ?>
                    <div class="p-3">
                        <h2 class="font-30 mt-3 m-b-5 text-center">Admin Login</h2>
                    </div>

                    <div class="p-3">
                        
                        <form class="form-horizontal m-t-10" method="post" action="<?= base_url() ?>admin/login-form">

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Enter username" value="<?= set_value('username') ?>">
                                <p><font color="#ff50505"><?= form_error('username'); ?></font></p>
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter password">
                                <p><font color="#ff50505"><?= form_error('password'); ?></font></p>
                            </div>

                            <div class="form-group row m-t-30">
                                <div class="col-sm-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>

                            <div class="form-group m-t-30 mb-0 row">
                                <div class="col-12 text-center">
                                    <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center text-white-50">
                <p>© 2019 Gardening Dil Se. Crafted with <i class="mdi mdi-heart text-danger"></i> by Sumit</p>
            </div>

        </div>
        <!-- end wrapper-page -->

        <!-- jQuery  -->
        <script src="<?= base_url() ?>assets/dashboard/js/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/dashboard/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url() ?>assets/dashboard/js/modernizr.min.js"></script>
        <script src="<?= base_url() ?>assets/dashboard/js/metisMenu.min.js"></script>
        <script src="<?= base_url() ?>assets/dashboard/js/jquery.slimscroll.js"></script>
        <script src="<?= base_url() ?>assets/dashboard/js/waves.js"></script>

        <!-- App js -->
        <script src="<?= base_url() ?>assets/dashboard/js/app.js"></script>

    </body>
</html>