<?php
require_once "../class/Mahasiswa.php";

$data = [
    ["0110220001", "Abdul Malik", "TI", "2021", 4.0],
    ["0110220002", "Ahmad Maulana", "TI", "2021", 3.76],
    ["0110220003", "Annisa Az-zahra", "TI", "2021", 3.8],
    ["0110220004", "Amira Amna", "TI", "2021", 4.0],
];

$processed_data = [];
foreach ($data as $d) {
    $processed_data[Mahasiswa::$count] = new Mahasiswa($d[0], $d[1], $d[2], $d[3], $d[4]);
}
