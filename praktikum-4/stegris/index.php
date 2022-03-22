<?php
$title = "Dashboard";
require_once 'layout/page_header.php';
require_once 'data/mahasiswa.php';
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row mb-4">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4 h-100">
                    <div class="card-body">Tambahkan Data Mahasiswa</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white text-decoration-none stretched-link" href="#"><i class="fa-solid fa-plus"></i> Tambahkan</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Edit Data Mahasiswa</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div> -->
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4 h-100">
                    <div class="card-body">Halaman Form Nilai Ujian</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white text-decoration-none stretched-link" href="form-nilai-ujian.php"><i class="fa-solid fa-circle-info"></i> Detail</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">Danger Card</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-area me-1"></i>
                        Area Chart Example
                    </div>
                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        Bar Chart Example
                    </div>
                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
        </div> -->
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Mahasiswa
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Prodi</th>
                            <th>Thn Angkatan</th>
                            <th>IPK</th>
                            <th>Predikat</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Prodi</th>
                            <th>Thn Angkatan</th>
                            <th>IPK</th>
                            <th>Predikat</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        foreach ($processed_data as $data) :
                        ?>
                            <tr>
                                <td><?= $data->no; ?></td>
                                <td><?= $data->nim; ?></td>
                                <td><?= $data->nama; ?></td>
                                <td><?= $data->prodi; ?></td>
                                <td><?= $data->thn_angkatan; ?></td>
                                <td><?= $data->ipk; ?></td>
                                <td><?= $data->getPredikat(); ?></td>
                            </tr>
                        <?php
                        endforeach;
                        ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</main>
<?php
require_once 'layout/page_footer.php';
?>