<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matakuliah extends CI_Controller
{
    function index()
    {
        $this->load->model('matakuliah_model', 'mk1');
        $this->mk1->id = 1;
        $this->mk1->nama = "Bahasa Indonesia";
        $this->mk1->kode = "BI";
        $this->mk1->sks = 3;

        $this->load->model('matakuliah_model', 'mk2');
        $this->mk2->id = 2;
        $this->mk2->nama = "Pendidikan Kewarganegaraan";
        $this->mk2->kode = "PKN";
        $this->mk2->sks = 4;

        $this->load->model('matakuliah_model', 'mk3');
        $this->mk3->id = 3;
        $this->mk3->nama = "Digital Marketing";
        $this->mk3->kode = "DM";
        $this->mk3->sks = 3;

        $list_mk = [$this->mk1, $this->mk2, $this->mk3];
        $data['list_mk'] = $list_mk;

        $this->load->view('header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('footer');
    }
}
