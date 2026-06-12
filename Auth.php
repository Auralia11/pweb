<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MahasiswaModel');
        $this->load->helper(['form', 'url']);
        $this->load->library(['form_validation', 'session']);
    }

    public function index()
    {
        // Kalau sudah login, langsung ke dashboard
        if ($this->session->userdata('user')) {
            redirect('dashboard');
        }
        redirect('auth/login');
    }

    public function login()
    {
        // Kalau sudah login, langsung ke dashboard
        if ($this->session->userdata('user')) {
            redirect('dashboard');
        }

        if ($this->input->post()) {
            $this->form_validation->set_rules('email',    'Email',    'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

            if ($this->form_validation->run() === TRUE) {
                $credentials = [
                    'email'    => $this->input->post('email',    true),
                    'password' => $this->input->post('password', true),
                ];

                $status = $this->MahasiswaModel->checkAccount($credentials);

                if ($status) {
                    // Ambil data user untuk disimpan di session
                    $this->db->where('mahasiswa_email', $credentials['email']);
                    $this->db->where('mahasiswa_password', $credentials['password']);
                    $user = $this->db->get('mahasiswa', 1)->row_array();

                    $this->session->set_userdata('user', $user);

                    redirect('dashboard');
                } else {
                    $this->session->set_flashdata('error', 'Email atau password salah.');
                }
            }
        }

        $header['title'] = 'Login';
        $this->load->view('auth/login');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}