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
    <!-- sweet alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-default@4/default.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body data-spy="scroll" data-offset="80">
    <?php if (session()->getFlashdata('alert')) { ?>
        <script>
            Swal.fire(
                'Peringatan!',
                '<?= session()->getFlashdata('alert') ?>',
                'warning'
            )
        </script>
    <?php } ?>
    <!-- loading -->
    <?php if ($title == 'Home') { ?>
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
    <?php } ?>
    <!-- loading End -->
    <!-- Header -->
    <?= $this->include('layout/nav'); ?>
    <?= $this->renderSection('content'); ?>
    <!-- Footer -->
    <footer>
        <!-- Subscribe Our Newsletter -->
        <!-- Subscribe Our Newsletter END -->
        <!-- Footer Info -->
        <footer id="contact" class="iq-footerr iq-ptb-40 ">
            <div class="container">
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
                            </script> <a href="index-02.html">SIRETEL</a> All Rights Reserved
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