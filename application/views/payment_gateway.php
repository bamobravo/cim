 <?php include "includes/header_home.php" ?>

        <!-- subheader begin -->
        <section id="subheader" data-speed="2" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Donation Detail Confirmation</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <div class="clearfix"></div>

        <!-- content begin -->
        <div id="content" class="no-padding">
        
        <div class="info-section">
        <h3>Confirm Donation Information</h3>
        <table class="table">
            <tr>
                <td>Name:</td>
                <td><?php echo $name ?></td>
            </tr>
            <tr>
                <td>Email Address:</td>
                <td><?php echo $email ?></td>
            </tr>
            <tr>
                <td>Phonenumber:</td>
                <td><?php echo $phone ?></td>
            </tr>
            <tr>
                <td>Payment Purpose:</td>
                <td><?php echo $purpose ?></td>
            </tr>
            <tr>
                <td>Amount:</td>
                <td>N <?php echo $amount ?></td>
            </tr>
            <tr>
                <td colspan="2">
                     <form method="post" action="<?=$link ?>">
            <!-- all the payment informatin will be specified here -->
                <div class="form-group">
                    <input type="submit" class="btn btn-success" name="gtw" value="Proceed">
                </div>
            </form>
                </td>
            </tr>
        </table>
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
<style type="text/css">
    .info-section{
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
