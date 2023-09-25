<?= $this->extend('layout/main_backend') ?>
<?= $this->section('content') ?>
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Tambah Alternatif Hotel</h4>
                        </div>
                    </div>
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
                    <div class="iq-card-body">
                        <form action="<?= base_url('alternatif') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nama_alternatif">Nama Alternatif Hotel :</label>
                                <input type="text" name="nama_alternatif" class="form-control" id="nama_alternatif" placeholder="Masukan Nama Hotel" required>
                            </div>
                            <?php foreach ($kriteria as $val) { ?>
                                <div class="form-group">
                                    <label for="<?= $val['nama_kriteria'] ?>"><?= $val['nama_kriteria'] ?>:</label>
                                    <input type="<?= $val['tipe'] == 'image' ? 'file' : $val['tipe'] ?>" name="<?= $val['id_kriteria'] ?>" class="<?= $val['tipe'] == 'image' ? 'form-control-file' : 'form-control' ?>" id="<?= $val['nama_kriteria'] ?>" placeholder="Masukan <?= $val['nama_kriteria'] ?>" required>
                                </div>
                            <?php } ?>
                            <div class="form-group">
                                <label for="nama_alternatif">Link Website Hotel :</label>
                                <input type="text" name="link_website" class="form-control" id="nama_alternatif" placeholder="Tempel Link Website Disini" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="<?= base_url('alternatif') ?>" class="btn iq-bg-danger">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kriteria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('kriteria') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama Kriteria :</label>
                        <input type="text" name="nama_kriteria" class="form-control" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="tipe">Tipe Value Kriteria :</label>
                        <select name="tipe" id="tipe" class="form-control">
                            <option value="">-- Pilih Value --</option>
                            <option value="text">Text</option>
                            <option value="number">Number</option>
                            <option value="image">Image</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>