<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<!-- Header End -->
<!-- Banner -->
<section id="iq-home" class="iq-banner-03 overview-block-pt iq-bg-over iq-over-blue-90 iq-parallax" data-jarallax='{"speed": 0.6}' style="background: url(images/bg/01.jpg);">
    <div class="container">
        <div class="banner-text">
            <div class="row" style="align-items: center;">
                <div class="col-md-6">
                    <h1 class="text-uppercase iq-font-white iq-tw-3">Sistem Rekomendasi Pemilihan <b class="iq-tw-7">Hotel</b></h1>
                    <h4 class="text-uppercase iq-font-white iq-tw-3">Di Subang</h4>
                    <p class="iq-font-white iq-pt-15 iq-mb-40">Sistem untuk melakukan perbandingan dari hotel-hotel yang ada di Subang.</p>
                </div>
                <div class="col-md-6">
                    <div class="iq-banner-video">
                        <div class="waves-box">
                            <a href="video/01.mp4" class="iq-video popup-youtube"><i class="ion-ios-play-outline"></i></a>
                            <div class="iq-waves">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div>
                        <img class="banner-img" src="<?= base_url('template/frontend/html/') ?>images/banner/05.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-objects">
        <span class="banner-objects-01" data-bottom="transform:translatey(50px)" data-top="transform:translatey(-50px);">
            <img src="<?= base_url('template/frontend/html/') ?>images/drive/03.png" alt="drive02">
        </span>
        <span class="banner-objects-02 iq-fadebounce">
            <span class="iq-round"></span>
        </span>
        <span class="banner-objects-03 iq-fadebounce">
            <span class="iq-round"></span>
        </span>
        <span class="banner-objects-04" data-bottom="transform:translatex(100px)" data-top="transform:translatex(-100px);">
            <img src="<?= base_url('template/frontend/html/') ?>images/drive/04.png" alt="drive02">
        </span>
    </div>
