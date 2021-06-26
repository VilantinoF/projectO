<?php

class ModelMahasiswa extends CI_Model
{

    public function getAllMahasiswa()
    {
        return $this->db->get('data_mhs')->result_array();
    }

    public function getById($id)
    {
        return $this->db->get_where('data_mhs', ['id' => $id])->row_array();
    }

    public function addMahasiswa()
    {

        $data = [
            'nim' => $this->input->post('nim', true),
            'name' => $this->input->post('name', true),
            'city' => $this->input->post('city', true)
        ];


        $this->db->insert('data_mhs', $data);
    }
}
