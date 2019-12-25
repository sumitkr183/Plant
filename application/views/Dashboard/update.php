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
                                            <h4 class="page-title mb-0">Update Plants</h4>
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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">All PLants</h4>
                                        <p class="text-muted m-b-30 font-14"></p>
        
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive mb-0 b-0" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Image</th>
                                                        <th>Name</th>
                                                        <th>Type</th>
                                                        <th>Price</th>
                                                        <th>Category</th>
                                                        <th>Added Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php if(!empty($plants)){ foreach($plants as $value) { ?>
                                                    <tr>
                                                        <th>#<?= $value['id'] ?></th>
                                                        <td><img src="<?= base_url() ?>uploads/<?= $value['image'] ?>" width="40px"></td>
                                                        <td><?= $value['name'] ?></td>
                                                        <td><?= $value['type'] ?></td>
                                                        <td><?= $value['price'] ?></td>
                                                        <td><?= $value['category'] ?></td>
                                                        <td><?= $value['added_date'] ?></td>
                                                        <td>
                                                        	<a href="" class="btn btn-primary waves-effect waves-light">Edit</a>
                                                        	<a href="" class="btn btn-danger waves-effect waves-light">Delete</a>
                                                        </td>
                                                    </tr>
                                                	<?php }  }?>
                                                    </tbody>
                                                </table>
                                            </div>
        
                                        </div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

					</div> <!-- container-fluid -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2018 - 2019 Foxia <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand.</span>
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->                        


<?php

	include 'footer.php';

?>                        