<?= $this->extend('templates/admin/index'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
            <div class="row">
                <!-- Users -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Users</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">2</div>
                                </div>
                                <!--  -->
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- kamar -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Tipe Kamar</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Total <?= $kamar; ?></div>
                                </div>
                                <!--  -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Transaksi -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Transaksi</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                </div>
                                <!--  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection(); ?> 