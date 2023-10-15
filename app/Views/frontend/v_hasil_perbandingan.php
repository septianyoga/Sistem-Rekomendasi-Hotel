<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div class="main-content pt-5">
    <section id="how-it-works" class="overview-block-ptb it-works re4-mt-50">
        <div class="container">
            <div class="row ">
                <div class="col-sm-12 py-0 px-0">
                    <div class="heading-title py-0 px-0">
                        <h3 class="title iq-tw-7 py-0 px-0">Hasil Perbandingan</h3>
                    </div>
                </div>
            </div>
            <div class="row py-0 px-0">
                <div class="col-md-12 col-lg-12 py-0 px-0">
                    <div class="iq-works-box round-icon ">
                        <h3 class="mb-3 text-center">Peringkat</h3>
                        <div class="row">
                            <form action="<?= base_url('perbandingan') ?>" method="post" class="d-flex" id="form-alternatif">
                            </form>
                            <div class="col-12 text-center mt-3">
                                <table class="table table-bordered table-striped mt-2">
                                    <thead>
                                        <tr align="center">
                                            <th scope="col">Peringkat</th>
                                            <th scope="col">Karyawan</th>
                                            <th scope="col">Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 0; $i < $jumlah_alternatif; $i++) { ?>
                                            <tr align="center">
                                                <td>
                                                    <?php if ($i + 1 == 1) { ?>
                                                        <img src="<?= base_url('img/') ?>crown2-gold.png" width="60">
                                                    <?php } elseif ($i + 1 == 2) { ?>
                                                        <img src="<?= base_url('img/') ?>crown2-silver.png" width="50">
                                                    <?php } elseif ($i + 1 == 3) { ?>
                                                        <img src="<?= base_url('img/') ?>crown2-bronze.png" width="40">
                                                    <?php } else { ?>
                                                        <?php echo $i + 1; ?>
                                                    <?php } ?>
                                                </td>
                                                <td align="left"><?= $alternatif[$array[$i]]['nama_alternatif']; ?></td>
                                                <td><?= round($ranking[$array[$i]]['nilai'], 6); ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <h3 class="mb-3 text-center">Hasil Perhitungan</h3>
                        <div class="row">
                            <form action="<?= base_url('perbandingan') ?>" method="post" class="d-flex" id="form-alternatif">
                            </form>
                            <div class="col-12 text-center mt-3">
                                <table class="table table-bordered table-striped mt-2">
                                    <thead>
                                        <tr align="center">
                                            <th scope="col">Kriteria</th>
                                            <th scope="col">Bobot</th>
                                            <?php for ($i = 0; $i <= ($jumlah_alternatif - 1); $i++) { ?>
                                                <td><?php echo $alternatif[$i]['nama_alternatif']; ?></td>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 0; $i <= ($jumlah_alternatif - 1); $i++) { ?>
                                            <tr>
                                                <td><?php echo $kriteria[$i]['nama_kriteria']; ?></td>
                                                <td align="center"><?php echo round($bbt_kriteria[$i]['nilai'], 6); ?></td>
                                                <?php for ($j = 0; $j <= ($jumlah_alternatif - 1); $j++) { ?>
                                                    <td align="center"><?php echo round($bbt_alternatif[$i][$j], 6); ?></td>
                                                <?php } ?>
                                            </tr>
                                        <?php } ?>
                                        <tr align="center">
                                            <th colspan="2">Jumlah Perkalian Bobot</th>
                                            <?php for ($i = 0; $i <= ($jumlah_alternatif - 1); $i++) { ?>
                                                <th><?php echo round($ranking[$i]['nilai'], 6); ?></th>
                                            <?php } ?>
                                        </tr>
                                        <tr align="center">
                                            <th colspan="2">Peringkat</th>
                                            <?php for ($i = 0; $i <= ($jumlah_alternatif - 1); $i++) { ?>
                                                <th><?php echo $peringkat[$i]; ?></th>
                                            <?php } ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button onclick="document.location.href='<?= base_url('/') ?>'" class="btn btn-primary"><i class="bi bi-arrow-left-circle"></i> Kembali ke halaman utama</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Main Content END -->
<?php $this->endSection(); ?>