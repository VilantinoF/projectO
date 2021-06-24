<?php

class Mahasiswa extends Controller
{

    public function index()
    {

        $data['tittle'] = 'Data Mahasiswa';
        $data['mhs'] = $this->model('MhsModel')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('dosen/index', $data);
        $this->view('templates/footer');
    }
    
    
    public function add_mahasiswa()
    {
        $data['tittle'] = 'Tambah Data Mahasiswa';
        $this->view('templates/header', $data);
        $this->view('dosen/add_dosen');
        $this->view('templates/footer');
    }
}
