<?php

class Hmj extends CI_Controller
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

        $data['tittle'] = 'Himpunan Mahasiswa Jurusan';

        $this->form_validation->set_rules('sproblem', '', 'required');
        $sproblem = $this->input->post('sproblem', true);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('hmj/index');
            $this->load->view('templates/footer');
        } else {
            switch ($sproblem) {
                case '210':
                    $sproblem = 'Struktur';
                    break;
                case '220':
                    $sproblem = 'Event';
                    break;
                case '230':
                    $sproblem = 'Pengumuman';
                    break;
            }
            redirect('Hmj/' . $sproblem);
        }
    }

    public function struktur()
    {
        $data['tittle'] = 'Struktur Organisasi';

        $data['struktur'] = $this->db->get('struktur_organisasi')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('hmj/struktur', $data);
        $this->load->view('templates/footer');
    }

    public function event()
    {
        $data['tittle'] = 'Event';

        $data['event'] = $this->db->get('event')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('hmj/event', $data);
        $this->load->view('templates/footer');
    }

    public function pengumuman()
    {
        $data['tittle'] = 'Pengumuman';

        $data['event'] = $this->db->get('pengumuman')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('hmj/pengumuman', $data);
        $this->load->view('templates/footer');
    }

    public function addStruktur()
    {

        $data['tittle'] = 'Tambah Struktur Organisasi';
        // $data['kelas'] = $this->ModelHimpunan->getStruktur();

        $this->form_validation->set_rules('name', 'nama', 'required');
        $this->form_validation->set_rules('jabatan', 'jabatan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('hmj/add_struktur', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => $this->input->post('name', true),
                'kelas' => $this->input->post('kelas', true),
                'jabatan' => $this->input->post('jabatan', true)
            ];
            $this->db->insert('struktur_organisasi', $data);
            redirect('Hmj/Struktur');
        }
    }

    public function addEvent()
    {

        $data['tittle'] = 'Tambah Event';
        // $data['kelas'] = $this->ModelHimpunan->getStruktur();

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('tgl', 'Tanggal', 'required');
        $this->form_validation->set_rules('ket', 'Keterangan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('hmj/add_event', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'judul' => $this->input->post('judul', true),
                'tgl' => $this->input->post('tgl', true),
                'ket' => $this->input->post('ket', true)
            ];
            $this->db->insert('event', $data);
            redirect('Hmj/Event');
        }
    }

    public function addPengumuman()
    {

        $data['tittle'] = 'Tambah Pengumuman';
        // $data['kelas'] = $this->ModelHimpunan->getStruktur();

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('tgl', 'Tanggal', 'required');
        $this->form_validation->set_rules('ket', 'Keterangan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('hmj/add_pengumuman', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'judul' => $this->input->post('judul', true),
                'tgl' => $this->input->post('tgl', true),
                'ket' => $this->input->post('ket', true)
            ];
            $this->db->insert('pengumuman', $data);
            redirect('Hmj/Pengumuman');
        }
    }
}
