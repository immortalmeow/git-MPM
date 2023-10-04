<?php defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
    private $_table = "user_indra";

    public $id_indra;
    public $nama_indra;
    public $username_indra;
    public $password_indra;
    public $level_indra;
    //public $Nohp_139;
    //    public $image = "default.jpg";
    //    public $description;

	public function rules()
    {
        return [
            [
                'field' => 'nama_indra',
                'label' => 'nama_indra',
                'rules' => 'required'
            ],

            [
                'field' => 'username_indra',
                'label' => 'username_indra',
                'rules' => 'required'
            ],

            [
                'field' => 'password_indra',
                'label' => 'password_indra',
                'rules' => 'required'
            ],

            [
                'field' => 'level_indra',
                'label' => 'level_indra',
                'rules' => 'required'
            ],
        ];
    }
