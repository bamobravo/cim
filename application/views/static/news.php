 <?php include "includes/header_home.php" ?>
        <!-- subheader begin -->
        <section id="subheader" data-speed="2" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h1>News/Blogs</h1>
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
                    <div class="col-md-8">
                        <ul class="blog-list">
                        <?php if ($blogs): ?>
                            <?php foreach ($blogs as $blog): ?>
                                <?php 
                                    $date=date_create($blog['date_posted']);
                                    $day = $date->format('d');
                                    $month=$date->format('M');
                                    // $time = $date->format('h:i a');
                                 ?>
                                <li>
                                    <div class="info">
                                        <div class="date-box">
                                            <span class="day"><?php echo $day ?></span>
                                            <span class="month"><?php echo $month ?></span>
                                        </div>
                                    </div>
                                    <div class="preview">
                                        <img src="<?= base_url() ?>img/blog/pic-blog-1.jpg" alt="" />
                                        <a href="<?php echo base_url('st/v/blog/'.$blog['ID']) ?>">
                                            <h3 class="blog-title"><?php echo $blog['title'] ?></h3>
                                        </a><?php echo $blog['summary'] ?>
                                    </div>
                                    <div class="meta-info">By: <a href="#"><?php echo $blog['author'] ?></a><span>|</span><a href="#">Faith</a>, <a href="#">People</a><span>|</span></div>
                                </li>

                            <?php endforeach ?>
                        <?php else: ?>
                            <div>
                                No blog post yet please check back.
                            </div>
                        <?php endif ?>

                        </ul>

                        <div class="clearfix"></div>

                        <div class="text-center ">
                            <ul class="pagination">
                                <li><a href="#">Prev</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>

                    <div id="sidebar" class="col-md-4">

                        <div class="widget latest_news">
                            <h3>Latest News</h3>
                            <ul class="bloglist-small">
                            <?php if ($news): ?>
                                <?php foreach ($news as $new): ?>
                                    <?php 
                                    $date=date_create($new['date']);
                                    $day = $date->format('d');
                                    $month=$date->format('M');
                                    // $time = $date->format('h:i a');
                                 ?>
                                    <li>
                                        <div class="date-box">
                                            <span class="day"><?php echo $day ?></span>
                                            <span class="month"><?php echo $month ?></span>
                                        </div>
                                        <div class="txt">
                                            <h5><a href="<?php echo base_url('st/v/news_details/'.$new['ID']) ?>"><?php echo $new['title'] ?></a></h5>
                                            <div>
                                                <div><?php echo $new['headline'] ?> </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach ?>
                            <?php else: ?>
                                <div>
                                    no new yet please check again
                                </div>
                            <?php endif ?>
                                
                                
                            </ul>
                        </div>

                        <!-- widget category -->
                        <!-- widget tags -->
                       <!--  <div class="widget widget_tags">
                            <h3><span>Tags</span></h3>
                            <ul>
                                <li><a href="#link">paralax</a></li>
                                <li><a href="#link">carousel</a></li>
                                <li><a href="#link">christian</a></li>
                                <li><a href="#link">church</a></li>
                                <li><a href="#link">clean</a></li>
                                <li><a href="#link">flat</a></li>
                                <li><a href="#link">revolution slider</a></li>
                                <li><a href="#link">fundraising</a></li>
                                <li><a href="#link">html 5</a></li>
                                <li><a href="#link">ngo</a></li>
                                <li><a href="#link">non profit</a></li>
                                <li><a href="#link">religion</a></li>
                            </ul>
                        </div> -->

                        <!-- widget text -->
                        <div class="widget widget-text">
                            <h3>Our Address</h3>
                            <!-- <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.id/maps?f=q&amp;source=s_q&amp;hl=en&amp;q=16+Riverside+Rd,+Singapore&amp;sll=-2.547988,118.037109&amp;sspn=29.394918,50.756836&amp;ie=UTF8&amp;geocode=Fb8IFgAdu40vBg&amp;split=0&amp;hq=&amp;hnear=16+Riverside+Rd,+Singapore&amp;ll=1.444031,103.779771&amp;spn=0.014522,0.024784&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=false"></iframe> -->


                            <address>
                                <span>16 Riverside Rd, Singapore</span>
                                <span><strong>Phone:</strong>(200) 333 8890</span>
                                <span><strong>Fax:</strong>(200) 333 8892</span>
                                <span><strong>Email:</strong><a href="mailto:contact@satriathemes.com">contact@satriathemes.com</a></span>
                                <span><strong>Web:</strong><a href="http://www.satriathemes.com/">www.satriathemes.com</a></span>
                            </address>

                        </div>
                        <!-- widget text -->

                        <div class="widget widget-text">
                            <h3>About CIM</h3>
                            A Church that leads peole from there current reality to their ultimate inheritance in cooperation with the holy spirit through a mental shift resulting in a Godly Success and their best selves.
                            CIM mission is to raise and equip an army of believers to be Leaders in their purpose, who are positively living an Outstanding Value Added life in the society and expanding God's Kingdom on Earth.
                        
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
                        &copy; Copyiright 2017 - Blessing by SatriaThemes
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
    <script src="<?= base_url() ?>js/custom.js"></script>

    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script type="text/javascript" src="<?= base_url() ?>rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?= base_url() ?>js/rev-setting-1.html"></script>

</body>

</html>
