 <?php include "includes/header_home.php" ?>

        <!-- subheader begin -->
        <section id="subheader" data-speed="2" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Donations</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <div class="clearfix"></div>

        <!-- content begin -->
        <div id="content" class="no-padding">
            <form method="post" action="<?=base_url('st/initP') ?>">
                <div class="form-group">
                    <label for="name"> Please Kindly Enter your name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email"> Your Email Address</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone"> Your Phonenumber</label>
                    <input type="phone" name="phone" id="phone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="purpose"> Please Kindly select your reason for donation</label>
                    <select class="form-control" name="purpose" id="purpose
                    " required="required">
                        <option value="">..select purpose..</option>
                        <?php foreach ($purpose as $p): ?>
                            <?php echo "<option>{$p['purpose']}</option>" ?>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="amount"> Specify Amount(without comma and in Naira)</label>
                    <input type="text" name="amount" id="amount" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" name="sub" value="Proceed">
                </div>
            </form>

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
<style type="text/css">
    form{
        width: 50%;
        min-width: 250px;
        padding: 15px;
        margin-right: auto;
        margin-left: auto;
        margin-top: 30px;
        background-color: white;
        margin-bottom: 30px;
    }
</style>
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
    <script src="<?= base_url() ?>js/contact.js"></script>
    <script src="<?= base_url() ?>js/wow.min.js"></script>	
    <script src="<?= base_url() ?>js/custom.js"></script>

    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script type="text/javascript" src="<?= base_url() ?>rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?= base_url() ?>js/rev-setting-1.html"></script>

</body>
</html>
