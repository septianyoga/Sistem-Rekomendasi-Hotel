<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title ?> | SIRETEL</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('template/frontend/html/') ?>images/favicon.ico" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;Raleway:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('template/frontend/html/') ?>css/bootstrap.min.css">
    <!-- owl-carousel -->
    <link rel="stylesheet" href="<?= base_url('template/frontend/html/') ?>css/owl-carousel/owl.carousel.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('template/frontend/html/') ?>css/font-awesome.css" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?= base_url('template/frontend/html/') ?>css/magnific-popup/magnific-popup.css" />
    <!-- media element player -->
    <link href="<?= base_url('template/frontend/html/') ?>css/mediaelementplayer.min.css" rel="stylesheet" type="text/css" />
    <!-- Animate -->
    <link rel="stylesheet" href="<?= base_url('template/frontend/html/') ?>css/animate.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url('template/frontend/html/') ?>css/ionicons.min.css">
    <!-- variable -->
    <link rel="stylesheet" href="<?= base_url('template/frontend/html/') ?>css/variables.css">
    <!-- Style -->
    <link rel="stylesheet" href="<?= base_url('template/frontend/html/') ?>css/style.css">
    <!-- color -->
    <link rel="stylesheet" href="<?= base_url('template/frontend/html/') ?>css/color.css">
    <!-- Responsive -->
    <link rel="stylesheet" href="<?= base_url('template/frontend/html/') ?>css/responsive.css">
    <!-- custom style -->
    <link rel="stylesheet" href="<?= base_url('template/frontend/html/') ?>css/custom.css" />

</head>

<body data-spy="scroll" data-offset="80">
    <!-- loading -->
    <div id="loading">
        <div id="loading-center">
            <div class="loader">
                <div class="cube">
                    <div class="sides">
                        <div class="top"></div>
                        <div class="right"></div>
                        <div class="bottom"></div>
                        <div class="left"></div>
                        <div class="front"></div>
                        <div class="back"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- loading End -->
    <!-- Header -->
    <?= $this->include('layout/nav'); ?>
    <?= $this->renderSection('content'); ?>
    <!-- Footer -->
    <footer>
        <!-- Subscribe Our Newsletter -->
        <section class="iq-ptb-80 iq-newsletter iq-bg-over iq-over-blue-90 jarallax" data-jarallax-video="m4v:./video/01.m4v,webm:./video/01.webm,ogv:./video/01.ogv">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-title white iq-mb-40">
                            <h3 class="title iq-tw-7">Subscribe Our Newsletter</h3>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <form class="form-inline">
                            <div class="form-group">
                                <label for="inputPassword2" class="sr-only">Password</label>
                                <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                            </div>
                            <a class="button bt-white iq-ml-25" href="javascript:void(0)">subscribe</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Subscribe Our Newsletter END -->
        <!-- Footer Info -->
        <section id="contact-us" class="footer-info white-bg">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-md-6 col-lg-4">
                        <div class="iq-get-in">
                            <h4 class="iq-tw-7 iq-mb-20">Get in Touch</h4>
                            <form id="contact" method="post">
                                <div class="contact-form">
                                    <div class="section-field">
                                        <input class="require" id="contact_name" type="text" placeholder="Name*" name="name">
                                    </div>
                                    <div class="section-field">
                                        <input class="require" id="contact_email" type="email" placeholder="Email*" name="email">
                                    </div>
                                    <div class="section-field">
                                        <input class="require" id="contact_phone" type="text" placeholder="Phone*" name="phone">
                                    </div>
                                    <div class="section-field textarea">
                                        <textarea id="contact_message" class="input-message require" placeholder="Comment*" rows="5" name="message"></textarea>
                                    </div>
                                    <div class="section-field iq-mt-20">
                                        <div class="g-recaptcha" data-sitekey="6Lc5XV4UAAAAAJzUmGomye9Peru8lXyzT22FH0lX"></div>
                                    </div>
                                    <button id="submit" name="submit" type="submit" value="Send" class="button iq-mt-15">Send Message</button>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert" id="success">
                                        <strong>Thank You, Your message has been received.</strong>.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.840108181602!2d144.95373631539215!3d-37.8172139797516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1497005461921" style="border:0" allowfullscreen></iframe>
        </section>
        <footer id="contact" class="iq-footerr iq-ptb-40 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 iq-mtb-20">
                        <div class="logo">
                            <img class="img-fluid logo_img" src="<?= base_url('template/frontend/html/') ?>images/color-customizer/color-1.png" alt="#">
                            <div class="iq-font-black  iq-mt-15">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 iq-mtb-20">
                        <div class="contact-bg">
                            <h5 class="iq-tw-6 iq-font-black  iq-mb-10">Address</h5>
                            <ul class="iq-contact">
                                <li>
                                    <i class="ion-ios-location-outline"></i>
                                    <p>1234 North Luke Lane, South Bend, IN 360001</p>
                                </li>
                                <li>
                                    <i class="ion-ios-telephone-outline"></i>
                                    <p>+0123 456 789</p>
                                </li>
                                <li>
                                    <i class="ion-ios-email-outline"></i>
                                    <p>mail@sofbox.com</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 iq-mtb-20">
                        <h5 class="iq-tw-6 iq-font-black  iq-mb-10">Menu</h5>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <ul class="menu">
                                    <li><a href="javascript:void(0)">Home</a></li>
                                    <li><a href="javascript:void(0)">About Us</a></li>
                                    <li><a href="javascript:void(0)">Our Team</a></li>
                                    <li><a href="javascript:void(0)">Portfolio</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <ul class="menu">
                                    <li><a href="javascript:void(0)">Faqs</a></li>
                                    <li><a href="blog-2-columns.html">Blog</a></li>
                                    <li><a href="javascript:void(0)">Our Services</a></li>
                                    <li><a href="javascript:void(0)">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 iq-mtb-20">
                        <h5 class="iq-tw-6 iq-font-black  iq-mb-10">Help</h5>
                        <ul class="office-day">
                            <li>
                                <a href="javascript:void(0)">Help Center</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Product</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Tool</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row iq-mt-20">
                    <div class="col-auto mr-auto">
                        <ul class="link">
                            <li class="d-inline-block iq-mr-20"><a href="javascript:void(0)">Term and Condition</a></li>
                            <li class="d-inline-block"><a href="javascript:void(0)"> Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-auto">
                        <div class="iq-copyright ">
                            Copyright @ <script>
                                document.write(new Date().getFullYear())
                            </script> <a href="index-02.html">Sofbox</a> All Rights Reserved
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Info END -->
        </footer>
        <!-- Footer END -->
        <!-- back-to-top -->
        <div id="back-to-top">
            <a class="top" id="top" href="#top"> <i class="ion-ios-upload-outline"></i> </a>
        </div>
        <!-- back-to-top End -->
        <!-- style-customizer -->

        <!-- style-customizer END -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?= base_url('template/frontend/html/') ?>js/jquery-3.3.1.min.js"></script>
        <script src="<?= base_url('template/frontend/html/') ?>js/popper.min.js"></script>
        <script src="<?= base_url('template/frontend/html/') ?>js/bootstrap.min.js"></script>
        <!-- Main js -->
        <script src="<?= base_url('template/frontend/html/') ?>js/main.js"></script>
        <!-- Google captcha code Js -->
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <!-- Custom -->
        <script src="<?= base_url('template/frontend/html/') ?>js/custom.js"></script>
        <!-- Style Customizer -->
        <script src="<?= base_url('template/frontend/html/') ?>js/style-customizer.js"></script>
    </footer>
</body>

</html>