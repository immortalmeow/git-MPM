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

	public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

   	public function getById($id_indra)
    {
        return $this->db->get_where($this->_table, ["id_indra" => $id_indra])->row();
    }
	public function save()
    {
        $post = $this->input->post();
        $this->nama_indra = $post["nama_indra"];
        $this->username_indra = $post["username_indra"];
        $this->password_indra = $post["password_indra"];
        $this->level_indra = $post["level_indra"];
        //$this->description = $post["description"];
        return $this->db->insert($this->_table, $this);
    }

	public function update()
    {
        $post = $this->input->post();
        $this->id_indra = $post["id_indra"];
        $this->nama_indra = $post["nama_indra"];
        $this->username_indra = $post["username_indra"];
        $this->password_indra = $post["password_indra"];
        $this->level_indra = $post["level_indra"];
        // $this->description = $post["description"];
        return $this->db->update($this->_table, $this, array('id_indra' => $post['id_indra']));
    }
