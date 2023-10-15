<?= $this->extend('layout/main_backend') ?>
<?= $this->section('content') ?>
<section class="sign-in-page bg-white">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-sm-6 align-self-center">
                <div class="sign-in-from">
                    <h1 class="mb-0">Sign in</h1>
                    <p>Sign in menggunakan akun anda.</p>
                    <?php
                    $errors = session()->getFlashdata('errors');
                    if (!empty($errors)) { ?>
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                <?php foreach ($errors as $key => $value) { ?>
                                    <li><?= esc($value); ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php  } ?>
                    <form class="mt-4" action="<?= base_url('auth') ?>" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" name="username" class="form-control mb-0" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <a href="#" class="float-right">Forgot password?</a>
                            <input type="password" name="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="d-inline-block w-100">
                            <button type="submit" class="btn btn-primary float-right">Sign in</button>
                        </div>
                        <div class="sign-info">
                            <span class="dark-color d-inline-block line-height-2"><a href="<?= base_url('/') ?>"><i class="bi bi-arrow-left"></i> Kembali Ke Halaman Utama</a></span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="sign-in-detail text-white" style="background: url(<?= base_url('template/backend/html/') ?>images/login/2.jpg) no-repeat 0 0; background-size: cover;">
                    <a class="sign-in-logo mb-5" href="#"><img src="<?= base_url('template/backend/html/') ?>images/logo-white.png" class="img-fluid" alt="logo"></a>
                    <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                        <div class="item">
                            <img src="<?= base_url('template/backend/html/') ?>images/login/1.png" class="img-fluid mb-4" alt="logo">
                            <h4 class="mb-1 text-white">Manage your orders</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                        </div>
                        <div class="item">
                            <img src="<?= base_url('template/backend/html/') ?>images/login/1.png" class="img-fluid mb-4" alt="logo">
                            <h4 class="mb-1 text-white">Manage your orders</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                        </div>
                        <div class="item">
                            <img src="<?= base_url('template/backend/html/') ?>images/login/1.png" class="img-fluid mb-4" alt="logo">
                            <h4 class="mb-1 text-white">Manage your orders</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $this->endSection(); ?>