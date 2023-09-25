<?= $this->extend('layout/main_backend') ?>
<?= $this->section('content') ?>
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Kriteria</h4>
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
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="ri-add-circle-line"></i>Tambah Kriteria</button>
                                </div>
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Kriteria</th>
                                    <th scope="col">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data as $row) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $row['nama_kriteria'] ?></td>
                                        <td>
                                            <button class="btn btn-success" data-toggle="modal" data-target="#edit-<?= $row['id_kriteria'] ?>" class="btn btn-success">Edit</button>
                                            <button class="btn btn-danger" data-toggle="modal" data-target="#hapus-<?= $row['id_kriteria'] ?>" class="btn btn-success">Hapus</button>
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

<!-- modal edit -->
<?php foreach ($data as $val) { ?>
    <div class="modal fade" id="edit-<?= $val['id_kriteria'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('kriteria/' . $val['id_kriteria'] . '/edit') ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama">Nama Kriteria :</label>
                            <input type="text" name="nama_kriteria" class="form-control" id="nama" value="<?= $val['nama_kriteria'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="tipe">Tipe Value Kriteria :</label>
                            <select name="tipe" id="tipe" class="form-control">
                                <option value="text" <?= $val['tipe'] == 'text' ? 'selected' : '' ?>>Text</option>
                                <option value="number" <?= $val['tipe'] == 'number' ? 'selected' : '' ?>>Number</option>
                                <option value="image" <?= $val['tipe'] == 'image' ? 'selected' : '' ?>>Image</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>

<!-- modal hapus -->
<?php foreach ($data as $val) { ?>
    <div class="modal fade" id="hapus-<?= $val['id_kriteria'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('kriteria/' . $val['id_kriteria']) ?>" method="post">
                    <div class="modal-body">
                        <p>Yakin ingin menghapus kriteria <b><?= $val['nama_kriteria'] ?> ?</b></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>
<?php $this->endSection(); ?>