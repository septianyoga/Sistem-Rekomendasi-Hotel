<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div class="main-content pt-5">
    <section id="how-it-works" class="overview-block-ptb it-works re4-mt-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading-title">
                        <h3 class="title iq-tw-7">Input Perbandingan</h3>
                        <p>Silahkan input perbandingan dari alternatif yang anda pilih berdasarkan kriteria!</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <b class="active pl-2 pr-2" aria-current="page">KRITERIA : </b>
                                <?php foreach ($data as $val) { ?>
                                    <li class="active <?= $val['nama_kriteria'] == $kriteria[0]['nama_kriteria'] ? 'font-weight-bold' : '' ?>" aria-current="page"><?= $val['nama_kriteria'] ?></li>
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
                        <h3 class="mb-3 text-center">Deskripsi Alternatif</h3>
                        <div class="row">
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
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="col-12 mt-3">
                                <h4 class="text-center mb-4 mt-2">Input Perbandingan berdasarkan Kriteria : <?= $kriteria[0]['nama_kriteria'] ?></h4>
                                <form action="<?= base_url('perbandingan/insert_alternatif') ?>" method="post">
                                    <input type="hidden" name="id_user" value="<?= $id_user ?>">
                                    <input type="hidden" name="urutan" value="<?= $urutan ?>">
                                    <input type="hidden" name="id_kriteria" value="<?= $kriteria[0]['id_kriteria'] ?>">
                                    <table id="datatable" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th colspan="2" class="text-center">Pilih yang lebih penting</th>
                                                <th class="text-center">Nilai Perbandingan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $urut = 0;
                                            for ($x = 0; $x <= ($jumlah - 2); $x++) {
                                                for ($y = ($x + 1); $y <= ($jumlah - 1); $y++) {
                                                    $urut++;
                                            ?>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="krietria<?= $urut . $x ?>" name="perbandingan<?= $urut ?>" class="custom-control-input" value="1" required>
                                                                <label class="custom-control-label" for="krietria<?= $urut . $x ?>"> <?= $alternatif[$x]['nama_alternatif'] ?> </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="krietria<?= $urut . $y ?>" name="perbandingan<?= $urut ?>" class="custom-control-input" value="2" required>
                                                                <label class="custom-control-label" for="krietria<?= $urut . $y ?>"> <?= $alternatif[$y]['nama_alternatif'] ?> </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <select class="form-control" name="nilai<?= $urut ?>">
                                                                <?php for ($i = 1; $i <= 9; $i++) { ?>
                                                                    <option value="<?= $i ?>"><?= $perbandingan[$i - 1] ?></option>

                                                                <?php } ?>
                                                            </select>
                                                        </td>
                                                    </tr>
                                            <?php
                                                }
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary"><i class="bi bi-arrow-repeat"></i> Hitung</button>
                                    </div>
                                </form>
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