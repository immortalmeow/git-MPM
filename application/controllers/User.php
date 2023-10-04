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
    public function delete($id_indra = null)
    {
        if (!isset($id_indra)) show_404();

        if ($this->mahasiswa_model->delete($id_indra)) {
            redirect(site_url('user/table'));
        }
    }
}
