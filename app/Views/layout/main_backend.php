<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title ?> | SIRETEL</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('template/backend/html/') ?>images/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('template/backend/html/') ?>css/bootstrap.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="<?= base_url('template/backend/html/') ?>css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?= base_url('template/backend/html/') ?>css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?= base_url('template/backend/html/') ?>css/responsive.css">
    <!-- sweet alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-default@4/default.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</head>

<body>
    <?php if (session()->getFlashdata('pesan')) { ?>
        <script>
            Swal.fire(
                'Berhasil!',
                '<?= session()->getFlashdata('pesan') ?>',
                'success'
            )
        </script>
    <?php } ?>
    <?php if (session()->getFlashdata('error')) { ?>
        <script>
            Swal.fire(
                'Error!',
                '<?= session()->getFlashdata('error') ?>',
                'error'
            )
        </script>
    <?php } ?>
    <!-- loader Start -->
    <?php if ($title == 'Dashboard') { ?>
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
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Sidebar  -->

        <?= $title != 'Login' ? $this->include('layout/nav_backend') : ''; ?>
        <!-- TOP Nav Bar END -->
        <!-- Page Content  -->
        <?= $this->renderSection('content'); ?>
    </div>
    <!-- Wrapper END -->
    <!-- Footer -->
    <footer class="bg-white iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    Copyright 2020 <a href="#">Sofbox</a> All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url('template/backend/html/') ?>js/jquery.min.js"></script>
    <script src="<?= base_url('template/backend/html/') ?>js/popper.min.js"></script>
    <script src="<?= base_url('template/backend/html/') ?>js/bootstrap.min.js"></script>
    <!-- Appear JavaScript -->
    <script src="<?= base_url('template/backend/html/') ?>js/jquery.appear.js"></script>
    <!-- Countdown JavaScript -->
    <script src="<?= base_url('template/backend/html/') ?>js/countdown.min.js"></script>
    <!-- Counterup JavaScript -->
    <script src="<?= base_url('template/backend/html/') ?>js/waypoints.min.js"></script>
    <script src="<?= base_url('template/backend/html/') ?>js/jquery.counterup.min.js"></script>
    <!-- Wow JavaScript -->
    <script src="<?= base_url('template/backend/html/') ?>js/wow.min.js"></script>
    <!-- Apexcharts JavaScript -->
    <script src="<?= base_url('template/backend/html/') ?>js/apexcharts.js"></script>
    <!-- Slick JavaScript -->
    <script src="<?= base_url('template/backend/html/') ?>js/slick.min.js"></script>
    <!-- Select2 JavaScript -->
    <script src="<?= base_url('template/backend/html/') ?>js/select2.min.js"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="<?= base_url('template/backend/html/') ?>js/owl.carousel.min.js"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="<?= base_url('template/backend/html/') ?>js/jquery.magnific-popup.min.js"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="<?= base_url('template/backend/html/') ?>js/smooth-scrollbar.js"></script>
    <!-- lottie JavaScript -->
    <script src="<?= base_url('template/backend/html/') ?>js/lottie.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="<?= base_url('template/backend/html/') ?>js/chart-custom.js"></script>
    <!-- Custom JavaScript -->
    <script src="<?= base_url('template/backend/html/') ?>js/custom.js"></script>
</body>

</html>