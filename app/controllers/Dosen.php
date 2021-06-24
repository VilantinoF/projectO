<?php

class Dosen extends Controller
{

    public function index()
    {

        $data['tittle'] = 'Data Dosen';
        $data['dsn'] = $this->model('DsnModel')->getAllDosen();
        $this->view('templates/header', $data);
        $this->view('dosen/index', $data);
        $this->view('templates/footer');
    }
    
    
    public function add_dosen()
    {
        $data['tittle'] = 'Tambah Data Dosen';
        $this->view('templates/header', $data);
        $this->view('dosen/add_dosen');
        $this->view('templates/footer');
    }
}
