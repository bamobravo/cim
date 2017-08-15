 <?php include "includes/header_home.php" ?>

        <!-- subheader begin -->
        <section id="subheader" data-speed="2" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h1><?php echo $unit['unit_name'] ?></h1>
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

                  <div class="article-title"><?php echo $unit['unit_name'] ?></div>
                  <h3><?php echo $unit['unit_name'] ?> In Summary</h3>
                 <div>
                     <?php echo $unit['brief_description'] ?>
                 </div>
                 <h3><?php echo $unit['unit_name'] ?> Information</h3>
                 <div>
                     <?php echo $unit['full_description'] ?>
                 </div>
                  <h3>How to Join <?php echo $unit['unit_name'] ?></h3>
                  <div>
                      <?php echo $unit['joining_instruction'] ?>
                  </div>
                  <h3><?php echo $unit['unit_name'] ?> Activities</h3>
                       <div>
                           <table class="table">
                           <tr>
                               <th>Week Days</th>
                               <td>Activity</td>
                           </tr>
                           <?php if ($activities): ?>
                               <?php foreach ($activities as $activity): ?>
                                   <tr>
                                       <td><?php echo $activity['week_day'] ?></td>
                                       <td><?php echo $activity['activity'] ?></td>
                                   </tr>
                               <?php endforeach ?>
                           <?php else: ?>
                            <tr>
                                <td colspan="2">
                                    no activity found for this unit.
                                </td>
                            </tr>
                           <?php endif ?>
                               
                           </table>
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
<style type="text/css">
    h3{
        margin-bottom: 15px;
        padding-bottom: 10px;
        border-bottom: solid thin #777;
    }
    .row div{
        padding: 15px;
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
