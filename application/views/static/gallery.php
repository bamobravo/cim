 <?php include "includes/header_home.php" ?>

        <!-- subheader begin -->
        <section id="subheader" data-speed="2" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h1>Our Gallery</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <div class="clearfix"></div>

        <!-- content begin -->
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul id="filters">
                            <li><a href="#" data-filter="*" class="selected">show all</a></li>
                            <li><a href="#" data-filter=".event">event</a></li>
                            <li><a href="#" data-filter=".news">news</a></li>
                            <li><a href="#" data-filter=".gallery">gallery</a></li>
                        </ul>

                    </div>
                </div>
                <div class="row">
                    <div id="gallery-isotope" class="zoom-gallery col-md-12">
                        <div class="item long-pic event">
                            <a class="<?= base_url() ?>image-popup-gallery" href="img/gallery/pic%20(1).jpg"><span class="overlay"></span>
                            <img src="<?= base_url() ?>img/gallery/pic%20(1).jpg" alt="">
                            </a>
                        </div>

                        <div class="item wide-pic news">
                            <a href="<?= base_url() ?>img/gallery/pic%20(3).jpg"><span class="overlay"></span></a>
                            <img src="<?= base_url() ?>img/gallery/pic%20(3).jpg" alt="">
                        </div>

                        <div class="item small-pic gallery">
                            <a href="<?= base_url() ?>img/gallery/pic%20(2).jpg"><span class="overlay"></span></a>
                            <img src="<?= base_url() ?>img/gallery/pic%20(2).jpg" alt="">
                        </div>
                        <div class="item small-pic event">
                            <a href="<?= base_url() ?>img/gallery/pic%20(5).jpg"><span class="overlay"></span></a>
                            <img src="img/gallery/pic%20(5).jpg" alt="">
                        </div>
                        <div class="item wide-pic news">
                            <a href="img/gallery/pic%20(4).jpg"><span class="overlay"></span></a>
                            <img src="img/gallery/pic%20(4).jpg" alt="">
                        </div>

                        <div class="item small-pic gallery">
                            <a href="<?= base_url() ?>img/gallery/pic%20(2).jpg"><span class="overlay"></span></a>
                            <img src="<?= base_url() ?>img/gallery/pic%20(2).jpg" alt="">
                        </div>
                        <div class="item wide-pic">
                            <a href="<?= base_url() ?>img/gallery/pic%20(3)""><span class="overlay"></span></a>
                            <img src="img/gallery/pic%20(3).jpg" alt="">
                        </div>


                        <div class="item long-pic news">
                            <a href="<?= base_url() ?>img/gallery/pic%20(1).jpg"><span class="overlay"></span></a>
                            <img src="<?= base_url() ?>img/gallery/pic%20(1).jpg" alt="">
                        </div>

                        <div class="item wide-pic gallery">
                            <a href="<?= base_url() ?>img/gallery/pic%20(4).jpg"><span class="overlay"></span></a>
                            <img src="<?= base_url() ?>img/gallery/pic%20(4).jpg" alt="">
                        </div>

                        <div class="item small-pic event">
                            <a href="<?= base_url() ?>img/gallery/pic%20(1).jpg"><span class="overlay"></span></a>
                            <img src="<?= base_url() ?>img/gallery/pic%20(5).jpg" alt="">
                        </div>



                    </div>
                </div>
            </div>
        </div>
        <!-- content close -->
        <!-- footer begin -->
        <footer>


            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        &copy; Copyiright 2017 Rastvor Labs
                    </div>
                    <div class="col-md-6">
                        <nav>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </footer>
        <!-- footer close -->
    </div>

    <!-- LOAD JS FILES -->
    <script src="<?= base_url() ?>js/jquery.min.js"></script>
    <script src="<?= base_url() ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>js/jquery.isotope.min.js"></script>
    <script src="<?= base_url() ?>js/jquery.prettyPhoto.js"></script>
    <script src="<?= base_url() ?>js/easing.js"></script>
    <script src="<?= base_url() ?>js/jquery.ui.totop.js"></script>
    <script src="<?= base_url() ?>js/selectnav.js"></script>
    <script src="<?= base_url() ?>js/ender.js"></script>
    <script src="<?= base_url() ?>js/responsiveslides.min.js"></script>
    <script src="<?= base_url() ?>js/owl.carousel.js"></script>
    <script src="<?= base_url() ?>js/jquery.fitvids.js"></script>
    <script src="<?= base_url() ?>js/jquery.plugin.js"></script>
    <script src="<?= base_url() ?>js/jquery.countdown.js"></script>
    <script src="<?= base_url() ?>js/countdown-custom.js"></script>
    <script src="<?= base_url() ?>js/wow.min.js"></script>   
    <script src="<?= base_url() ?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url() ?>js/custom.js"></script>

    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script type="text/javascript" src="<?= base_url() ?>rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?= base_url() ?>js/rev-setting-1.html"></script>

</body>
</html>
