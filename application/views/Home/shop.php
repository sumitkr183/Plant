<?php

	include 'header.php';

?>

	<!-- BREADCRUMB-->
    <section id="breadcrumb">
        <div class="container-fluid">
            <div class="breadcrumb-content bg-breadcrumb-04">
                <div class="caption">
                    <div class="title">Shop</div>
                    <ul>
                        <li>Home</li>
                        <li>Shop</li>
                    </ul>
                </div>                    
            </div>
        </div>
    </section>

	 <section id="main-content">
        <div class="container-fluid inner">
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar sidebar-left">
                        <div class="widget widget-category">
                            <div class="title-heading">
                                <span>CATEGORIES</span>
                            </div>
                            <div class="widget-content">
                                <ul>
                                    <li><a href="#">House Plants</a></li>
                                    <li><a href="#">Office Plants</a></li>
                                    <li><a href="#">Garden Plants</a></li>
                                    <li><a href="#">Other Plants</a></li>
                                </ul>
                            </div>
                        </div>                        
                        <div class="widget widget-products">
                            <div class="title-heading">
                                <span>LATEST PRODUCTS</span>
                            </div>
                            <div class="widget-content">
                            	<?php if(!empty($latest_plants)){ foreach($latest_plants as $value){ ?>
                                <div class="product-sidebar">
                                    <div class="image">
                                        <img src="<?= base_url() ?>/uploads/<?= $value['image'] ?>" alt="Images">
                                    </div>
                                    <div class="content-product">
                                        <div class="product-name">
                                            <a href="#" title="House Shape Close"><?= $value['name']; ?></a>
                                        </div>
                                        <div class="product-price">
                                            <span class="old-price"><del>$750.00</del></span>
                                            <span class="price">Rs. <?= $value['price'] ?></span>
                                        </div>
                                    </div>
                                </div>     
                                <?php } }?>                           
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="products-top-wrap">
                        <div class="box-left">
                            <div class="display-mode display-mode-default">
                                <button class="btn-grid" value="grid" name="display" type="submit"><i class="icons-grid"></i></button>
                                <button class="btn-list" value="list" name="display" type="submit"><i class="icons-list"></i></button>
                            </div>
                            <span class="results">Showing 1–20 of 75 results</span>
                        </div>
                        <div class="box-right">
                            <div class="select-filter">
                                <span>Sort by :</span>
                                <select class="selectpicker">
                                    <option>Default sorting</option>
                                    <option>Sort by popularity</option>
                                    <option>Sort by average rating</option>
                                    <option>Sort by newness</option>
                                </select>
                            </div>
                                
                        </div>
                    </div>
                    <div class="products product-grid">
                        <div class="product-block">
                            <div class="row">
                            	<?php if(!empty($plants)){ foreach($plants as $value){ ?>
                                <div class="col-md-4">
                                	<div class="item-isotope suite dining design">
                                            <div class="wrap-box-1">
                                                <div class="box-img">
                                                    <a href="" title="">
                                                    <img src="<?= base_url() ?>uploads/<?= $value['image'] ?>" class="img-responsive" alt="Product" title="images products">
                                                </a>
                                                    <div class="content-item">
                                                        <h5 class="title-h5"><a href="" title="">
                                                            <?= $value['name'] ?>
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
                                                            <span class="quick-view" title="Quick View"><i class="icon-search"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            	<?php } }else{ echo "<h2>Oops No Records Found!</h2>"; } ?>
                            </div>
                        </div>
                    </div>
                    <div class="paginations">
                        <div class="prev control"><a href="#" title=""><i class="ion-ios-arrow-back"></i></a></div>
                        <ul>
                            <li>...<a href="#" title="">1</a></li>
                            <li><a href="#" title="">2</a></li>
                            <li class="active"><a href="#" title="">3</a></li>
                            <li><a href="#" title="">4</a></li>
                            <li><a href="#" title="">5</a>...</li>                        
                        </ul>
                        <div class="next control"><a href="#" title=""><i class="ion-ios-arrow-forward"></i></a></div>
                    </div>
                </div>
            </div>
        </div>            
    </section>


<?php

	include 'footer.php';

?>