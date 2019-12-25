<?php

    include 'header.php';

?>

    <!-- BREADCRUMB-->
    <section id="breadcrumb">
        <div class="container-fluid">
            <div class="breadcrumb-content bg-breadcrumb-04">
                <div class="caption">
                    <div class="title">Contact Us</div>
                    <ul>
                        <li>Home</li>
                        <li>Contact Us</li>
                    </ul>
                </div>                    
            </div>
        </div>
    </section>
    <section class="contact-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-left">
                        <img src="<?= base_url() ?>assets/images/rahul.jpeg" alt="banner-contact" class="img-reponsive">
                    </div>  
                </div>
                <div class="col-md-7">
                    <div class="contact-infor">
                        <div class="wrap-right">
                            <div class="img-left">
                                <img src="images/icon/7.png" alt="">
                            </div>
                            <div class="content-contact">
                                <h5>ADDRESS</h5>
                                <p><span>France:</span> Contrada Isola 14, Macerata, 62100 France</p>
                                <p><span>Filand:</span> Via Cavour, 14 30026 Portogruaro Filand</p>
                                <p><span>Viet Nam:</span> 76 Le Lai Street, District 1, Ho Chi Minh City, Vietnam</p>
                            </div>
                        </div>
                        <div class="wrap-right">
                            <div class="img-left">
                                <img src="images/icon/8.png" alt="">
                            </div>
                            <div class="content-contact">
                                <h5>E-MAIL</h5>
                                <p><span>France:</span>info.fr@plant.com</p>
                                <p><span>Filand:</span> info.fr@plant.com</p>
                                <p><span>Viet Nam:</span>info.fr@plant.com</p>
                            </div>
                        </div>
                        <div class="wrap-right">
                            <div class="img-left">
                                <img src="images/icon/9.png" alt="" class="img-reponsive">
                            </div>
                            <div class="content-contact">
                                <h5>PHONE</h5>
                                <p><span>India:</span> +91-7503203241</p>
                                <p><span>India:</span> +91-9968763311</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="from-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="check-left ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input class="form-control" type="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Your Message</label>
                            <textarea name="textarea" class="form-control" rows="6" required="required" placeholder=""></textarea>
                        </div>
                        <div class="btn-web ">
                            <a href="#" title="">SEND MESSENGE</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="wrap-map">
                        <div id="googlemap" class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d111945.43054950621!2d77.0227278178518!3d28.740616800717426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d013a47a1803d%3A0xedfb8cc477815e2f!2sRohini%2C%20New%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1577268994454!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php

    include 'footer.php';


?>