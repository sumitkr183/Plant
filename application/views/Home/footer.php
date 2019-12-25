   <footer class="footer footer-page footer-v9">
        <div class="footer-top">
            <div class="container">
                <div class="inner">
                    <h5 class="title-h5">NEWSLETTER<br>TO GET IN TOUCH</h5>
                    <form action="#">
                        <input name="email" placeholder="Enter your e-mail" class="form-control" type="text">
                    </form>
                    <div class="btn-web btn-web-1">
                        <a href="#" title="">Subscribe</a>
                    </div>
                </div>
            </div>                
        </div>
        <div class="container">            
            <div class="footer-bottom">
                <div class="wrap-copyright">
                    <div class="copyright">
                        Copyright © 2019 <a href="">Gandening Dil Se.</a> Powered by Sumit.
                    </div>
                    <div class="social">
                        <a href="#" title="facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                            <a href="#" title="facebook">
                            <i class="fa fa-instagram"></i>
                        </a>
                            <a href="#" title="Pinterest">
                            <i class="fa fa-pinterest-p"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Menu offcanvas -->
    <div id="pbr-off-canvas" class="pbr-off-canvas sidebar-offcanvas hidden-lg hidden-md"> 
        <div class="pbr-off-canvas-body">
            <div class="offcanvas-head">
                <button type="button" class="btn btn-close btn-toggle-canvas" data-toggle="offcanvas">
                    <i class="pe-7s-close-circle"></i> 
                </button>
                <span>Menu</span>
            </div>  
            <nav class="navbar navbar-offcanvas navbar-static">
                <ul class="nav navbar-nav">
                    <li class="level1 active hassub">
                        <a href="shop-v1.html">Store</a>
                    </li>
                    <li class="level1 hassub">
                        <a href="aboutus.html">About</a>
                    </li>
                    <li class="level1 hassub">
                        <a href="blog-v1.html">News</a>
                    </li>
                    <li class="level1 hassub">
                        <a href="contactus.html">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div> 

    <!-- Search popup content -->
    <div id="mymodal" class="modal fade mymodal" role="dialog">
        <button type="button" class="close" data-dismiss="modal"><span class="pe-7s-close"></span></button>
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="get" class="searchform" action="#">
                    <div class="pbr-search input-group">
                        <input name="search" maxlength="40" class="form-control input-large input-search" size="20" placeholder="Search" type="text">
                        <span class="input-group-addon input-large btn-search">
                            <input value="" type="submit">
                        </span>
                    </div>
                </form>
            </div>                                
        </div>
    </div>

    <!-- Quick View -->
    <div class="view-product">
        <div class="view-product-cover">
            <div class="view-product-close"><i class="fa fa-remove"></i></div>
            <div class="view-product-content">
                
            </div>
        </div>
    </div>

    <!--SCOLL TOP-->
    <a href="#" title="sroll" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
    <!--END / SROLL TOP-->

    <!-- LOAD JQUERY -->
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/slick.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/vit-gallery.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.countTo.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.appear.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap-select.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.littlelightbox.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDyCxHyc8z9gMA5IlipXpt0c33Ajzqix4"></script>
    <!-- Custom jQuery -->
    <script type="text/javascript" src="<?= base_url() ?>assets/js/function.js"></script>

    <script type="text/javascript">
        
        $(document).ready(function(){

            $('#owl-one').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }
            });

            $('#owl-two').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }
            });


            // Quick View
            $('.quick-view').click(function(){

                var id = $(this).attr('id');

                $.ajax({
                    type: 'POST',
                    url: '<?= base_url() ?>home/view/'+id,
                    dataType: 'text',
                    success: function(data){
                        $('.view-product').show();
                        $('.view-product-content').html(data);

                    }
                });
            });

            // Close Quick View
            $('.view-product-close').click(function(){
                $('.view-product').hide();
            });


        });

    </script>

</body>

</html>