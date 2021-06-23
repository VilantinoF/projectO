<?php

class DataPribadi extends Controller
{
    public function index()
    {
        $data['tittle'] = 'Home';
        $data['dsn'] = $this->model('DsnModel')->getAllDosen();
        $data['mhs'] = $this->model('MhsModel')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('data_pribadi/index', $data);
        $this->view('templates/footer');
    }

    public function add_dosen()
    {
        $data['tittle'] = 'Tambah Data Dosen';
        $this->view('templates/header', $data);
        $this->view('data_pribadi/add_dosen');
        $this->view('templates/footer');
    }


    public function add_mahasiswa()
    {
        $data['tittle'] = 'Tambah Data Mahasiswa';
        $this->view('templates/header', $data);
        $this->view('data_pribadi/add_mahasiswa');
        $this->view('templates/footer');
    }


}
