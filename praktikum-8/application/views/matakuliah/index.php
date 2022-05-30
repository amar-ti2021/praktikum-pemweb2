<div class="col-md-12">
    <h3>
        Daftar Matakuliah
    </h3>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Kode</th>
                <th>Nama Matakuliah</th>
                <th>SKS</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($list_mk as $mk) {
            ?>
                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $mk->kode ?></td>
                    <td><?= $mk->nama ?></td>
                    <td><?= $mk->sks ?></td>
                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>