<?php
    
    include 'header.php';

?>

		<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                    	<div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <h4 class="page-title mb-0">View Plants</h4>
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="#">Foxia</a></li>
                                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Form Elements</li>
                                            </ol>
                                        </div>
                                     
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <?php if(!empty($plants)){ foreach($plants as $value){ ?>
                        	<div class="col-lg-4">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="<?= base_url() ?>uploads/<?= $value['image'] ?>" alt="<?= $value['image'] ?>">
                                    <div class="card-body">
                                        <h4 class="card-title font-30 mt-0 text-center"><?= $value['name'] ?></h4>
                                        <h5>Type <font><?= $value['type'] ?></font></h5>
                                        <h5>Price <font color="#ff5050"><?= $value['price'] ?></font></h5>
                                        <h5>Category <font><?= $value['category'] ?></font></h5>
                                        <p class="card-text"><?= $value['description'] ?></p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php }  } else {?>
                            <div class="col-lg-12">
                                <h2>Oops.. No Records Found</h2>
                            </div>                            
                            <?php } ?>

                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2019 Gardening Dil Se <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Sumit.</span>
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

<?php

	include 'footer.php';

?>     