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
                                            <h4 class="page-title mb-0">Form Elements</h4>
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
        								<?php if($this->session->flashdata('success')){?>
					                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
					                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					                            <span aria-hidden="true">&times;</span>
					                        </button>
					                        <?= $this->session->flashdata('success'); ?>
					                    </div>
					                    <?php } ?>

                                        <h4 class="mt-0 header-title m-b-30">Add Plants</h4>
                                        <p class="text-muted m-b-30 font-14"></p>
        								<?= form_open_multipart('dashboard/add-plant');?>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Name </label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" value="<?= set_value('name') ?>" name="name">
                                            <p><font color="#ff5050"><?= form_error('name') ?></font></p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-search-input" class="col-sm-2 col-form-label">Type </label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" value="<?= set_value('type') ?>" name="type">
                                            <small>Ex- Flower, Vegitable, Medicine</small>
                                            <p><font color="#ff5050"><?= form_error('type') ?></font></p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-email-input" class="col-sm-2 col-form-label">Price </label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" value="<?= set_value('price') ?>" name="price">
                                            <p><font color="#ff5050"><?= form_error('price') ?></font></p>
                                            </div>
                                        </div>                    
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Category</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="category">
                                                    <option>-- Select Category --</option>
                                                    <option value="House">House</option>
                                                    <option value="Office">Office</option>
                                                    <option value="Garden">Garden</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            <p><font color="#ff5050"><?= form_error('category') ?></font></p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-email-input" class="col-sm-2 col-form-label">Descriptioin </label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="description" value="<?= set_value('description') ?>"><?= set_value('description') ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-email-input" class="col-sm-2 col-form-label">Image Upload</label>
                                            <div class="col-sm-4">
                                                <input type="file" name="file" onchange="getImgage(this.value)" id="file">
                                                <p><font color="#ff5050">
                                                <?php if(isset($error)) echo $error; ?>
                                            	</font></p>
                                            </div>
                                            <div class="col-sm-6">
                                            	<div class="form-image">
                                            		<img src="<?= base_url() ?>assets/dashboard/images/avtar.png" id="previewHolder">
                                            	</div>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group">
                                        	<a href="" class="btn btn-secondary waves-effect">
                                        		Cancel
                                        	</a>
                                        	<button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                                        </div>
                                        <?= form_close() ?>
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