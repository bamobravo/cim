 <?php include "includes/header_home.php" ?>

        <!-- subheader begin -->
        <section id="subheader" data-speed="2" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h1>Sermons</h1>
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
                    <div class="col-md-10 col-md-offset-1">
                    <?php if ($sermons): ?>
                        <?php foreach ($sermons as $sermon): ?>
                            <div class="custom-col-3">
                                <div class="left-col">
                                    <iframe src="<?php echo getEmbed($sermon['image_location'] )?>" class='img-responsive'></iframe>
                                    <!-- <img src="<?= base_url() ?>img/sermons/pic%20(1).jpg" alt="" class="img-responsive"> -->
                                </div>
                                <div class="mid-col">
                                    <a href="#">
                                        <h3><?php echo $sermon['title'] ?></h3>
                                    </a>
                                    <div class="details"><span>By <a href="#"><?php echo $sermon['author'] ?></a>, <?php echo formatReadable($sermon['date_posted'] )?>.</div>
                                </div>
                                <div class="right-col">
                                    <a href="<?php echo $sermon['image_location'] ?>" target="_blank"><i class="fa fa-video-camera"></i></a>
                                    <a href="#"><i class="fa fa-volume-up"></i></a>
                                    <a href="<?php echo base_url('st/v/sermon/'.$sermon['ID']) ?>" ><i class="fa fa-file-pdf-o"></i></a>
                                </div>
                            </div>
                        <?php endforeach ?>
                    <?php else: ?>
                    <div class="custom-col-3">
                        Can not find any sermon right now please try again later.
                    </div>
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
                        &copy; Copyiright 2017 - Rastvor Labs
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
    <script src="<?= base_url() ?>js/moment.min.js"></script>
    <script src="<?= base_url() ?>js/fullcalendar.min.js"></script>

    <script src="<?= base_url() ?>js/wow.min.js"></script>   
    <script src="<?= base_url() ?>js/custom.js"></script>

    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script type="text/javascript" src="<?= base_url() ?>rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?= base_url() ?>js/rev-setting-1.html"></script>

</body>

</html>
