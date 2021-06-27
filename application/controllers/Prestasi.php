<?php

class Prestasi extends CI_Controller
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

        $data['tittle'] = 'Prestasi';

        $this->form_validation->set_rules('sproblem', '', 'required');
        $sproblem = $this->input->post('sproblem', true);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('prestasi/index');
            $this->load->view('templates/footer');
        } else {
            switch ($sproblem) {
                case '310':
                    $sproblem = 'Dosen';
                    break;
                case '320':
                    $sproblem = 'Mahasiswa';
                    break;
            }
            redirect('Prestasi/' . $sproblem);
        }
    }

    public function dosen()
    {

        $data['tittle'] = 'Prestasi Dosen';

        $data['dosen'] = $this->db->get('prestasi_dosen')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('prestasi/dosen', $data);
        $this->load->view('templates/footer');
    }

    public function addPrestasiDosen()
    {

        $data['tittle'] = 'Tambah Prestasi Dosen';
        // $data['kelas'] = $this->ModelHimpunan->getStruktur();

        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('jenis_lomba', 'Jenis Lomba', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('prestasi/add_prestasi_dosen');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => $this->input->post('name', true),
                'perwakilan' => $this->input->post('perwakilan', true),
                'jenis_lomba' => $this->input->post('jenis_lomba', true)
            ];
            $this->db->insert('prestasi_dosen', $data);
            redirect('Prestasi/Dosen');
        }
    }

    public function mahasiswa()
    {
        $data['tittle'] = 'Prestasi Mahasiswa';

        $data['mahasiswa'] = $this->db->get('prestasi_mahasiswa')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('prestasi/mahasiswa', $data);
        $this->load->view('templates/footer');
    }

    public function addPrestasiMahasiswa()
    {

        $data['tittle'] = 'Tambah Prestasi Mahasiswa';
        // $data['kelas'] = $this->ModelHimpunan->getStruktur();

        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('kls', 'Kelas', 'required');
        $this->form_validation->set_rules('jenis_lomba', 'Jenis Lomba', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('prestasi/add_prestasi_mhs', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => $this->input->post('name', true),
                'kls' => $this->input->post('kls', true),
                'perwakilan' => $this->input->post('perwakilan', true),
                'jenis_lomba' => $this->input->post('jenis_lomba', true)
            ];
            $this->db->insert('prestasi_mahasiswa', $data);
            redirect('Prestasi/Mahasiswa');
        }
    }
}
