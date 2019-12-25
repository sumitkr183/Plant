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
                                            <h4 class="page-title mb-0">Dashboard</h4>
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="#">Foxia</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                            </ol>
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stats">
                                    <div class="p-3 mini-stats-content">
                                        <div class="mb-4 text-center">
                                            
                                        </div>
                                    </div>
                                    <div class="ml-3 mr-3">
                                        <div class="bg-white p-3 mini-stats-desc rounded">
                                            <h5 class="float-right mt-0">
                                                <?php
                                                    if(!empty($total_house)){
                                                        if($total_house < 9){
                                                            echo "0".$total_house;
                                                        }
                                                        else{
                                                            echo $total_house;
                                                        }
                                                    }
                                                    else{
                                                        echo "0";
                                                    }
                                                ?>
                                            </h5>
                                            <h6 class="mt-0 mb-3">House</h6>
                                            <p class="text-muted mb-0">Plants for House</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stats">
                                    <div class="p-3 mini-stats-content">
                                        <div class="mb-4">
                                            
                                        </div>
                                    </div>
                                    <div class="ml-3 mr-3">
                                        <div class="bg-white p-3 mini-stats-desc rounded">
                                            <h5 class="float-right mt-0">
                                                <?php
                                                    if(!empty($total_office)){
                                                        if($total_office < 9){
                                                            echo "0".$total_office;
                                                        }
                                                        else{
                                                            echo $total_office;
                                                        }
                                                    }
                                                    else{
                                                        echo "0";
                                                    }
                                                ?>
                                            </h5>
                                            <h6 class="mt-0 mb-3">Office</h6>
                                            <p class="text-muted mb-0">Plants for Office</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stats">
                                    <div class="p-3 mini-stats-content">
                                        <div class="mb-4">
                                            
                                        </div>
                                    </div>
                                    <div class="ml-3 mr-3">
                                        <div class="bg-white p-3 mini-stats-desc rounded">
                                            <h5 class="float-right mt-0">
                                                <?php
                                                    if(!empty($total_garden)){
                                                        if($total_garden < 9){
                                                            echo "0".$total_garden;
                                                        }
                                                        else{
                                                            echo $total_garden;
                                                        }
                                                    }
                                                    else{
                                                        echo "0";
                                                    }
                                                ?>
                                            </h5>
                                            <h6 class="mt-0 mb-3">Garden</h6>
                                            <p class="text-muted mb-0">Plants for Garden</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stats">
                                    <div class="p-3 mini-stats-content">
                                        <div class="mb-4">
                                            
                                        </div>
                                    </div>
                                    <div class="ml-3 mr-3">
                                        <div class="bg-white p-3 mini-stats-desc rounded">
                                            <h5 class="float-right mt-0">
                                                <?php
                                                    if(!empty($total_other)){
                                                        if($total_other < 9){
                                                            echo "0".$total_other;
                                                        }
                                                        else{
                                                            echo $total_other;
                                                        }
                                                    }
                                                    else{
                                                        echo "0";
                                                    }
                                                ?>
                                            </h5>
                                            <h6 class="mt-0 mb-3">Other</h6>
                                            <p class="text-muted mb-0">Plants for Others</p>
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
        
                                        <h4 class="mt-0 header-title">Latest Added PLants</h4>
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
                    © 2019 Gardening Dil Se <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Sumit.</span>
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

<?php

	include 'footer.php';


?>