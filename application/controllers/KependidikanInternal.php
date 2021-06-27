<?php

class KependidikanInternal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('Auth');
        }
    }

    public function index()
    {

        $this->form_validation->set_rules('sproblem', '', 'required');
        $sproblem = $this->input->post('sproblem', true);
        if ($this->form_validation->run() == false) {
            $data['tittle'] = 'Kependidikan Internal';
            $this->load->view('templates/header', $data);
            $this->load->view('kependidikan_intern/index');
            $this->load->view('templates/footer');
        } else {
            switch ($sproblem) {
                case '410':
                    # code...
                    $sproblem = 'DataPribadi';
                    break;
                case '420':
                    # code...
                    $sproblem = 'Jadwal';
                    break;
                case '430':
                    # code...
                    $sproblem = 'AnggaranFasilitas';
                    break;
            }
            redirect('KependidikanInternal/' . $sproblem);
        }
    }

    public function dataPribadi()
    {
        $data['tittle'] = 'Data Pribadi';
        $data['dosen'] = $this->ModelDosen->getAllDosen();
        $data['mahasiswa'] = $this->db->get('data_mhs')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('kependidikan_intern/data_pribadi', $data);
        $this->load->view('templates/footer');
    }

    public function dosen($id)
    {

        $data['tittle'] = 'Data Dosen';

        $data['dosen'] = $this->ModelDosen->getById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('kependidikan_intern/dosen', $data);
        $this->load->view('templates/header');
    }

    public function addDosen()
    {
        $data['tittle'] = 'Data Dosen';

        $this->form_validation->set_rules('nip', 'NIP', 'required|numeric|exact_length[18]');
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('address', 'Alamat', 'required');
        $this->form_validation->set_rules('city', 'Kota', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('kependidikan_intern/add_dosen');
            $this->load->view('templates/header');
        } else {
            $this->ModelDosen->addDosen();
            redirect('KependidikanInternal/DataPribadi');
        }
    }

    public function mahasiswa($id)
    {

        $data['tittle'] = 'Data Mahasiswa';
        $data['mahasiswa'] = $this->db->get_where('data_mhs', ['id' => $id])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('kependidikan_intern/mahasiswa', $data);
        $this->load->view('templates/header');
    }

    public function nilaiMahasiswa($id)
    {

        $data['tittle'] = 'Data Mahasiswa';
        $data['nilaiMhs'] = $this->ModelNilaiMhs->getById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('kependidikan_intern/nilai_mahasiswa', $data);
        $this->load->view('templates/header');
    }

    public function addMahasiswa()
    {
        $data['tittle'] = 'Tambah Data Mahasiswa';

        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric|exact_length[8]');
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('city', 'Kota', 'required');
        $this->form_validation->set_rules('smt1', 'Nilai', 'required');
        $this->form_validation->set_rules('smt2', 'Nilai', 'required');
        $this->form_validation->set_rules('smt3', 'Nilai', 'required');
        $this->form_validation->set_rules('smt4', 'Nilai', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('kependidikan_intern/add_mahasiswa');
            $this->load->view('templates/header');
        } else {
            $this->ModelMahasiswa->addMahasiswa();
            $this->ModelMahasiswa->getNilaiById();
            redirect('KependidikanInternal/DataPribadi');
        }
    }

    public function jadwal()
    {
        $data['tittle'] = 'Jadwal Belajar';
        $data['jadwal'] = $this->db->get('jadwal')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('kependidikan_intern/jadwal_belajar', $data);
        $this->load->view('templates/footer');
    }

    public function addJadwal()
    {
        $data['tittle'] = 'Tambah Jadwal Belajar';

        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        // $this->form_validation->set_rules('file', 'Kelas', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('kependidikan_intern/add_jadwal');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'kls' => $this->input->post('kelas', true),
                'smt' => $this->input->post('smt', true),
                'file' => $this->input->post('file', true),
            ];

            $this->db->insert('jadwal', $data);
            redirect('KependidikanInternal/Jadwal');
        }
    }

    public function anggaranFasilitas()
    {
        $data['tittle'] = 'Anggaran Fasilitas';
        $data['anggaran'] = $this->db->get('anggaran')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('kependidikan_intern/anggaran_fasilitas', $data);
        $this->load->view('templates/footer');
    }

    public function addAnggaranFasilitas()
    {
        $data['tittle'] = 'Tambah Data';

        $this->form_validation->set_rules('benda', 'Benda', 'required');
        $this->form_validation->set_rules('gedung', 'Gedung', 'required');
        // $this->form_validation->set_rules('file', 'Kelas', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('kependidikan_intern/add_anggaran_fasilitas');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'benda' => $this->input->post('benda', true),
                'gedung' => $this->input->post('gedung', true),
                'file' => $this->input->post('file', true),
            ];

            $this->db->insert('anggaran', $data);
            redirect('KependidikanInternal/AnggaranFasilitas');
        }
    }
}
