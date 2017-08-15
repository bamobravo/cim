 <?php include "includes/header_home.php" ?>

        <!-- subheader begin -->
        <section id="subheader" data-speed="2" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Events</h1>
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
                    <!-- event item begin -->
                    <?php if ($events): ?>
                        <?php foreach ($events as $event): ?>
                            <div class="col-md-6 event-item">
                                <div class="inner">
                                    <div class="left-col">
                                    <!-- <iframe src="<?php echo $event['image_location'] ?>"></iframe> -->
                                        <img src="<?= base_url($event['image_location']) ?>" alt="">
                                    </div>
                                    <div class="right-col">
                                    <?php 
                                        $date=date_create($event['start_date']);
                                        $day = $date->format('d');
                                        $month=$date->format('M');
                                        $time = $date->format('h:i a');
                                     ?>
                                        <span class="date"><?php echo $day ?></span>
                                        <span class="month"><?php echo $month ?></span>
                                        <span class="time"><?php echo $time ?></span>
                                    </div>
                                </div>
                                <div class="desc">
                                    <a href="#">
                                        <h3><?php echo $event['name'] ?></h3>
                                    </a>
                                    <span class="text"><?php echo $event['description'] ?>
                                    </span>
                                </div>
                            </div>
                        <?php endforeach ?>
                    <?php else: ?>
                        <div>cannot find any event yet please try again.</div>
                    <?php endif ?>
                

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
    <script src="<?= base_url() ?>js/moment.min.js"></script>
    <script src="<?= base_url() ?>js/fullcalendar.min.js"></script>
    <script src="<?= base_url() ?>js/fullcalendar-settings.js"></script>
    <script src="<?= base_url() ?>js/wow.min.js"></script>   
    <script src="<?= base_url() ?>js/custom.js"></script>

    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script type="text/javascript" src="<?= base_url() ?>rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?= base_url() ?>js/rev-setting-1.html"></script>

</body>

 </html>
