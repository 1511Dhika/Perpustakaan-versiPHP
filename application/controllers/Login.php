<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper(['form', 'url']);
        $this->load->library(['session', 'form_validation']);
        $this->load->model('M_login');
    }

    public function index()
    {
        // Jika sudah login, redirect ke dashboard
        if ($this->session->userdata('masuk_perpus')) {
            redirect('dashboard');
        }
        $this->data['title_web'] = 'Login | Sistem Informasi Perpustakaan';
        $this->load->view('login_view', $this->data);
    }

    public function auth()
    {
        // Validasi input
        $this->form_validation->set_rules('user', 'Username', 'required|trim');
        $this->form_validation->set_rules('pass', 'Password', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Username dan Password wajib diisi!');
            redirect(base_url());
        } else {
            $user = $this->input->post('user', TRUE);
            $pass = $this->input->post('pass', TRUE);

            // Menggunakan Query Builder
            $user_data = $this->db->where('user', $user)
                                  ->where('pass', md5($pass))
                                  ->get('tbl_login')
                                  ->row_array();

            if (!empty($user_data)) {
                // Set session data
                $session_data = [
                    'masuk_perpus' => TRUE,
                    'level' => $user_data['level'],
                    'ses_id' => $user_data['id_login'],
                    'anggota_id' => $user_data['anggota_id']
                ];
                $this->session->set_userdata($session_data);

                // Redirect ke dashboard
                redirect('dashboard');
            } else {
                // Gagal login
                $this->session->set_flashdata('error', 'Login Gagal, Periksa Kembali Username dan Password Anda!');
                redirect(base_url());
            }
        }
    }

    public function logout()
    {
        // Hapus semua session
        $this->session->sess_destroy();
        $this->session->set_flashdata('message', 'Anda telah logout.');
        redirect(base_url());
    }
}
