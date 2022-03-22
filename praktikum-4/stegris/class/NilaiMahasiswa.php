<?php
class NilaiMahasiswa
{
    public $nim;
    public $matkul;
    public $nilai;

    public function __construct($nim, $matkul, $nilai)
    {
        $this->nim = $nim;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
    }

    public function grade()
    {
        $grade = "A";
        if ($this->nilai <= 35) :
            $grade = "E";
        elseif ($this->nilai <= 55) :
            $grade = "D";
        elseif ($this->nilai <= 69) :
            $grade = "C";
        elseif ($this->nilai <= 84) :
            $grade = "B";
        endif;

        return $grade;
    }

    public function hasil()
    {
        if ($this->nilai <= 55) :
            return "Tidak Lulus";
        endif;
        return "Lulus";
    }
}
