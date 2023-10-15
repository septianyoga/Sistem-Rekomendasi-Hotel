<?= $this->extend('layout/main_backend') ?>
<?= $this->section('content') ?>
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Matriks Hasil Perbandingan Kriteria</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Kriteria</th>
                                    <?php for ($i = 0; $i <= ($jumlah - 1); $i++) { ?>
                                        <td align="center"><?= $kriteria[$i]['nama_kriteria']; ?></td>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i <= ($jumlah - 1); $i++) { ?>
                                    <tr>
                                        <td><?= $kriteria[$i]['nama_kriteria']; ?></td>
                                        <?php for ($j = 0; $j <= ($jumlah - 1); $j++) { ?>
                                            <td align="center"><?= round($matriks[$i][$j], 2); ?></td>
                                        <?php } ?>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <h4>Matriks Bobot Kriteria</h4>
                        <table class="table table-striped table-bordered">
                            <thead align="center">
                                <tr>
                                    <th scope="col">Kriteria</th>
                                    <?php for ($i = 0; $i <= ($jumlah - 1); $i++) { ?>
                                        <td><?= $kriteria[$i]['nama_kriteria']; ?></td>
                                    <?php } ?>
                                    <th>Jumlah</th>
                                    <th>Bobot</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i <= ($jumlah - 1); $i++) { ?>
                                    <tr>
                                        <td><?= $kriteria[$i]['nama_kriteria']; ?></td>
                                        <?php for ($j = 0; $j <= ($jumlah - 1); $j++) { ?>
                                            <td align="center"><?= round($matriks_eigen_vektor[$i][$j], 6); ?></td>
                                        <?php } ?>
                                        <td align="center"><?= round($jumlah_baris[$i], 6); ?></td>
                                        <td align="center"><?= round($bobot_kriteria[$i], 6); ?></td>
                                    </tr>
                                <?php } ?>
                                <tr>
                                    <th colspan="<?= $jumlah + 2; ?>">Eigen Vektor (λ max)</th>
                                    <td><?= round($lambda_max, 6); ?></td>
                                </tr>
                                <tr>
                                    <th colspan="<?= $jumlah + 2; ?>">Index Konsistensi (CI)</th>
                                    <td><?= round($ci, 6); ?></td>
                                </tr>
                                <tr>
                                    <th colspan="<?= $jumlah + 2; ?>">Rasio Konsistensi (CR)</th>
                                    <td><?= round($cr * 100, 2); ?>%</td>
                                </tr>
                            </tbody>
                        </table>
                        <button onclick="document.location.href='<?= base_url('kriteria') ?>'" class="btn btn-primary"><i class="bi bi-arrow-left"></i>Kembali</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>