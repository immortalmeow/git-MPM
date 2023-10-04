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

    public function edit($id_indra = null)
    {
        if (!isset($id_indra)) redirect('indra');

        $indra = $this->mahasiswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($indra->rules());

        if ($validation->run()) {
            $indra->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["indra"] = $indra->getById($id_indra);
        if (!$data["indra"]) show_404();

        $this->load->view("edit_form", $data);
    }
}
