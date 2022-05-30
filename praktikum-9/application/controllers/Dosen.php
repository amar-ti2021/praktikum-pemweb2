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
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/index', $data);
        $this->load->view('layout/footer');
    }
    public function create()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/create');
        $this->load->view('layout/footer');
    }
    public function save()
    {
        $this->load->model('dosen_model', 'dsn');
        $this->dsn->id = 4;
        $this->dsn->nidn = $this->input->post('nidn');
        $this->dsn->nama = $this->input->post('nama');
        $this->dsn->gender = $this->input->post('gender');
        $this->dsn->tmp_lahir = $this->input->post('tmp_lahir');
        $this->dsn->tgl_lahir = $this->input->post('tgl_lahir');
        $this->dsn->pendidikan = $this->input->post('pendidikan');
        $data['dsn'] = $this->dsn;

        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/view', $data);
        $this->load->view('layout/footer');
    }
}
