<?php

class MainProblem extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {


        $this->form_validation->set_rules('mproblem', '', 'required');
        if ($this->form_validation->run() == false) {
            $data['tittle'] = 'Masalah Utama';
            $this->load->view('templates/header', $data);
            $this->load->view('main_problem/index');
            $this->load->view('templates/footer');
        } else {
            $mproblem = $this->input->post('mproblem');
            switch ($mproblem) {
                case '200':
                    # code...
                    $mproblem = 'Hmj';
                    break;
                case '300':
                    # code...
                    $mproblem = 'Prestasi';
                    break;
                case '400':
                    # code...
                    $mproblem = 'KependidikanInternal';
                    break;

                default:
                    # code...
                    echo '404 Page Note Found';
                    break;
            }
            // var_dump($mproblem);
            // die;
            redirect($mproblem . '/index');
        }
    }
}
