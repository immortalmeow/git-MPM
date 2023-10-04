<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("mahasiswa_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        //$data["mahasiswa"] = $this->Pegawai_model->getAll();
        //$this->load->view("admin/mahasiswa/list", $data); //menampilkan
        $this->load->view("home");
    }

    public function list()
    {
        $data["indra"] = $this->mahasiswa_model->getAll();
        //$this->load->view("admin/mahasiswa/list", $data); //menampilkan
        $this->load->view("daftar", $data); //menampilkan

    }

    public function table()
    {
        $data["indra"] = $this->mahasiswa_model->getAll();
        //$this->load->view("admin/mahasiswa/list", $data); //menampilkan
        $this->load->view("table", $data); //menampilkan

    }

    public function cari()
    {

        $data['keyword'] = $this->input->get('keyword');
        $this->load->model('mahasiswa_model');

        $data['search_result'] = $this->mahasiswa_model->caridata($data['keyword']);

        $this->load->view('cari_form.php', $data);
    }

    public function add()
    {
        $indra = $this->mahasiswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($indra->rules());
        //$this->load->view("menu");

        if ($validation->run()) {
            $indra->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            //$buku->getAll();
            //$this->load->view("daftar");
        } else $this->session->set_flashdata('success', 'Gagal disimpan');

        $this->load->view("new_form");
    }
}
