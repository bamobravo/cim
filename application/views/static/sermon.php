 <?php include "includes/header_home.php" ?>

        <!-- subheader begin -->
        <section id="subheader" data-speed="2" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h1>SERMON TITLE: <?php echo $sermon['title'] ?></h1>
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

                  <div class="article-title"><?php echo $sermon['title'] ?></div>
                  <div class="authname"> <span> <?php echo $sermon['author'] ?></span><span><?php echo formatReadable($sermon['date_posted']) ?></span></div>
                  <div class="main-text">
                      <?php echo str_replace("\n", '<br>',$sermon['main_text'] )  ?>
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
