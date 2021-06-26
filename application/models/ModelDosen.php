<?php

class ModelDosen extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelDosen');
    }

    public function getAllDosen()
    {
        return $this->db->get('data_dsn')->result_array();
    }

    public function getById($id)
    {
        return $this->db->get_where('data_dsn', ['id' => $id])->row_array();
    }

    public function addDosen()
    {
        $data = [
            'nip' => $this->input->post('nip', true),
            'name' => $this->input->post('name', true),
            'degree' => $this->input->post('degree', true),
            'address' => $this->input->post('address', true),
            'city' => $this->input->post('city', true)
        ];

        $this->db->insert('data_dsn', $data);
    }
}
