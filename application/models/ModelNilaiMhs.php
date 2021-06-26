<?php


class ModelNilaiMhs extends CI_Model
{
    public function getById($id)
    {
        $this->db->select('nilai_mhs.*, data_mhs.name, data_mhs.nim')->from('nilai_mhs')->join('data_mhs', 'nilai_mhs.data_mhsID = data_mhs.id')->where('data_mhs.id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function addNilai()
    {

        $id = $this->db->get('data_mhs')->last_row('array');

        $data = [
            'smt1' => $this->input->post('smt1', true),
            'smt2' => $this->input->post('smt2', true),
            'smt3' => $this->input->post('smt3', true),
            'smt4' => $this->input->post('smt4', true),
            'data_mhsID' => $id['id']
        ];

        $this->db->insert('nilai_mhs', $data);
    }
}
