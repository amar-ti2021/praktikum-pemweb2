<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dosen extends CI_Controller
{
    public function index()
    {
        $this->load->model('dosen_model', 'dsn1');
        $this->dsn1->id = 1;
        $this->dsn1->nidn = "010010";
        $this->dsn1->nama = "Prasetya Najmudin, M.KOM";
        $this->dsn1->gender = "L";
        $this->dsn1->pendidikan = "S2";

        $this->load->model('dosen_model', 'dsn2');
        $this->dsn2->id = 2;
        $this->dsn2->nidn = "010011";
        $this->dsn2->nama = "DR. Cindy Mandasari, M.M";
        $this->dsn2->gender = "L";
        $this->dsn2->pendidikan = "S3";

        $this->load->model('dosen_model', 'dsn3');
        $this->dsn3->id = 3;
        $this->dsn3->nidn = "010012";
        $this->dsn3->nama = "DR. Balapati Wijaya, M.AK";
        $this->dsn3->gender = "L";
        $this->dsn3->pendidikan = "S3";

        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['list_dsn'] = $list_dsn;
        $this->load->view('header');
        $this->load->view('dosen/index', $data);
        $this->load->view('footer');
    }
}
