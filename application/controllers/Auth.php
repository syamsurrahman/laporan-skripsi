<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Crud');
    }

    public function index()
    {
        // ngecekdulu apakah dia admin atau bukan
        if ($this->session->userdata('masuk') == TRUE) {
            $url = base_url('Dashboard');
            redirect($url);
        } else {
            $this->load->view('layout/index');
        }
    }

    function auth()
    {
        $username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
        $password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);
        
        $where = array(
            'username' => $username,
            'password' => $password 
        );

        $cek_login = $this->Crud->TampilData('tb_user', $this->db->where($where));

        if ($cek_login->num_rows() > 0) { 
            $data = $cek_login->row_array();
            
            $this->session->set_userdata('masuk', TRUE);
            if ($data['level'] == 1) {
                $this->session->set_userdata('ses_level', '1');
                $this->session->set_userdata('ses_username', $data['username']);
                $this->session->set_userdata('ses_nama', $data['nama_user']);
                $this->session->set_flashdata('notif', "
                Toast.fire({
                icon: 'success',
                title: 'Anda berhasil login sebagai Admin.'
                })");
                redirect('Dashboard');
            } elseif ($data['level'] == 2) {
                $this->session->set_userdata('ses_level', '2');
                $this->session->set_userdata('ses_username', $data['username']);
                $this->session->set_userdata('ses_nama', $data['nama_user']);
                $this->session->set_flashdata('notif', "
                Toast.fire({
                icon: 'success',
                title: 'Anda berhasil login sebagai Kepala Puskesmas.'
                })");
                redirect('Dashboard');
            } elseif ($data['level'] == 3) {
                $this->session->set_userdata('ses_level', '3');
                $this->session->set_userdata('ses_username', $data['username']);
                $this->session->set_userdata('ses_nama', $data['nama_user']);
                $this->session->set_flashdata('notif', "
                Toast.fire({
                icon: 'success',
                title: 'Anda berhasil login sebagai Petugas.'
                })");
                redirect('Dashboard');
            }

        } else {  // jika username dan password tidak ditemukan atau salah
            $url = base_url('Auth');
            $this->session->set_flashdata('notif', "
                Toast.fire({
                icon: 'error',
                title: 'Username atau password yang anda masukkan salah.'
                })");
            redirect($url);
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        $url = base_url('Auth');
        $this->session->set_flashdata('notif', "
                Toast.fire({
                icon: 'success',
                title: 'Anda berhasil logout dari aplikasi'
                })");   
        redirect($url);
    }
}