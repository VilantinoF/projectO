<?php


class DsnModel {


    private $table = 'data_dsn';
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllDosen()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function addData($data) {
        $query = "INSERT INTO data_dsn (nip, name, degree, address, city, file) VALUES (':nip', ':name', ':degree', ':address', ':city', ':file')";


        $this->db->query($query);
        $this->db->bind('nip', $data['nip']);
        $this->db->bind('name', $data['name']);
        $this->db->bind('degree', $data['degree']);
        $this->db->bind('address', $data['address']);
        $this->db->bind('city', $data['city']);
        $this->db->bind('file', $data['file']);

        $this->db->execute();

        return $this->db->rowCount();
    }

}