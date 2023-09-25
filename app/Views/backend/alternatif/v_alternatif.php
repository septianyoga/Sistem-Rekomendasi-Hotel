<?= $this->extend('layout/main_backend') ?>
<?= $this->section('content') ?>
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Alternatif</h4>
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
                        <div class="row justify-content-between">
                            <div class="col-sm-12 col-md-6">
                                <div id="user_list_datatable_info" class="dataTables_filter">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 pb-3">
                                <div class="user-list-files d-flex float-right">
                                    <a href="<?= base_url('alternatif/add') ?>" class="btn btn-primary"><i class="ri-add-circle-line"></i>Tambah Alternatif</a>
                                </div>
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Alternatif Hotel</th>
                                    <th scope="col" style="width: 50%;">Deskripsi</th>
                                    <th scope="col">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data as $row) { ?>
                                    <tr>
                                        <td><?= $no++ ?>.</td>
                                        <td><?= $row['nama_alternatif'] ?></td>
                                        <td>
                                            <?php foreach ($alternatif as $value) {
                                                if ($value['id_alternatif'] == $row['id_alternatif']) {
                                            ?>
                                                    <p><?= $value['nama_kriteria'] ?> : <?= $value['tipe'] == 'image' ? '<br><img src="' . base_url('foto_alternatif/' . $value['value']) . '" alt="" class="w-50">' : $value['value'] ?></p>
                                                <?php } ?>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button class="btn btn-success mt-1" data-toggle="modal" data-target="#edit-<?= $row['id_alternatif'] ?>" class="btn btn-success">Edit</button>
                                            <button class="btn btn-danger mt-1" data-toggle="modal" data-target="#hapus-<?= $row['id_alternatif'] ?>" class="btn btn-success">Hapus</button>
                                        </td>

                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
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
<!-- modal hapus -->
<?php foreach ($data as $hapus) { ?>
    <div class="modal fade" id="hapus-<?= $hapus['id_alternatif'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kriteria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Yakin anda ingin menghapus Alternatif <b><?= $hapus['nama_alternatif'] ?> ?</b></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('alternatif/' . $hapus['id_alternatif']) ?>" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?php $this->endSection(); ?>