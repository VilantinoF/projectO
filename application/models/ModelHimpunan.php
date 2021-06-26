<?php

class ModelHimpunan extends CI_Model
{

    public function getStruktur()
    {
        $query = "SELECT `jadwal`.`kls`, `struktur_organisasi`.*
                    FROM `struktur_organisasi` JOIN `jadwal`       
                    ON `jadwal`.`id` = `struktur_organisasi`.`jadwal_id`
        ";

        var_dump($this->db->query($query)->result_array());
    }
}
