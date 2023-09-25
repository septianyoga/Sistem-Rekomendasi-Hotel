<?= $this->extend('layout/main_backend') ?>
<?= $this->section('content') ?>
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                    <div class="iq-card-body pb-0">
                        <div class="rounded-circle iq-card-icon iq-bg-primary"><i class="ri-exchange-dollar-fill"></i></div>
                        <span class="float-right line-height-6">Net Worth</span>
                        <div class="clearfix"></div>
                        <div class="text-center">
                            <h2 class="mb-0"><span class="counter">65</span><span>M</span></h2>
                            <p class="mb-0 text-secondary line-height"><i class="ri-arrow-up-line text-success mr-1"></i><span class="text-success">10%</span> Increased</p>
                        </div>
                    </div>
                    <div id="chart-1"></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                    <div class="iq-card-body pb-0">
                        <div class="rounded-circle iq-card-icon iq-bg-warning"><i class="ri-bar-chart-grouped-line"></i></div>
                        <span class="float-right line-height-6">Todays Gains</span>
                        <div class="clearfix"></div>
                        <div class="text-center">
                            <h2 class="mb-0"><span>$</span><span class="counter">4500</span></h2>
                            <p class="mb-0 text-secondary line-height"><i class="ri-arrow-up-line text-success mr-1"></i><span class="text-success">20%</span> Increased</p>
                        </div>
                    </div>
                    <div id="chart-2"></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                    <div class="iq-card-body pb-0">
                        <div class="rounded-circle iq-card-icon iq-bg-success"><i class="ri-group-line"></i></div>
                        <span class="float-right line-height-6">Total Users</span>
                        <div class="clearfix"></div>
                        <div class="text-center">
                            <h2 class="mb-0"><span class="counter">96.6</span><span>K</span></h2>
                            <p class="mb-0 text-secondary line-height"><i class="ri-arrow-up-line text-success mr-1"></i><span class="text-success">30%</span> Increased</p>
                        </div>
                    </div>
                    <div id="chart-3"></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                    <div class="iq-card-body pb-0">
                        <div class="rounded-circle iq-card-icon iq-bg-danger"><i class="ri-shopping-cart-line"></i></div>
                        <span class="float-right line-height-6">Orders Received</span>
                        <div class="clearfix"></div>
                        <div class="text-center">
                            <h2 class="mb-0"><span class="counter">15.5</span><span>K</span></h2>
                            <p class="mb-0 text-secondary line-height"><i class="ri-arrow-down-line text-danger mr-1"></i><span class="text-danger">10%</span> Increased</p>
                        </div>
                    </div>
                    <div id="chart-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>