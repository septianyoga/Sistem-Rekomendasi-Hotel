<?= $this->extend('layout/main_backend') ?>
<?= $this->section('content') ?>
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                    <div class="iq-card-body pb-0">
                        <h3 class="text-center line-height-6">Total Kriteria</h3>
                        <div class="clearfix"></div>
                        <div class="text-center">
                            <h2 class="mb-0"><span class="counter"><?= $kriteria; ?></span></h2>
                        </div>
                    </div>
                    <div id="chart-1"></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                    <div class="iq-card-body pb-0">
                        <h3 class="text-center line-height-6">Total Alternatif</h3>
                        <div class="clearfix"></div>
                        <div class="text-center">
                            <h2 class="mb-0"><span class="counter"><?= $alternatif ?></span></h2>
                        </div>
                    </div>
                    <div id="chart-2"></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                    <div class="iq-card-body pb-0">
                        <h3 class="text-center line-height-6">Total User</h3>
                        <div class="clearfix"></div>
                        <div class="text-center">
                            <h2 class="mb-0"><span class="counter"><?= $user ?></span></h2>
                        </div>
                    </div>
                    <div id="chart-3"></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                    <div class="iq-card-body pb-0">
                        <h3 class="text-center line-height-6">Total Pemakai</h3>
                        <div class="clearfix"></div>
                        <div class="text-center">
                            <h2 class="mb-0"><span class="counter"><?= $pemakai ?></span></h2>
                        </div>
                    </div>
                    <div id="chart-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>