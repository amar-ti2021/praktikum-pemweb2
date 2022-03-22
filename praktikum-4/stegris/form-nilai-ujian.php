<?php
$title = "Form Nilai Ujian";
require_once 'layout/page_header.php';
require_once 'class/NilaiMahasiswa.php'
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Form Nilai Ujian</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Form Nilai Ujian</li>
        </ol>
        <div class="card mb-4">
            <div class="container-fluid p-3 border border-primary">
                <form method="GET" action="">
                    <div class="form-group row">
                        <label for="nim" class="col-5 col-form-label">NIM</label>
                        <div class="col-7">
                            <input id="nim" name="nim" placeholder="NIM Mahasiswa" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="matkul" class="col-5 col-form-label">Mata Kuliah</label>
                        <div class="col-7">
                            <select id="matkul" name="matkul" class="custom-select" required="required">
                                <option value="DDP">Dasar Dasar Pemrograman</option>
                                <option value="BD1">Basis Data 1</option>
                                <option value="WEB1">Pemrograman Web</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai" class="col-5 col-form-label">Nilai</label>
                        <div class="col-7">
                            <input id="nilai" name="nilai" placeholder="Nilai UTS" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-7">
                            <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
            <?php
            if (isset($_GET['proses'])) :
                $_nim = $_GET['nim'];
                $_matkul = $_GET['matkul'];
                $_nilai = $_GET['nilai'];
            ?>
                <div class="container-fluid mt-2 p-3 border border-primary">
                    <div class="row">
                        <div class="col-5">NIM Mahasiswa</div>
                        <div class="col-7">: <?php echo $_nim; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-5">Matakuliah</div>
                        <div class="col-7">: <?php echo $_matkul; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-5">Nilai</div>
                        <div class="col-7">: <?php echo $_nilai; ?></div>
                    </div>

                    <?php
                    $nilai = new NilaiMahasiswa($_nim, $_matkul, $_nilai);
                    ?>
                    <div class="row">
                        <div class="col-5">Grade</div>
                        <div class="col-7">: <?php echo $nilai->grade(); ?></div>
                    </div>
                    <div class="row">
                        <div class="col-5">Kelulusan</div>
                        <div class="col-7">: <?php echo $nilai->hasil(); ?></div>
                    </div>
                </div>
            <?php
            endif;
            ?>
        </div>
    </div>
</main>
<?php
require_once 'layout/page_footer.php';
?>