</section>
<!-- Banner End -->
<!-- Main Content -->
<div class="main-content">
    <!-- Who is Sofbox ? -->
    <section id="how-it-works" class="overview-block-ptb it-works re4-mt-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading-title">
                        <h3 class="title iq-tw-7">How it Works</h3>
                        <p>Melakukan perbandingan berdasarkan bobot kriteria dan bobot dari tiap alternatif</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="iq-works-box round-icon text-center">
                        <div class="icon-bg center-block mx-auto"><i aria-hidden="true" class="ion-ios-monitor-outline"></i></div>
                        <h5 class="iq-tw-7 text-uppercase iq-mt-25 iq-mb-15">Fully Responsive</h5>
                        <p>Website ini sudah responsive untuk di buka diberbagai device </p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="iq-works-box round-icon text-center">
                        <div class="icon-bg center-block mx-auto"><i aria-hidden="true" class="ion-ios-albums-outline"></i></div>
                        <h5 class="iq-tw-7 text-uppercase iq-mt-25 iq-mb-15">Well Documented</h5>
                        <p>Dokumentasi mudah untuk dibaca dan dipahami untuk digunakan. </p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="iq-works-box round-icon text-center">
                        <div class="icon-bg center-block mx-auto"><i aria-hidden="true" class="ion-ios-color-wand-outline"></i></div>
                        <h5 class="iq-tw-7 text-uppercase iq-mt-25 iq-mb-15">Easy To Use</h5>
                        <p>Mudah digunakan, tidak memerlukan login dan registrasi akun, langung bisa untuk dipakai </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Who is Sofbox ? END -->
    <!-- Who is Sofbox ? -->
    <!-- Who is Sofbox ? END -->
    <!-- Software Features -->
    <section id="software-features" class="overview-block-ptb iq-mt-50 software">
        <div class="iq-software-demo">
            <img class="img-fluid" src="<?= base_url('template/frontend/html/') ?>images/drive/05.png" alt="drive05">
        </div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <h2 class="iq-tw-6 iq-mb-25">Software Features</h2>
                    <p class="iq-font-15">Fitur yang ada di website ini cukup sederhana diantaranya:</p>
                    <ul class="iq-mt-40 iq-list">
                        <li class="iq-tw-6"><i class="ion-android-done-all iq-mr-10 iq-font-blue iq-font-30"></i><span class="iq-font-black">Memilih perbandingan alternatif sesuai selera.</span></li>
                        <li class="iq-tw-6"><i class="ion-android-done-all iq-mr-10 iq-font-blue iq-font-30"></i><span class="iq-font-black">Melakukan perbandingan berdasarkan alternatif yang dipilih.</span></li>
                        <li class="iq-tw-6"><i class="ion-android-done-all iq-mr-10 iq-font-blue iq-font-30"></i><span class="iq-font-black">Menghitung alternatif perbandingan.</span></li>
                        <li class="iq-tw-6"><i class="ion-android-done-all iq-mr-10 iq-font-blue iq-font-30"></i><span class="iq-font-black">Memberikan bobot terhadap masing masing alternatif perbandingan.</span></li>
                        <li class="iq-tw-6"><i class="ion-android-done-all iq-mr-10 iq-font-blue iq-font-30"></i><span class="iq-font-black">Memberikan rangking dari alternatif yang dipilih.</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="iq-objects-software">
            <span class="iq-objects-01" data-bottom="transform:translatey(50px)" data-top="transform:translatey(-100px);">
                <img src="<?= base_url('template/frontend/html/') ?>images/drive/03.png" alt="drive02">
            </span>
            <span class="iq-objects-02" data-bottom="transform:translatex(50px)" data-top="transform:translatex(-100px);">
                <img src="<?= base_url('template/frontend/html/') ?>images/drive/04.png" alt="drive02">
            </span>
            <span class="iq-objects-03 iq-fadebounce">
                <span class="iq-round"></span>
            </span>
        </div>
    </section>
    <!-- Software Features END -->
    <!-- Great Screenshots -->
    <!-- Great Screenshots END -->
    <!-- Tab Features -->
    <!-- Tab Features END -->
    <!-- Sofbox Specialities -->
    <!-- Sofbox Specialities END -->
    <!-- Counter -->
    <!-- Counter END -->
    <!-- Loved By Our Customers -->
    <!-- Loved By Our Customers END -->
    <!-- Affordable Price -->
    <!-- Affordable Price END -->
    <!-- Meet the Team -->
    <section id="team" class="overview-block-ptb white-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading-title">
                        <h3 class="title iq-tw-7 mt-5">Meet the Team</h3>
                        <p>Sistem ini dibangun dengan satu orang, tetapi dalam pembuatan dokumen terdiri dari beberapa orang.</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-sm-12 col-lg-3 col-md-6">
                    <div class="iq-team grey-bg">
                        <div class="iq-team-img">
                            <img src="<?= base_url('img/avatar.jpg') ?>" class="img-fluid center-block" alt="#">
                        </div>
                        <div class="iq-team-info text-center">
                            <h5 class="iq-font-black iq-tw-6">Septian Abiyoga</h5>
                            <span class="team-post iq-tw-5">Web Developer</span>
                        </div>
                        <div class="share">
                            <ul>
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-google"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-3 col-md-6">
                    <div class="iq-team grey-bg">
                        <div class="iq-team-img">
                            <img src="<?= base_url('img/avatar.jpg') ?>" class="img-fluid center-block" alt="#">
                        </div>
                        <div class="iq-team-info text-center">
                            <h5 class="iq-font-black iq-tw-6">Muhammad Fauzan Mufid</h5>
                            <span class="team-post iq-tw-5">Documentation</span>
                        </div>
                        <div class="share">
                            <ul>
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-google"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-3 col-md-6">
                    <div class="iq-team grey-bg">
                        <div class="iq-team-img">
                            <img src="<?= base_url('img/avatar.jpg') ?>" class="img-fluid center-block" alt="#">
                        </div>
                        <div class="iq-team-info text-center">
                            <h5 class="iq-font-black iq-tw-6">Muhammad Mukhlis</h5>
                            <span class="team-post iq-tw-5">Documentation</span>
                        </div>
                        <div class="share">
                            <ul>
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-google"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-3 col-md-6">
                    <div class="iq-team grey-bg">
                        <div class="iq-team-img">
                            <img src="<?= base_url('img/avatar.jpg') ?>" class="img-fluid center-block" alt="#">
                        </div>
                        <div class="iq-team-info text-center">
                            <h5 class="iq-font-black iq-tw-6">Raymansyah Nur Fauzi</h5>
                            <span class="team-post iq-tw-5">Documentation</span>
                        </div>
                        <div class="share">
                            <ul>
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-google"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-3 col-md-6">
                    <div class="iq-team grey-bg">
                        <div class="iq-team-img">
                            <img src="<?= base_url('img/avatar-female.png') ?>" class="img-fluid center-block" alt="#">
                        </div>
                        <div class="iq-team-info text-center">
                            <h5 class="iq-font-black iq-tw-6">Shinta Apriyani</h5>
                            <span class="team-post iq-tw-5">Documentation</span>
                        </div>
                        <div class="share">
                            <ul>
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-google"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-3 col-md-6">
                    <div class="iq-team grey-bg">
                        <div class="iq-team-img">
                            <img src="<?= base_url('img/avatar-female.png') ?>" class="img-fluid center-block" alt="#">
                        </div>
                        <div class="iq-team-info text-center">
                            <h5 class="iq-font-black iq-tw-6">Intan Kartika Dewi</h5>
                            <span class="team-post iq-tw-5">Documentation</span>
                        </div>
                        <div class="share">
                            <ul>
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-google"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-3 col-md-6">
                    <div class="iq-team grey-bg">
                        <div class="iq-team-img">
                            <img src="<?= base_url('img/avatar-female.png') ?>" class="img-fluid center-block" alt="#">
                        </div>
                        <div class="iq-team-info text-center">
                            <h5 class="iq-font-black iq-tw-6">Anisa Nurhayati Sholihah</h5>
                            <span class="team-post iq-tw-5">Documentation</span>
                        </div>
                        <div class="share">
                            <ul>
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-google"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Meet the Team END -->
    <!-- Compare Services -->
    <!-- Compare Services end -->
    <!-- Frequently Asked Questions -->
    <!-- Frequently Asked Questions END -->
    <!-- Latest Blog Post -->
    <!-- Latest Blog Post END -->
    <!-- Clients -->
    <!-- Clients END -->
</div>
<!-- Main Content END -->
<?php $this->endSection(); ?>