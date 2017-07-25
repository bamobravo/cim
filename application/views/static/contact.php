<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.satriathemes.com/blessing/contact by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Jul 2017 10:28:54 GMT -->
<head>
    <meta charset="utf-8">
    <title>Blessing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- LOAD CSS FILES -->
    <link href="<?= base_url() ?>css/main.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="preloader"></div>
    <div id="wrapper">
        <!-- header begin -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <!-- logo begin -->
                        <div id="logo">
                            <div class="inner">
                                <a href="index-2">
                                    <img src="<?= base_url() ?>img/logo.png" alt="" class="logo-1">
                                    <img src="<?= base_url() ?>img/logo-2.png" alt="" class="logo-2">
                                </a>

                            </div>
                        </div>
                        <!-- logo close -->
                    </div>

                    <div class="col-md-9">
                        <!-- mainmenu begin -->
                        <div id="mainmenu-container">
                            <ul id="mainmenu">
                                <li><a href="index-2">Home</a>
                                    <ul>
                                        <li><a href="index-2">Homepage 1</a></li>
                                        <li><a href="index-3">Homepage 2</a></li>
                                        <li><a href="index-4">Homepage 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Events</a>
                                    <ul>
                                        <li><a href="events">List Type</a></li>
                                        <li><a href="events-calendar">Calendar Type</a></li>
                                    </ul>
                                </li>
                                <li><a href="sermons">Sermons</a></li>
                                <li><a href="features">Features</a></li>
                                <li><a href="news">News</a></li>
                                <li><a href="gallery">Gallery</a></li>
                                <li><a href="contact">Contact</a></li>
                            </ul>
                        </div>

                        <div class="social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-rss"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                        </div>
                        <!-- mainmenu close -->
                    </div>

                </div>
            </div>



        </header>
        <!-- header close -->

        <!-- subheader begin -->
        <section id="subheader" data-speed="2" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h1>Contact</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <div id="map"></div>

        <!-- content begin -->
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="contact-form-wrapper">
                            <div class="contact_form_holder">
                                <form id="contact" class="row" name="form1" method="post" action="#">



                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your name" />

                                    <div id="error_email" class="error">Please check your email</div>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Your email" />

                                    <div id="error_message" class="error">Please check your message</div>
                                    <textarea cols="10" rows="10" name="message" id="message" class="form-control" placeholder="Your message"></textarea>

                                    <div id="mail_success" class="success">Thank you. Your message has been sent.</div>
                                    <div id="mail_failed" class="error">Error, email not sent</div>

                                    <p id="btnsubmit">
                                        <input type="submit" id="send" value="Send" class="btn btn-custom" />
                                    </p>



                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 text-center">
                        <div class="contact-info">

                            <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>

                            <div class="divider-line"></div>

                            <span class="title">Telephone:</span>
                            0221 800 900
						
						<div class="divider-line"></div>

                            <span class="title">Church Time:</span>
                            Sunday 06:00 and 09:00<br>
                            Sunday school 08:00<br>
                            Sisters meeting: Wednesday 20:00<br>
                            Elders meeting: Friday 20:00<br>

                            <div class="divider-line"></div>

                            <span class="title">Address:</span>
                            12250 W Rose Butterfly Acres, Califoria 5580 USA
						
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

<?php include_once 'includes/resource.php' ?>

</body>

<!-- Mirrored from www.satriathemes.com/blessing/contact by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Jul 2017 10:28:55 GMT -->
</html>