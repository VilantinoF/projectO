<?php

class Auth extends CI_Controller
{

    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('MainProblem');
        }

        $data['tittle'] = 'Login Page';

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('auth/index');
            $this->load->view('templates/footer');
        } else {
            $this->login();
        }
    }

    private function login()
    {
        $username = $this->input->post('username');
        $pass = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {

            if (password_verify($pass, $user['password'])) {
                $data = [
                    'username' => $user['username']
                ];
                $this->session->set_userdata($data);
                redirect('MainProblem');
            } else {
                $this->session->set_flashdata('message', 'Wrong password!');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', 'Wrong username!');
            redirect('auth');
        }
    }


    public function signup()
    {
        if ($this->session->userdata('username')) {
            redirect('MainProblem');
        }

        $data['tittle'] = 'Registration Page';

        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'min_length[3]|required|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|matches[password]');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('auth/signup');
            $this->load->view('templates/footer');
        } else {

            $data = [
                'username' => strtolower($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT)
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', 'Account has been created. Please login!');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');

        redirect('Auth');
    }
}
