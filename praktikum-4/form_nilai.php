<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Nilai</title>
    <style>
        * {
            box-sizing: border-box;
        }
    </style>
</head>

<body class="p-5">
    <div class="container-fluid p-3 border border-primary">
        <form method="GET" action="form_nilai.php">
            <div class="form-group row">
                <label for="nama" class="col-5 col-form-label">Nama Lengkap</label>
                <div class="col-7">
                    <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" required="required">
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
                <label for="nilai_uts" class="col-5 col-form-label">Nilai UTS</label>
                <div class="col-7">
                    <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uas" class="col-5 col-form-label">Nilai UAS</label>
                <div class="col-7">
                    <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_tugas" class="col-5 col-form-label">Nilai Tugas/Praktikum</label>
                <div class="col-7">
                    <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas/Praktikum" type="text" class="form-control">
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
        $_nama = $_GET['nama'];
        $_matkul = $_GET['matkul'];
        $_nilai_uts = $_GET['nilai_uts'];
        $_nilai_uas = $_GET['nilai_uas'];
        $_nilai_tugas = $_GET['nilai_tugas'];
    ?>
        <div class="container-fluid mt-2 p-3 border border-primary">
            <div class="row">
                <div class="col-5">Nama Mahasiswa</div>
                <div class="col-7">: <?php echo $_nama; ?></div>
            </div>
            <div class="row">
                <div class="col-5">Matakuliah</div>
                <div class="col-7">: <?php echo $_matkul; ?></div>
            </div>
            <div class="row">
                <div class="col-5">Nilai UTS</div>
                <div class="col-7">: <?php echo $_nilai_uts; ?></div>
            </div>
            <div class="row">
                <div class="col-5">Nilai UAS</div>
                <div class="col-7">: <?php echo $_nilai_uas; ?></div>
            </div>
            <div class="row">
                <div class="col-5">Nilai Tugas/Praktikum</div>
                <div class="col-7">: <?php echo $_nilai_tugas; ?></div>
            </div>

            <?php
            $total_nilai =
                ($_nilai_uts * 30 / 100) +
                ($_nilai_uas * 35 / 100) +
                ($_nilai_tugas * 35 / 100);
            $kelulusan = "Tidak Lulus";
            $grade = "A";
            if ($total_nilai <= 35) :
                $grade = "E";
            elseif ($total_nilai <= 55) :
                $grade = "D";
            elseif ($total_nilai <= 69) :
                $grade = "C";
            elseif ($total_nilai <= 84) :
                $grade = "B";
            endif;
            switch ($grade) {
                case "A":
                    $predikat = "Sangat Memuaskan";
                    break;
                case "B":
                    $predikat = "Memuaskan";
                    break;
                case "C":
                    $predikat = "Cukup";
                    break;
                case "D":
                    $predikat = "Kurang";
                    break;
                case "E":
                    $predikat = "Sangat Kurang";
                    break;
                default:
                    $predikat = "Tidak Ada";
            }
            if ($total_nilai > 55) :
                $kelulusan = "Lulus";
            endif;
            ?>
            <div class="row">
                <div class="col-5">Rata-rata Nilai</div>
                <div class="col-7">: <?php echo $total_nilai; ?></div>
            </div>
            <div class="row">
                <div class="col-5">Grade</div>
                <div class="col-7">: <?php echo $grade; ?></div>
            </div>
            <div class="row">
                <div class="col-5">Predikat</div>
                <div class="col-7">: <?php echo $predikat; ?></div>
            </div>
            <div class="row">
                <div class="col-5">Kelulusan</div>
                <div class="col-7">: <?php echo $kelulusan; ?></div>
            </div>
        </div>
    <?php
    endif;
    ?>
</body>

</html>