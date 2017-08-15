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
                    <?php if ($gallery): ?>
                        <div class="item long-pic event">
                            <a class="image-popup-gallery" href="<?php echo base_url($gallery[0]['image_path']) ?>"><span class="overlay"></span>
                            <img src="<?= base_url($gallery[0]['image_path']) ?>" alt="">
                            </a>
                        </div>

                        <?php if (isset($gallery[1])): ?>
                            <div class="item wide-pic news">
                                <a href="<?= base_url($gallery[1]['image_path']) ?>"><span class="overlay"></span></a>
                                <img src="<?= base_url($gallery[1]['image_path']) ?>" alt="">
                            </div>
                        <?php endif ?>
                       
                        <?php if (isset($gallery[2])): ?>
                            <div class="item small-pic gallery">
                                <a href="<?= base_url($gallery[2]['image_path']) ?>"><span class="overlay"></span></a>
                                <img src="<?= base_url($gallery[2]['image_path']) ?>" alt="">
                            </div>
                        <?php endif ?>
                       
                       <?php if (isset($gallery[3])): ?>
                           <div class="item small-pic event">
                               <a href="<?= base_url($gallery[3]['image_path']) ?>"><span class="overlay"></span></a>
                               <img src="<?php echo base_url($gallery[3]['image_path']) ?>" alt="">
                           </div>
                       <?php endif ?>
                        <?php if (isset($gallery[4])): ?>
                            <div class="item wide-pic news">
                                <a href="<?php echo base_url($gallery[4]['image_path']) ?>"><span class="overlay"></span></a>
                                <img src="<?php echo base_url($gallery[4]['image_path']) ?>" alt="">
                            </div>
                        <?php endif ?>
                       <?php if (isset($gallery[5])): ?>
                           <div class="item small-pic gallery">
                               <a href="<?= base_url($gallery[5]['image_path']) ?>"><span class="overlay"></span></a>
                               <img src="<?= base_url($gallery[5]['image_path']) ?>" alt="">
                           </div>
                       <?php endif ?>

                        <?php if (isset($gallery[6])): ?>
                            <div class="item wide-pic">
                                <a href="<?= base_url($gallery[6]['image_path']) ?>""><span class="overlay"></span></a>
                                <img src="<?php echo base_url($gallery[6]['image_path']) ?>" alt="">
                            </div>
                        <?php endif ?>
                       <?php if (isset($gallery[7])): ?>
                           <div class="item long-pic news">
                               <a href="<?= base_url($gallery[7]['image_path']) ?>"><span class="overlay"></span></a>
                               <img src="<?= base_url($gallery[7]['image_path']) ?>" alt="">
                           </div>
                       <?php endif ?>

                       <?php if (isset($gallery[8])): ?>
                           <div class="item wide-pic gallery">
                               <a href="<?= base_url($gallery[8]['image_path']) ?>"><span class="overlay"></span></a>
                               <img src="<?= base_url($gallery[8]['image_path']) ?>" alt="">
                           </div>
                       <?php endif ?>
                       
                       <?php if (isset($gallery[9])): ?>
                           <div class="item small-pic event">
                               <a href="<?= base_url($gallery[9]['image_path']) ?>"><span class="overlay"></span></a>
                               <img src="<?= base_url($gallery[9]['image_path']) ?>" alt="">
                           </div>
                       <?php endif ?>

                    <?php else: ?>
                        <div>not picture found in the gallery please check back.</div>
                    <?php endif ?>
                        

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
