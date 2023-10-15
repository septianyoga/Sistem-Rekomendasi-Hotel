<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div class="main-content pt-5">
    <section id="how-it-works" class="overview-block-ptb it-works re4-mt-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading-title">
                        <h3 class="title iq-tw-7">Perbandingan</h3>
                        <p>Silahkan pilih Alternatif Hotel yang ingin dibandingkan dari urutan kriteria dibawah!</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <b class="active pl-2 pr-2" aria-current="page">KRITERIA : </b>
                                <?php foreach ($data as $val) { ?>
                                    <li class="active" aria-current="page"><?= $val['nama_kriteria'] ?></li>
                                    <i class="bi bi-chevron-right pl-2 pr-2"></i>
                                <?php } ?>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="iq-works-box round-icon ">
                        <h3 class="mb-3 text-center">Pilih Alternatif yang ingin dibandingkan.</h3>
                        <div class="row">
                            <form action="<?= base_url('perbandingan') ?>" method="post" class="d-flex" id="form-alternatif">
                                <?php foreach ($alternatif as $value) { ?>
                                    <div class="col-12 col-lg-4">
                                        <div class="item">
                                            <div class="iq-blog-box">
                                                <div class="blog-title"> <a href="blog-single.html">
                                                        <h5 class="iq-tw-6 iq-mb-10 text-center"><?= $value['nama_alternatif'] ?></h5>
                                                    </a>
                                                </div>
                                                <?php foreach ($deskripsi_alternatif as $des) {
                                                    if ($des['id_alternatif'] == $value['id_alternatif']) {
                                                        if ($des['tipe'] == 'image') { ?>
                                                            <div class="iq-blog-image clearfix">
                                                                <img style="min-height: 220px; aspect-ratio: 4/3; object-fit: contain; " class="img-fluid center-block w-100" src="<?= base_url('foto_alternatif/' . $des['value']) ?>" alt="#">
                                                            </div>
                                                <?php }
                                                    }
                                                } ?>
                                                <div class="iq-blog-detail">
                                                    <div class="blog-content">
                                                        <?php foreach ($deskripsi_alternatif as $des) {
                                                            if ($des['id_alternatif'] == $value['id_alternatif']) {
                                                                if ($des['tipe'] != 'image') {
                                                        ?>
                                                                    <p><?= $des['nama_kriteria'] ?> : <?= $des['value'] ?></p>
                                                        <?php }
                                                            }
                                                        } ?>
                                                    </div>
                                                </div>
                                                <div class="pb-3">
                                                    <input type="checkbox" id="<?= $value['id_alternatif'] ?>" class="form-control" name="alternatif[]" value="<?= $value['id_alternatif'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </form>
                            <div class="col-12 text-center mt-3">
                                <button onclick="document.getElementById('form-alternatif').submit()" class="btn btn-primary" type="submit">Bandingkan Alternatif</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Main Content END -->
<?php $this->endSection(); ?>