<?php
class Mahasiswa
{
    public static $count = 0;
    public $no;
    public $nim;
    public $nama;
    public $prodi;
    public $thn_angkatan;
    public $ipk;

    public function __construct($nim, $nama, $prodi, $thn_angkatan, $ipk)
    {
        $this->no = ++self::$count;
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->thn_angkatan = $thn_angkatan;
        $this->ipk = $ipk;
    }
    public function getPredikat()
    {
        $ipk = $this->ipk;

        if ($ipk < 2) return "Cukup";
        else if ($ipk >= 2 && $ipk <= 3) return "Baik";
        else if ($ipk > 3 && $ipk <= 3.75) return "Memuaskan";
        else if ($ipk > 3.75 && $ipk <= 4) return "Cum Laude";
        else return "undefined";
    }
}
