<?php
class PersegiPanjang
{
    private $panjang;
    private $lebar;

    public function __construct($p, $l)
    {
        $this->panjang = $p;
        $this->lebar = $l;
    }

    public function getLuas()
    {
        return $this->panjang * $this->lebar;
    }

    public function getKeliling()
    {
        return 2 * ($this->panjang + $this->lebar);
    }
}
