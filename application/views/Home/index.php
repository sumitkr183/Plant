<?php

	include 'header.php';

?>


    <!-- SLIDER -->
    <section class="section-slider-v9">
        <div class="container-full">
            <div id="slider-v6" class="slider-default slide-h9">
                <div class="slider-v6 style-slider-v1">
                   <img alt="Third slide" src="<?= base_url() ?>assets/images/slide/slider3.jpg" class="img-responsive">
                    <div class="content-slider">
                        <p data-animation="fadeInRight" data-delay="0.5s">Composters For Healthy Planet</p>
                        <h1 data-animation="fadeInRight" data-delay="1s">PLANTS FOR HEALTHY</h1>
                        <div class="btn-web" data-animation="fadeInRight" data-delay="1.2s">
                            <a href="<?= base_url() ?>home/about" title="" tabindex="-1">About Us</a>
                        </div>
                    </div>
                </div>
                <div class="slider-v6 style-slider-v3">
                   <img alt="Third slide" src="<?= base_url() ?>assets/images/slide/slider1.jpg" class="img-responsive">
                    <div class="content-slider">
                        <p data-animation="fadeInLeft" data-delay="0.5s">Composters For Healthy Planet</p>
                        <h1 data-animation="fadeInLeft" data-delay="1s">PLANT BY TYPE</h1>
                        <div class="btn-web" data-animation="fadeInLeft" data-delay="1.2s">
                            <a href="<?= base_url() ?>home/about" title="" tabindex="-1">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END / SLIDER -->

   <!-- GALLERY -->
    <section class="product product-v9">
        <div class="wrap-blog">
            <div class="container">
                <div class="gallery gallery-restaurant clearfix">
                    <!-- FILTER -->
                    <div class="gallery-cat text-center ">
                        <h2 class="title-h3">Latest Plants</h2>                        
                    </div>
                    <!-- END / FILTER -->
                    <!-- GALLERY CONTENT -->
                    <div class="gallery-content">
                        <div class="row">
                            <div style="padding: 20px 30px 0px;">
                                <!-- ITEM SIZE -->
                                <div class="item-size "></div>
                                <!-- END / ITEM SIZE -->
                               
                                <div class="owl-carousel owl-theme" id="owl-one">
                                    <?php if(!empty($latest_plants)){ foreach($latest_plants as $value){ ?>
                                    <div class="item">
                                        <!-- ITEM -->
                                        <div class="item-isotope suite dining design">
                                            <div class="wrap-box-1">
                                                <div class="box-img">
                                                    <a href="" title="">
                                                    <img src="<?= base_url() ?>uploads/<?= $value['image'] ?>" class="img-responsive" alt="Product" title="images products">
                                                </a>
                                                    <div class="content-item">
                                                        <h5 class="title-h5"><a href="" title="">
                                                            <?= $value['name']; ?>
                                                        </a></h5>
                                                        <div class="bottom">
                                                            <div class="text-left pull-left">
                                                                <span class="old-price"><del>$750.00</del></span>
                                                                <span class="price">Rs. <?= $value['price'] ?></span>
                                                            </div>
                                                            <div class="text-right">
                                                                <span class="height">Plant</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="btn-product">
                                                        <div class="wrap-btn">
                                                            <span><i class="icon-cart"></i></span>
                                                            <span><i class="icon-wishlist"></i></span>
                                                            <span class="quick-view" id="<?= $value['id'] ?>" title="Quick View"><i class="icon-search"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END / ITEM --> 
                                    </div>
                                    <?php } } ?>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- GALLERY CONTENT -->
                </div>
                <div class="btn-web text-center btn-shadow">
                    <a href="<?= base_url() ?>home/shop" title="">All Products</a>
                </div>
            </div>
        </div>
    </section>
    <!-- END / GALLERY -->

    <!-- GALLERY -->
    <section class="product product-v9 mg-bt-150">
        <div class="wrap-blog">
            <div class="container">
                <div class="gallery gallery-restaurant clearfix">
                    <!-- FILTER -->
                    <div class="gallery-cat text-center ">
                        <h2 class="title-h3">Plants For House</h2>                        
                    </div>
                    <!-- END / FILTER -->
                    <!-- GALLERY CONTENT -->
                    <div class="gallery-content">
                        <div class="row">
                            <div style="padding: 20px 30px 0px;">
                                <!-- ITEM SIZE -->
                                <div class="item-size "></div>
                                <!-- END / ITEM SIZE -->
                               
                                <div class="owl-carousel owl-theme" id="owl-two">
                                    <?php if(!empty($house_plants)){ foreach($house_plants as $value){ ?>
                                    <div class="item">
                                        <!-- ITEM -->
                                        <div class="item-isotope suite dining design">
                                            <div class="wrap-box-1">
                                                <div class="box-img">
                                                    <a href="<?= base_url() ?>home/product/<?= $value['link'] ?>" title="">
                                                    <img src="<?= base_url() ?>uploads/<?= $value['image'] ?>" class="img-responsive" alt="Product" title="images products">
                                                    </a>
                                                    <div class="content-item">
                                                        <h5 class="title-h5"><a href="" title="">
                                                            <?= $value['name'] ?></a></h5>
                                                        <div class="bottom">
                                                            <div class="text-left pull-left">
                                                                <span class="old-price"><del>$750.00</del></span>
                                                                <span class="price">Rs. <?= $value['price'] ?></span>
                                                            </div>
                                                            <div class="text-right">
                                                                <span class="height">Plant</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="btn-product">
                                                        <div class="wrap-btn">
                                                            <span><i class="icon-cart"></i></span>
                                                            <span><i class="icon-wishlist"></i></span>
                                                            <span class="quick-view" id="<?= $value['id'] ?>" title="Quick View"><i class="icon-search"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END / ITEM --> 
                                    </div>
                                    <?php } } ?>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- GALLERY CONTENT -->
                </div>
                <div class="btn-web text-center btn-shadow">
                    <a href="<?= base_url() ?>home/shop" title="">All Products</a>
                </div>
            </div>
        </div>
    </section>
    <!-- END / GALLERY -->

<?php

	include 'footer.php';	

?>