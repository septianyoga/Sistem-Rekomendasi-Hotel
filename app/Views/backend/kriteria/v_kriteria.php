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
                        <ul class="nav nav-pills mb-3 nav-fill" id="pills-tab-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab-fill" data-toggle="pill" href="#pills-home-fill" role="tab" aria-controls="pills-home" aria-selected="true">Daftar Kriteria</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab-fill" data-toggle="pill" href="#pills-profile-fill" role="tab" aria-controls="pills-profile" aria-selected="false">Input Perbandingan</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent-1">
                            <div class="tab-pane fade show active" id="pills-home-fill" role="tabpanel" aria-labelledby="pills-home-tab-fill">
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
                            <div class="tab-pane fade" id="pills-profile-fill" role="tabpanel" aria-labelledby="pills-profile-tab-fill">
                                <form action="<?= base_url('kriteria_perbandingan') ?>" method="post">
                                    <table id="datatable" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Pilih yang lebih penting</th>
                                                <th>Nilai Perbandingan</th>
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
                                                                <input type="radio" id="krietria<?= $urut . $x ?>" name="perbandingan<?= $urut ?>" class="custom-control-input" value="1" <?= $kriteria_perbandingan != null ? ($kriteria_perbandingan[$urut - 1]['nilai'] > 1 ? 'checked' : '') : '' ?> required>
                                                                <label class="custom-control-label" for="krietria<?= $urut . $x ?>"> <?= $data[$x]['nama_kriteria'] ?> </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="krietria<?= $urut . $y ?>" name="perbandingan<?= $urut ?>" class="custom-control-input" value="2" <?= $kriteria_perbandingan != null ? ($kriteria_perbandingan[$urut - 1]['nilai'] < 1 ? 'checked' : '') : '' ?> required>
                                                                <label class="custom-control-label" for="krietria<?= $urut . $y ?>"> <?= $data[$y]['nama_kriteria'] ?> </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <select class="form-control" name="nilai<?= $urut ?>">
                                                                <?php for ($i = 1; $i <= 9; $i++) { ?>
                                                                    <option value="<?= $i ?>" <?= $kriteria_perbandingan != null ? ($kriteria_perbandingan[$urut - 1]['nilai'] > 1 ? ($kriteria_perbandingan[$urut - 1]['nilai'] == $i ? 'selected' : '') : (round(1 / $kriteria_perbandingan[$urut - 1]['nilai']) == $i ? 'selected' : '')) : '' ?>><?= $perbandingan[$i - 1] ?></option>

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
                                        <button type="submit" class="btn btn-primary"><i class="bi bi-arrow-repeat"></i>Hitung</button>
                                    </div>
                                </form>
                            </div>
                        </div>

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